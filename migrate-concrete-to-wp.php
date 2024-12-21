<?php

// エラーレポートを有効化（開発中のみ有効にする）
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Concrete CMS データベース接続設定
$concrete_db_host = 'mysql202.phy.lolipop.lan'; // Concrete CMSのDBホスト
$concrete_db_user = 'LAA1377707'; // Concrete CMSのDBユーザー
$concrete_db_pass = 'passW0d15'; // Concrete CMSのDBパスワード
$concrete_db_name = 'LAA1377707-oscssdb2023'; // Concrete CMSのDB名

$concrete_db = new mysqli($concrete_db_host, $concrete_db_user, $concrete_db_pass, $concrete_db_name);

if ($concrete_db->connect_error) {
    die("Concrete CMS DB接続失敗: " . $concrete_db->connect_error);
}

// 2. WordPress データベース接続設定
$wp_db_host = 'mysql309.phy.lolipop.lan'; // WordPressのDBホスト
$wp_db_user = 'LAA1377707'; // WordPressのDBユーザー
$wp_db_pass = 'passW0d23'; // WordPressのDBパスワード
$wp_db_name = 'LAA1377707-stgdb202412'; // WordPressのDB名

$wp_db = new mysqli($wp_db_host, $wp_db_user, $wp_db_pass, $wp_db_name);

if ($wp_db->connect_error) {
    die("WordPress DB接続失敗: " . $wp_db->connect_error);
}
// 3. GROUP_CONCAT制限の拡張
$concrete_db->query("SET SESSION group_concat_max_len = 1000000");

// 4. Concrete CMSから記事データを取得
$query = "
    SELECT 
    psi.cID, 
    psi.cName, 
    psi.cDescription, 
    GROUP_CONCAT(DISTINCT btl.content SEPARATOR '\n') AS html_content, 
    psi.cPath, 
    SUBSTRING_INDEX(psi.cPath, '/', -1) AS slug, 
    psi.cDatePublic, 
    psi.cDateLastIndexed, 
    p.cIsActive
FROM 
    PageSearchIndex psi
JOIN 
    Pages p ON psi.cID = p.cID
JOIN 
    CollectionVersionBlocks cvb ON p.cID = cvb.cID
JOIN 
    Blocks b ON cvb.bID = b.bID
JOIN 
    btContentLocal btl ON b.bID = btl.bID
WHERE 
    psi.cPath LIKE '%/blog/%'
GROUP BY 
    psi.cID, 
    psi.cName, 
    psi.cDescription, 
    psi.cPath, 
    psi.cDatePublic, 
    psi.cDateLastIndexed, 
    p.cIsActive;";

$result = $concrete_db->query($query);
if (!$result) {
    die("データ取得エラー: " . $concrete_db->error);
}

// データをグループ化し、PHP側で結合
$articles = [];
while ($row = $result->fetch_assoc()) {
    $cID = $row['cID'];
    if (!isset($articles[$cID])) {
        $articles[$cID] = [
            'title' => $row['cName'],
            'description' => $row['cDescription'],
            'content' => '',
            'slug' => $row['slug'],
            'date_public' => $row['cDatePublic'],
            'date_last_indexed' => $row['cDateLastIndexed'],
            'is_active' => $row['cIsActive'],
        ];
    }
    // コンテンツを結合
    $articles[$cID]['content'] .= $row['html_content'] . "\n";

    // 置換処理
    $articles[$cID]['content'] = str_replace(
        '/application/files/7616/5064/4524/my-icon.jpg',
        '/wp-content/uploads/2024/12/my-icon.svg',
        $articles[$cID]['content']
    );
}

echo "データ移行前。<br>";

// 5. WordPressにデータをインポート
foreach ($articles as $article) {
    //$title = $wp_db->real_escape_string($article['title']);
    //$description = $wp_db->real_escape_string($article['description']);
    $content = $wp_db->real_escape_string($article['content']);
    $slug = $wp_db->real_escape_string($article['slug']);
    //$date_public = $wp_db->real_escape_string($article['date_public']);
    //$date_last_indexed = $wp_db->real_escape_string($article['date_last_indexed']);
    //$is_active = (int)$article['is_active'];

    $content_length = strlen($content);

    // デバッグ用表示
    //echo "Title: $title<br>";
    //echo "Description: $description<br>";
    if ($slug == "where-is-the-source-media-in-ga4") {
        echo "Slug: $slug<br>";
        echo "Content Length: $content_length<br>";
        echo "Content: $content<br>";
    }



    //echo "Date Public: $date_public<br>";
    //echo "Date Last Indexed: $date_last_indexed<br>";
    //echo "Is Active: $is_active<br>";

    // WordPressの投稿用クエリ
    $insert_query = "
        UPDATE wp20241216115717_posts 
    SET post_content = '$content', 
        post_modified = NOW(), 
        post_modified_gmt = UTC_TIMESTAMP()
    WHERE post_name = '$slug';
";

    if (!$wp_db->query($insert_query)) {
        error_log("記事挿入エラー: " . $wp_db->error);
    } else {
        echo "記事「{$slug}」をインポートしました。<br>";
    }
}


// 6. データベース接続を閉じる
$concrete_db->close();
$wp_db->close();

echo "データ移行が完了しました。<br>";

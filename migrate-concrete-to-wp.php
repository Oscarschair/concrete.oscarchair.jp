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

// 3. Concrete CMSから記事データを取得
$query = "SELECT 
    psi.cID, 
    psi.cName, 
    psi.cDescription, 
    psi.content, 
    psi.cPath, 
    psi.cDatePublic, 
    psi.cDateLastIndexed, 
    p.cParentID, 
    p.cIsActive
FROM 
    PageSearchIndex psi
JOIN 
    Pages p ON psi.cID = p.cID
WHERE 
    psi.cPath LIKE '%blog%';";

$result = $concrete_db->query($query);

if (!$result) {
    die("データ取得エラー: " . $concrete_db->error);
}


echo "データ移行前。\n";

// 4. データをWordPressにインポート
while ($row = $result->fetch_assoc()) {
    echo "データ移行中。\n";

    // Concrete CMSデータ
    $title = $wp_db->real_escape_string($row['cName']); // 記事タイトル
    $content = $wp_db->real_escape_string($row['content']); // 記事本文
    $date = $row['cDatePublic']; // 公開日時

    // WordPressの投稿用クエリ
    $insert_query = "
            INSERT INTO wp_posts (post_title, post_content, post_status, post_type, post_date, post_date_gmt)
            VALUES ('$title', '$content', 'publish', 'post', '$date', '$date')
        ";

    if (!$wp_db->query($insert_query)) {
        error_log("記事挿入エラー: " . $wp_db->error);
    } else {
        echo "記事「{$title}」をインポートしました。\n";
    }
}

// 5. データベース接続を閉じる
$concrete_db->close();
$wp_db->close();

echo "データ移行が完了しました。\n";
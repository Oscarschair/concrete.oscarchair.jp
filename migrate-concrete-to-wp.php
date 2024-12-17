<?php

//データ移行完了したので、コメントアウトする

// // エラーレポートを有効化（開発中のみ有効にする）
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // 1. Concrete CMS データベース接続設定
// $concrete_db_host = 'mysql202.phy.lolipop.lan'; // Concrete CMSのDBホスト
// $concrete_db_user = 'LAA1377707'; // Concrete CMSのDBユーザー
// $concrete_db_pass = 'passW0d15'; // Concrete CMSのDBパスワード
// $concrete_db_name = 'LAA1377707-oscssdb2023'; // Concrete CMSのDB名

// $concrete_db = new mysqli($concrete_db_host, $concrete_db_user, $concrete_db_pass, $concrete_db_name);

// if ($concrete_db->connect_error) {
//     die("Concrete CMS DB接続失敗: " . $concrete_db->connect_error);
// }

// // 2. WordPress データベース接続設定
// $wp_db_host = 'mysql309.phy.lolipop.lan'; // WordPressのDBホスト
// $wp_db_user = 'LAA1377707'; // WordPressのDBユーザー
// $wp_db_pass = 'passW0d23'; // WordPressのDBパスワード
// $wp_db_name = 'LAA1377707-stgdb202412'; // WordPressのDB名

// $wp_db = new mysqli($wp_db_host, $wp_db_user, $wp_db_pass, $wp_db_name);

// if ($wp_db->connect_error) {
//     die("WordPress DB接続失敗: " . $wp_db->connect_error);
// }

// // 3. Concrete CMSから記事データを取得
// $query =
//     "SELECT 
//     psi.cID, 
//     psi.cName, 
//     psi.cDescription, 
//     GROUP_CONCAT(DISTINCT btl.content SEPARATOR '\n') AS html_content, -- 複数のHTMLを1つにまとめる
//     psi.cPath, 
//     SUBSTRING_INDEX(psi.cPath, '/', -1) AS slug, 
//     psi.cDatePublic, 
//     psi.cDateLastIndexed, 
//     p.cIsActive
// FROM 
//     PageSearchIndex psi
// JOIN 
//     Pages p ON psi.cID = p.cID
// JOIN 
//     CollectionVersionBlocks cvb ON p.cID = cvb.cID
// JOIN 
//     Blocks b ON cvb.bID = b.bID
// JOIN 
//     btContentLocal btl ON b.bID = btl.bID
// WHERE 
//     psi.cPath LIKE '%/blog/%'
// GROUP BY 
//     psi.cID, 
//     psi.cName, 
//     psi.cDescription, 
//     psi.cPath, 
//     psi.cDatePublic, 
//     psi.cDateLastIndexed, 
//     p.cIsActive;";

// $result = $concrete_db->query($query);

// if (!$result) {
//     die("データ取得エラー: " . $concrete_db->error);
// }


// echo "データ移行前。<br>";

// // 4. データをWordPressにインポート
// while ($row = $result->fetch_assoc()) {
//     echo "データ移行中。 <br><br><br>";

//     // Concrete CMSデータ
//     $cID = $wp_db->real_escape_string($row['cID']); // 記事タイトル
//     $title = $wp_db->real_escape_string($row['cName']); // 記事タイトル
//     $cDescription = $wp_db->real_escape_string($row['cDescription']); // 記事タイトル
//     $content = $wp_db->real_escape_string($row['html_content']); // 記事タイトル
//     $cPath = $wp_db->real_escape_string($row['cPath']); // 記事タイトル
//     $slug = $wp_db->real_escape_string($row['slug']); // 記事タイトル
//     $cDatePublic = $wp_db->real_escape_string($row['cDatePublic']); // 記事タイトル
//     $cDateLastIndexed = $wp_db->real_escape_string($row['cDateLastIndexed']); // 記事タイトル
//     $cIsActive = $wp_db->real_escape_string($row['cIsActive']); // 記事タイトル

//     echo "cID:$cID <br>";
//     echo "Title:$title <br>";
//     echo "cDescription:$cDescription <br>";
//     //echo "content:$content <br>";
//     echo "cPath:$cPath <br>";
//     echo "slug:$slug <br>";
//     echo "cDatePublic:$cDatePublic <br>";
//     echo "cDateLastIndexed:$cDateLastIndexed <br>";
//     echo "cIsActive:$cIsActive <br>";

//     // WordPressの投稿用クエリ
//     $insert_query = "
//         INSERT INTO wp20241216115717_posts (
//             post_author, post_date, post_date_gmt, post_content, post_title, 
//             post_excerpt, post_status, post_type, post_name, post_modified, post_modified_gmt
//         ) VALUES (
//             1, '$cDatePublic', '$cDatePublic', '$content', '$title', 
//             '$cDescription', 'publish', 'post', '$slug', '$cDateLastIndexed', '$cDateLastIndexed'
//         )";


//     if (!$wp_db->query($insert_query)) {
//         error_log("記事挿入エラー: " . $wp_db->error);
//     } else {
//         echo "記事「{$title}」をインポートしました。<br>";
//     }
// }

// // 5. データベース接続を閉じる
// $concrete_db->close();
// $wp_db->close();

// echo "データ移行が完了しました。<br>";
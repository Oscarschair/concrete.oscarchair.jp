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
$concrete_db->set_charset("utf8mb4");

// 2. WordPress データベース接続設定
$wp_db_host = 'mysql309.phy.lolipop.lan'; // WordPressのDBホスト
$wp_db_user = 'LAA1377707'; // WordPressのDBユーザー
$wp_db_pass = 'passW0d23'; // WordPressのDBパスワード
$wp_db_name = 'LAA1377707-stgdb202412'; // WordPressのDB名

$wp_db = new mysqli($wp_db_host, $wp_db_user, $wp_db_pass, $wp_db_name);

if ($wp_db->connect_error) {
    die("WordPress DB接続失敗: " . $wp_db->connect_error);
}
$wp_db->set_charset("utf8mb4");

// 1. WordPressの投稿データを取得
$post_query = "SELECT ID ,post_name ,post_content FROM wp20241216115717_posts WHERE post_content LIKE '%<concrete-picture%' Limit 1";
$post_results = $wp_db->query($post_query);

if ($post_results->num_rows > 0) {
    while ($post = $post_results->fetch_assoc()) {
        $post_id = $post['ID'];
        $post_name = $post['post_name'];
        $post_content = $post['post_content'];

        echo "ID:$post_id<br>";
        echo "post_name:$post_name<br>";
        // echo "post_content:$post_content<br>";

        // 2. concrete-picture タグを解析
        preg_match_all('/<concrete-picture[^>]*>/i', $post_content, $matches);

        if (!empty($matches[0])) {
            echo "<strong>見つかった concrete-picture タグ:</strong><br>";
            foreach ($matches[0] as $match) {
                echo htmlspecialchars($match) . "<br>"; // HTMLエスケープして表示
                // 3. fID を取得
                if (preg_match('/fID="(\d+)"/i', $match, $fid_match)) {
                    $fid = $fid_match[1]; // fID の値
                    echo "fID: " . htmlspecialchars($fid) . "<br>";
                } else {
                    echo "fID が見つかりませんでした。<br>";
                }
            }
        } else {
            echo "concrete-picture タグが見つかりませんでした。<br>";
        }

        // 3. fid に対応する画像URLを取得
        // foreach ($fid_list as $fid) {

        // echo "fid:$fid<br>";
        //             $fid = (int) $fid; // セキュリティのため整数型にキャスト
        //             $file_query = "SELECT fvFilename, fvPath FROM FileVersions WHERE fID = $fid ORDER BY fvID DESC LIMIT 1";
        //             $file_result = $concrete_db->query($file_query);

        //             if ($file_result && $file_row = $file_result->fetch_assoc()) {
        //                 $file_url = str_replace("/application/", "/wp-content/", $file_row['fvPath']);
        //                 $fid_url_map[$fid] = $file_url;
        // }
        // }

        //         // 4. post_content 内の <concrete-picture> を <img> に変換
        //         foreach ($fid_url_map as $fid => $url) {
        //             $post_content = preg_replace(
        //                 '/<concrete-picture[^>]+fid="' . $fid . '"[^>]*>/',
        //                 '<img src="' . $url . '" alt="Image">',
        //                 $post_content
        //             );
        //         }

        //         // 5. WordPressの投稿データを更新
        //         $update_query = "UPDATE wp20241216115717_posts SET post_content = ? WHERE ID = ?";
        //         $stmt = $wp_db->prepare($update_query);
        //         $stmt->bind_param("si", $post_content, $post_id);
        //         if ($stmt->execute()) {
        //             echo "投稿ID $post_id の画像を変換しました。<br>";
        //         } else {
        //             echo "投稿ID $post_id の更新に失敗しました: " . $stmt->error . "<br>";
        //         }
        //         $stmt->close();
        //     }
    }
} else {
    echo "対象の投稿が見つかりませんでした。<br>";
}

// データベース接続を閉じる
$concrete_db->close();
$wp_db->close();

echo "データ変換が完了しました。<br>";

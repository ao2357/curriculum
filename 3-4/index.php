<?php

// セッション開始
session_start();
require_once('getData.php');

// クラス読込
$getData = new getData();

// ユーザ情報取得
$myId = $getData->getUserData()['id'];
$myLastname = $getData->getUserData()['last_name'];
$myFirstname = $getData->getUserData()['first_name'];
$myLastlogin = $getData->getUserData()['last_login'];

// カテゴリ登録
$categories[1] = "食事";
$categories[2] = "旅行";
// 表データ取得
try {
    $GD = $getData->getPostData();
    while ($row = $GD->fetch(PDO::FETCH_ASSOC)) {
        switch ($row['category_no']){
            case 1: $row['category_no'] = $categories[1];
                    break;
            case 2: $row['category_no'] = $categories[2];
                    break;
            default: $row['category_no'] = "その他";
        }
        $table[$row['id']]= $row;
        $row = null;
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
$getData = null;

echo <<< HTML
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>Y&I</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper"> 
        <div class="header">
            <div class="header-left">
                <img src="1599315827_logo.png" width="200px" alt="Y&I Group Inc.">
            </div>
            <div class="header-right-top">
                ようこそ　{$myLastname} {$myFirstname}　さん
            </div>
            <div class="header-right-bottom">
                最終ログイン日：　{$myLastlogin}
            </div>
        </div>
        <div class="middle"> 
            <table align="center">
                <tr>
                    <td class="index id">記事ID</td>
                    <td class="index title">タイトル</td>
                    <td class="index category_no">カテゴリ</td>
                    <td class="index comment">本文</td>
                    <td class="index created">投稿日</td>
                </tr>

HTML;

for ($i = 5; $i > 0; $i = $i-1){ 
echo <<< HTML
                <tr>
                    <td class="id">{$table[$i]['id']}</td>
                    <td class="title">{$table[$i]['title']}</td>
                    <td class="category_no">{$table[$i]['category_no']}</td>
                    <td class="comment">{$table[$i]['comment']}</td>
                    <td class="created">{$table[$i]['created']}</td>
                </tr>

HTML;
};

echo <<< HTML
            </table></div>
            <div class="footer">Y&I group.inc</div>
        </div>
        </body>
    </html>
HTML;
?>
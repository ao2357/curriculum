<html>
    <head>
        <title>PHPの研修カリキュラム2-12</title>
    </head>
    <body>

    <form action="result.php" method="post">
        お名前：<input type="text" name="my_name" />
        <br>
        ご希望商品：
            <input type="radio" name="item" value="Ａ">Ａ賞
            <input type="radio" name="item" value="Ｂ">Ｂ賞
            <input type="radio" name="item" value="Ｃ">Ｃ賞
        <br>
        個数：
            <select name="num">
        <?php
            for ($i=1;$i<=10;$i++){
            echo "<option value=".$i.">".$i."</option>";
            }
        ?>
          </select>
        <br>
        <input type="submit" value="申込" />
    </form>

    <br>
<?php
echo "1.モジュール"."<br>";
echo "　ハードウェアやソフトウェアにおける、ひとまとまりの機能・要素のこと。"."<br>";
echo "<br>";
echo "2.バージョン管理システム"."<br>";
echo "　コンピュータ上でファイルの変更履歴を管理するシステム。"."<br>";
echo "<br>";
echo "3.サブクエリ"."<br>";
echo "　SQLの中に書くSQLのこと。 SQL文を実行することをクエリの発行と呼ぶ。"."<br>";
?>

    </body>
</html>
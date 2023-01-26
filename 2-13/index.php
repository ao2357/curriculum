<html>
    <head>
        <title>PHPの研修カリキュラム2-13</title>
    </head>
    <body>

    <form action="result.php" method="post">
        半径：
        <select name="num1">
        <?php
            for ($i=1;$i<=10;$i=$i+0.1){
            echo "<option value=".$i.">".$i."</option>";
            }
        ?>
          </select>
        <input type="hidden" value="<?php echo mt_rand(1,10); ?>" name="num2">
        <br>
        元の文字列：<input type="text" name="str_org" />
        <br>
        検索文字列：<input type="text" name="str_find" />
        <br>
        置換文字列：<input type="text" name="str_rep" />
        <br>
        <input type="submit" value="送信" />
    </form>

    <br>
<?php
echo "1.PostgreSQL・Oracle SQL"."<br>";
echo "　オープンソースソフトウェア（OSS）のリレーショナルデータベース管理システム（RDBMS）。"."<br>";
echo "<br>";
echo "2.TortoiseGit・TortoiseSVN"."<br>";
echo "　分散型バージョン管理システムであるGit及びバージョン管理システムであるSubversionのクライアントフロントエンド。"."<br>";
echo "<br>";
echo "3.外部設計・内部設計"."<br>";
echo "　システム開発の工程の一つ。クライアントから見える部分を設計するのが外部、見えない部分を設計するのが内部設計。"."<br>";
?>

    </body>
</html>
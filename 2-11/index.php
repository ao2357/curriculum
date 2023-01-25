<html>
    <head>
        <title>PHPの研修カリキュラム2-11</title>
    </head>
    <body>

    <form action="result.php" method="post">
        名前：<input type="text" name="my_name" />
        <br>
        メールアドレス：<input type="text" name="email" />
        <br>
        パスワード：<input type="password" name="password" />
        <br>
        <input type="submit" value="送信" />
    </form>

    <br>
<?php
echo "1.仕様書・設計書"."<br>";
echo "　「仕様書」完成イメージを明確にした資料。着地・結果を示すもの。"."<br>";
echo "　「設計書」完成するまでの制作工程を明確にした資料。制作過程を示すもの。"."<br>";
echo "<br>";
echo "2.Git"."<br>";
echo "　プログラムのソースコードなどの変更履歴を記録・追跡するための分散型バージョン管理システム。"."<br>";
echo "<br>";
echo "3.マージツール"."<br>";
echo "　ファイルやプロジェクトの変更履歴の流れをある時点を起点に分岐させたブランチを再び元の流れに統合させるためのツール。"."<br>";
?>

    </body>
</html>
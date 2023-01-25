<html>
    <head>
        <meta title ="PHPの研修カリキュラム2-7">
    </head>
    <body>

<?php
    $color = [ "red" => "赤" , "blue" => "青" , "green" => "緑" ];
    var_dump($color);
    echo "<br>";
    $color[ "yellow" ] = "黄色" ;
    var_dump($color);
    echo "<br>";
    echo "<br>";
?>


<?php
echo "1.プルリクエスト（マージリクエスト）"."<br>";
echo "　分散バージョン管理システム（VCS）の機能の一つで、コードなどを追加・修正した際、本体への反映を他の開発者に依頼する機能。"."<br>";
echo "<br>";
echo "2.Git Flow"."<br>";
echo "　Gitにおけるリポジトリの分岐モデル及びそのルール。それぞれのブランチを明確に定義し、複数人での開発時の混乱を防ぐ。"."<br>";
echo "<br>";
echo "3.CRON"."<br>";
echo "　多くのUNIX系OSで標準的に利用される常駐プログラムの一種。利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動する。"."<br>";
?>

    </body>
</html>
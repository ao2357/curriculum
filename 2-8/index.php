<html>
    <head>
        <meta title ="PHPの研修カリキュラム2-8">
    </head>
    <body>

<?php
    $fruits = [ "apple" => "りんご" , "orange" => "みかん" , "peach" => "もも" ];
    foreach($fruits as $key => $val){
        echo $key."といったら".$val;
        echo "<br>";
    }
    echo "<br>";
?>


<?php
echo "1.トランザクション"."<br>";
echo "　密接に関連していて切り離すことができない複数データや、一まとめに処理を行う単位、またはそのデータのこと。"."<br>";
echo "<br>";
echo "2.排他ロック"."<br>";
echo "　データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、他の実行主体によるアクセスを完全に禁止するもの。"."<br>";
echo "<br>";
echo "3.チューニング"."<br>";
echo "　システムやソフトウエアの性能を最大限引き出すように、構成や設定を調整すること。"."<br>";
?>

    </body>
</html>
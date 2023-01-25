<html>
    <head>
        <meta title ="PHPの研修カリキュラム2-9">
    </head>
    <body>

<?php
for($i=1;$i<=100;$i++){
    if ($i % 3 > 0 && $i % 5 > 0){
        echo $i."<br>";
    }
    elseif($i % 5 > 0){
        echo "fizz!<br>";
    }
    elseif($i % 3 > 0){
        echo "Buzz!<br>";
    }
    else{
        echo "FizzBuzz!<br>";
    }
}
?>
<br>
<?php
echo "1.パフォーマンス"."<br>";
echo "　コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのこと。"."<br>";
echo "<br>";
echo "2.スロークエリ"."<br>";
echo "　データベース管理システム（DBMS）に対する問い合わせ（クエリ）のうち、一定の基準に照らして遅い、時間がかかっているもの。"."<br>";
echo "<br>";
echo "3.クエリログ"."<br>";
echo "　データソースに対して実行された実行中のクエリと完了したクエリをすべてリストしたもの。"."<br>";
?>

    </body>
</html>
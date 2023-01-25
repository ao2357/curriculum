<html>
    <head>
        <title>PHPの研修カリキュラム2-10</title>
    </head>
    <body>

<?php
function cuboid($x, $y, $z){
    $capacity = $x * $y * $z;
    return $capacity;
}
?>

<?php
    $x = 10;
    $y = 5;
    $z = 8;
    echo "縦".$y."cm、";
    echo "縦".$x."cm、";
    echo "縦".$z."cmの直方体の体積は ";
    echo cuboid($x, $y, $z)."cm²です。"."<br>";
?>

<br>
<?php
echo "1.ハッシュ化"."<br>";
echo "　データを不規則な文字列に変換する手法。"."<br>";
echo "<br>";
echo "2.総合テスト"."<br>";
echo "　ソフトウェアおよびシステムの検証手法の１つ。"."<br>";
echo "　構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。"."<br>";
echo "<br>";
echo "3.デバッグ"."<br>";
echo "　プログラム内の誤り（バグ, bug）を見つけて意図した通りの動作に修正するする作業。"."<br>";
?>

    </body>
</html>
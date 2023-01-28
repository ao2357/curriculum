<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$str_org = $_POST['str_org'];
$str_find = $_POST['str_find'];
$str_rep = $_POST['str_rep'];
?>

<html>
    <head>
        <title>PHPの研修カリキュラム2-13 result</title>
    </head>
    <body>
<?php
    printf("<p>半径%.1fの円が%d個あるとき、その合計を</p>", $num1, $num2);
    $area = $num1 * $num1 * pi() * $num2;
    $title = [ "ceil" , "floor" , "round" ];
    for ($i=0;$i<=2;$i++){
        $title[$i] = sprintf("%sした面積：%d<br>",$title[$i],$title[$i]($area));
        echo $title[$i];
    }
?>
<?php
    echo "<p>元の文字列を「".$str_org."」とするとき、</p>";
    printf("元の文字列「%s」の長さ：%d<br>", $str_org, strlen($str_org));
    printf("元の文字列の中で文字列「%s」が始まる場所：%d<br>", $str_find, strpos( $str_org, $str_find ));
    printf("元の文字列の先頭を削除したもの：%s<br>", substr( $str_org,1,strlen($str_org)-1 ));
    printf("元の文字列の先頭を削除したもの：%s<br>", substr( $str_org,1,strlen($str_org)-1 ));
    printf("元の文字列の%sを%sに置換したもの：%s<br>", $str_find, $str_rep, str_replace( $str_find, $str_rep, $str_org ));
?>
<br>
    </body>
</html>
<html>
    <head>
        <title>PHPの研修カリキュラム2-17</title>
    </head>
    <body>

    <p>ループ文 × 条件分岐</p>

<?php
    $i = 0;
    $num = 0; 
    while($num < 40){
        $i++;        
        $ran = mt_rand( 1, 6 ); 
        printf( "%d回目＝ %d<br>", $i, $ran );
        $num = $num + $ran; 
    } ;
    printf( "合計%d回でゴールしました<br>", $i );
?>

    <br>
    <hr>

    <p>関数 × 条件分岐</p>
<?php
    $timeNow = date( "H", time());
    printf( "今%d時台です<br>", $timeNow);
    if( $timeNow >= 17 || $timeNow <= 4 ){
        $message = "こんばんは";
    }elseif( $timeNow <= 10 ){
        $message = "おはようございます";
    }else{
        $message = "こんにちは";
    }
    echo $message;
?>

    </body>
</html>
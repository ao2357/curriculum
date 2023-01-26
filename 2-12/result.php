<?php
$my_name = $_POST['my_name'];
$item = $_POST['item'];
$num = $_POST['num'];
?>

<html>
    <head>
        <title>PHPの研修カリキュラム2-12 result</title>
    </head>
    <body>

<p>お名前：<?php echo $my_name; ?></p>
<p>ご希望景品<?php echo $item; ?>賞</p>
<p>個数：<?php echo $num; ?></p>
<br>
    </body>
</html>
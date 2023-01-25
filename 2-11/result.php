<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];
?>

<html>
    <head>
        <title>PHPの研修カリキュラム2-11 result</title>
    </head>
    <body>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $email; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>

    </body>
</html>
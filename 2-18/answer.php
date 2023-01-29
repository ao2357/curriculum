<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト answer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $name = $_POST["name"];
    $Q[1] = $_POST["Q1"];
    $Q[2] = $_POST["Q2"];
    $Q[3] = $_POST["Q3"];
    $A[1] = $_POST["Q1A"];
    $A[2] = $_POST["Q2A"];
    $A[3] = $_POST["Q3A"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function TF($Q, $A){
        if($Q ==$A){
            $message = "正解！" ;
        }else{
            $message = "残念・・・" ;
        }
        return $message;
    }
    ?>

<!--POST通信で送られてきた名前を表示-->
    <?php
    printf( "<p>%sさんの結果は・・・？</p>", $name );
    ?>

<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
    <?php
        $i = 1;
        echo TF($Q[$i],$A[$i]);
    ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
    <?php
        $i = 2;
        echo TF($Q[$i],$A[$i]);
    ?>
    
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
        $i = 3;
        echo TF($Q[$i],$A[$i]);
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト question</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //POST送信で送られてきた名前を受け取って変数を作成
        $name = $_POST["name"];
    //①画像を参考に問題文の選択肢の配列を作成してください。
        $Q[1] = array("80","22","20","21");
        $Q[2] = array("PHP","Python","JAVA","HTML");
        $Q[3] = array("join","select","insert","update");
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
        $A[1] = "80";
        $A[2] = "HTML";
        $A[3] = "select";
    ?>
    
    <!--POST通信で送られてきた名前を表示-->
    <?php
        printf( "<p>お疲れ様です%sさん</p>", $name );
    ?>

    <!--フォームの作成 通信はPOST通信で-->
    <form  action="answer.php" method="post">
    <?php printf('<input type="hidden" name="name" value="%s">', $name); ?>

    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        $i = 1;
        foreach($Q[$i] as $txt){
            printf('<input type="radio" name="Q%d" value="%s">%s', $i, $txt, $txt);
        }
        printf('<input type="hidden" name="Q%sA" value="%s"><br>', $i, $A[$i]);
    ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        $i = 2;
        foreach($Q[$i] as $txt){
            printf('<input type="radio" name="Q%d" value="%s">%s', $i, $txt, $txt);
        }
        printf('<input type="hidden" name="Q%sA" value="%s"><br>', $i, $A[$i]);
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        $i = 3;
        foreach($Q[$i] as $txt){
            printf('<input type="radio" name="Q%d" value="%s">%s', $i, $txt, $txt);
        }
        printf('<input type="hidden" name="Q%sA" value="%s"><br>', $i, $A[$i]);
    ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="submit" value="回答する">
    </form>
</body>
</html>
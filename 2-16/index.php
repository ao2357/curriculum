<html>
    <head>
        <title>PHPの研修カリキュラム2-16</title>
    </head>
    <body>

<?php
    // index.php
    $testFile = "test.txt";
    $contents = "こんにちは！\n";
    
    if (is_writable($testFile)) {    
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "a");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!<br><br>";
    
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
?>

<br>
<hr>
<?php
    $testFile2 = "test2.txt";
    
    if (is_readable($testFile2)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile2, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!<br>";
        exit;
    }
?>

    </body>
</html>
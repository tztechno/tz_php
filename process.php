<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $N = intval($_POST["N"]);
    $A = array_map('intval', explode(' ', $_POST["A"]));

    // 取得したデータを表示
    echo $N . PHP_EOL;
    echo implode(' ', $A) . PHP_EOL;
}

?>

<?php
    $KW = 350;
    $price = 0;
    if ($KW <= 100) {
        $price = $KW * 450;
    } elseif ($KW <= 200) {
        $price = $KW * 600;
    } elseif ($KW <= 300) {
        $price = $KW * 750;
    } elseif ($KW <= 500) {
        $price = $KW * 900;
    } elseif ($KW <= 1000) {
        $price = $KW * 1000;
    } else {
        $price = $KW * 1200;
    }
    echo "Số tiền phải nộp trước: " . $price . "<br>";
    echo "Số tiền phải nộp sau: " . $price * 1.1;
?>
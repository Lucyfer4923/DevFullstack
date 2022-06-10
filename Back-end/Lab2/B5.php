<?php
    $str = 'rayy@example.com';
    $str1 = strlen($str);
    $str2 = substr($str, 0, $str1-12);
    echo $str2;
?>
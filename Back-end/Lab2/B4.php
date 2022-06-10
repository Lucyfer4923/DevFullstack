<?php
    $i = 1;
    $tong = 0;
    $tongbp = 0;
    while($i <= 100){
        $tong = $tong + $i;
        $tongbp = $tongbp + $i*$i;
        $i++;
    }
    echo "Tổng của 100 số nguyên đầu tiên là $tong <br/>";
    echo "Tổng bình phương của 100 số nguyên đầu tiên là $tongbp";
?>
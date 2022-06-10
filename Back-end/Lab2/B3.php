<?php
    //Hãy viết chương trình cho phép tính và in ra tổng của 100 số nguyên đầu tiên (1-100), dùng vòng lặp While.Viết chương trình có sử dụng vòng lặp While cho phép in ra những số chia hết cho 3 trong khoảng từ 20-50.
    
    $i = 1;
    $tong = 0;
    while($i <= 100){
        $tong = $tong + $i;
        $i++;
    }
    echo "Tổng của 100 số nguyên đầu tiên là $tong";
    echo "<br/>";
    $j = 20;
    echo "Những số chia hết cho 3 trong khoảng từ 20-50 là: ";
    while($j <= 50){
        if($j % 3 == 0){
            echo "$j" . "  ";
        }
        $j++;
    }

?>
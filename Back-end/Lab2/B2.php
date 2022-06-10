<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>câu 2</title>
</head>
    <body>
        <?php
        $num = array('10','2','5','30','1','6');
        $max=null;
        $min=null;
        $posimax=null;
        $posimin=null;
        $tong=0;
        $tbcong=0;
        for($i=0; $i < count($num); $i++)
        {
            if($max==null)
            {
                $max=$num[$i];
                $posimax=$i;
            }
            else
            {
                if ($num[$i] > $max)
                {
                $max = $num[$i];
                $posimax = $i; 
                }
            }
        }
        for($j=0;$j < count($num); $j++)
        {
            if($min==null)
            {
                $min=$num[$j];
                $posimin=$j;
            }
            else
            {
                if ($num[$j] < $min)
                {
                $min = $num[$j];
                $posimin = $j; 
                }
            }
        $tong = $tong+$num[$j];
        }
        $tbcong=$tong/$j;
        echo "Giá trị lớn nhất là $max , ở vị trí $posimax <br/>";
        echo "Giá trị bé nhất là $min, ở vị trí $posimin <br/>";
        echo "Tổng các phần tử của mảng là $tong <br/>";
        echo "Trung bình cộng là $tbcong <br/>";
        ?>
    </body>
</html>
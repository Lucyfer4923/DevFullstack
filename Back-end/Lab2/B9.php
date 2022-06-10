<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $n = 10;
                for($i = 1; $i <= $n; $i++){
                    echo "<tr>";
                    for($j = 1; $j <= $n; $j++){
                        $num = range(1,100);
                        if(is_prime($num)){
                            echo "<td style='background-color: green; color: black;'>$num</td>";
                        }else{
                            echo "<td style='background-color: white; color: black;'>$num</td>";
                        }
                    }
                    echo "</tr>";
                }
                function is_prime($num){
                    if($num < 2){
                        return false;
                    }
                    for($i = 2; $i <= sqrt($num); $i++){
                        if($num % $i == 0){
                            return false;
                        }
                    }
                    return true;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
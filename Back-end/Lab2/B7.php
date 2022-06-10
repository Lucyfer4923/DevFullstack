<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px double black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $n = 8;
                for($i = 1; $i <= $n; $i++){
                    echo "<tr>";
                    for($j = 1; $j <= $n; $j++){
                        if($i % 2 == 0){
                            if($j % 2 == 0){
                                echo "<td style='background-color: black;'></td>";
                            }else{
                                echo "<td style='background-color: white;'></td>";
                            }
                        }else{
                            if($j % 2 == 0){
                                echo "<td style='background-color: white;'></td>";
                            }else{
                                echo "<td style='background-color: black;'></td>";
                            }
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
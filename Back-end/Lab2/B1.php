<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>câu 1</title>
</head>

<body>
    <form action="" method="POST">
        <div class="number">
            <label for="">Nhập số n từ bàn phím :</label>
            <input type="number" name="input">
        </div>
        <div class="submit">
            <input type="submit" value="In ra">
        </div>
    </form>
    <?php
    if (isset($_POST['input'])) {
        $n = $_POST['input'];
        for ($i = 1; $i <= $n; $i++) {
            echo $i . "<br>";
        }
    }


    ?>
</body>

</html>




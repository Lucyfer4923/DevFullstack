<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài tập 5</title>
</head>
<style type="text/css">
    form {
        line-height: 30px;
    }

    div.head {
        text-align: center;
        border-bottom-style: solid;

    }

    .buttonplus {
        background-color: #60d360;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px;
        margin: 10px;
    }

    .buttonminius {
        background-color: #73e3fd;
        color: white;
        border: none;
        border-radius: 5px;
        padding-right: 13px;
        padding-left: 13px;
        padding-top: 12px;
        padding-bottom: 12px;
        margin: 10px;

    }

    .buttonmultipy {
        background-color: #d35252;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px;
        margin: 10px;
    }

    .buttondivide {
        background-color: #ffc107;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px;
        margin: 10px;
    }

    div.error {
        color: red;
    }

    div.out {
        color: blue;
    }
</style>

<body>
    <header>
        <div class="head">
            <h2>Thực hành toán tử</h2>
        </div>
    </header>

    <form action=" " method="POST">
        <div class="input">
            <label for=""> Nhập số a </label> <br>
            <input type="text" name="inputa"><br>
        </div>
        <div class="input">
            <label> Nhập số b </label> <br>
            <input type="text" name="inputb"><br>
        </div>
        <button class="buttonplus" type="submit" name="plus">Cộng</button>
        <button class="buttonminius" type="submit" name="minius">Trừ</button>
        <button class="buttonmultipy" type="submit" name="multiply">Nhân</button>
        <button class="buttondivide" type="submit" name="divide">Chia</button>
    </form>


    <?php
    $cong = null;
    $tru = null;
    $nhan = null;
    $chia = null;

    if (isset($_POST['inputa']) && isset($_POST['inputb'])) {
        $a = $_POST['inputa'];
        $b = $_POST['inputb'];

        if ($a == "" || $b == "") { ?>

            <div class="error">
                <?php echo "Không được để trống số a hoặc số b"; ?>
            </div>

        <?php
            exit();
        }
        if (!is_numeric($a) || !is_numeric($b)) { ?>

            <div class="error">
                <?php echo "Chỉ được nhập số"; ?>
            </div>

            <?php
            exit();
        } else {
            if (isset($_POST['plus'])) {
                $cong = $a + $b;
            ?>
                <div class=out>
                    <?php echo "a + b = " . $cong . "<br>"; ?>
                </div>
            <?php
            }
            if (isset($_POST['minius'])) {
                $tru = $a - $b;
            ?>
                <div class=out>
                    <?php echo "a - b = " . $tru . "<br>"; ?>
                </div>
            <?php
            }
            if (isset($_POST['multiply'])) {
                $nhan = $a * $b;
            ?>
                <div class=out>
                    <?php echo "a * b = " . $nhan . "<br>"; ?>
                </div>
            <?php
            }
            if (isset($_POST['divide'])) {
                $chia = $a / $b;
            ?>
                <div class=out>
                    <?php echo "a / b = " . $chia . "<br>"; ?>
                </div>
    <?php
            }
        }
    } ?>
</body>

</html>
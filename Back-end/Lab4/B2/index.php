<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài tập 1</title>
</head>
<style type="text/css">
    html,
    body {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .loghead {
        padding: 21px 60px;
        background-color: lightgreen;
        text-align: center;
        border-radius: 18px 18px 0 0;
    }

    form {
        width: 30%;
        border-radius: 18px;
        box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .logcon {
        padding: 25px 25px 0;
    }

    .form:not(:last-child) {
        margin-bottom: 25px;
    }

    .logcon input {
        width: 100%;
        border: 0;
        background-color: lightgray;
        outline: none;
        padding: 14px 10px;
        box-sizing: border-box;
    }

    .logcon .remember {
        width: 20px;
        margin-top: 0px;
        margin-bottom: 20px;
    }

    .logcon button {
        width: 100%;
        border: 0;
        padding: 14px 14px;
        background-color: lightgreen;
        text-align: center;
        cursor: pointer;
    }

    .error {
        display: inline-block;
        margin-top: 10px;
        color: red;
        font-size: 20px;
    }

    .hidden {
        display: none !important;
    }
</style>

<body>
    <?php
    session_start();
    if (isset($_POST['login'])) {
        if ($_POST['username'] == "admin" && $_POST['password'] == "123456") {
            if (isset($_POST['remember-me'])) {
                setcookie('user', $_POST['username'], time() + 30, '/');
            }
            else {
                $_SESSION['username'] = $_POST['username'];
            }
            header("location: login_success.php");
        } 
        if ($_POST['username'] == NULL) {
            echo "<p class='error'>Username không được để trống!</p>";
        } else if ($_POST['password'] == NULL) {
            echo "<p class='error' >Password không được để trống!</p>";
        } else {
            echo "<p class='error'>Sai thông tin tài khoản hoặc mật khẩu!</p>";
        }
    }
    if (isset($_SESSION['logout_success'])) {
        $message = $_SESSION['logout_success'];
        unset($_SESSION['logout_success']);
    }
    if (isset($_SESSION['username'])) {
        header('location: login_success.php');
    }
    ?>
    <?php if (isset($message)) : ?>
        <p class="error"><?php echo $message; ?></p>
    <?php endif ?>
    <form action="" method="POST">
        <div class="loginclass">
            <div class="loghead">
                Sign in
            </div>
            <div class="logcon">
                <div class="form">
                    <input type="text" placeholder="Username" name="username" value='<?php if (isset($_POST['username']) && $_POST['username'] != NULL) {echo $_POST['username'];} ?>' />
                </div>
                <div class="form">
                    <input type="text" placeholder="Password" name="password" value='<?php if (isset($_POST['password']) && $_POST['password'] != NULL) {echo $_POST['password'];} ?>' />
                </div>
                <input class="remember" type="checkbox" name="remember-me" />Remember Me
                <div class="form">
                    <button type="submit" name="login">Login</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
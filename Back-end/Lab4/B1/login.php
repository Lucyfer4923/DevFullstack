<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "camnh" && $password == "123456") {
            $_SESSION['username'] = $username;
            header("Location: login-success.php");
        } else {
            echo "Wrong username or password";
        }
    }
    if (isset($_SESSION['logout-success'])) {
        $message = $_SESSION['logout-success'];
        unset($_SESSION['logout-success']);
    }
    if (isset($_SESSION['username'])) {
        header('location: login-success.php');
    }
    ?>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="submit" value="Login">
    </form>

</body>

</html>
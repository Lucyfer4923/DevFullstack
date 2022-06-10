<?php
    session_start();
    unset($_SESSION['username']);
    $_SESSION['logout-success'] = "Đăng xuất thành công";
    header("Location: login.php");
?>
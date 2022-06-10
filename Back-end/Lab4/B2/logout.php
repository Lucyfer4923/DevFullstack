<?php
    session_start();
    unset($_SESSION['username']);
    $_SESSION['logout_success'] = "Bạn đã đăng xuất khỏi hệ thống!";
    setcookie('user', '', time() - 1, '/');
    
    header("Location: index.php");
?>
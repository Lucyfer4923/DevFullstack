<?php
    session_start();
    date_default_timezone_set('Asia/Bangkok');
    echo "Đăng nhập thành công! <br>";
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    if (isset($_COOKIE['user'])) {
        $username = $_COOKIE['user'];
    }
    echo "Chào mừng bạn, $username <br>";
    echo "Thời gian hiện tại đang login: " . date('Y-m-d H:i:s') . "<br>";
    echo "<a href='logout.php' >Logout</a>";
    if (!isset($_SESSION['username']) && !isset($_COOKIE['user'])) {
        echo "<p class='error'>Bạn cần đăng nhập để có thể truy cập trang này!</p>";
    }
?>

















<?php
    session_start();
    echo "Welcome {$_SESSION['username']}";
    echo "<br>";
    echo "<a href='logout.php' >Logout</a>";
?>








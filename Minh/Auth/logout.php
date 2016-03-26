<?php
    $time = time() - 1000000;
    setcookie("email", "", $time, "/");
    setcookie("first_name", "", $time, "/");
    setcookie("last_name", "", $time, "/");
    setcookie("token", "", $time, "/");

    header("Location: http://bethanynegashfoundation.org/admin/pages/login.php");
 ?>

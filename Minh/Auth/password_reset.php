<?php
    require_once("lib/password.php");
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo 0;
    }
    else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $token = $_POST["token"];

        $hashedPassword = "false";
        while($hashedPassword == "false")
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE login_t SET password = '$hashedPassword' WHERE email = '$email';
                UPDATE forgot_password_t SET is_used = 1 WHERE token = '$token';";
        mysqli_query($db, $sql);

        // Redirect the user to either homepage or to login page
        echo 1;
    }
 ?>

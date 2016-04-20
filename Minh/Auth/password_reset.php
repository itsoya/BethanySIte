<?php
    require_once("lib/password.php");
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server

    if(!$db){
        echo "failed to connect";
    }

    else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $token = $_POST["token"];

        $hashedPassword = "false";
        while($hashedPassword == "false")
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE login_t SET password = '$hashedPassword' WHERE email = '$email';";
        $db->query($sql);

        $sql = "UPDATE forgot_password_t SET is_used = 1 WHERE token = '$token';"; // Update database so that this token can't be used again
        mysqli_query($db, $sql);
        $db->close();
        echo "success";
    }
 ?>

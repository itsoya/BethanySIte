<?php
    if(isset($_COOKIE["token"])) {
        $token = $_COOKIE["token"];

        $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
        //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server

        $sql = "SELECT * FROM login_token_t WHERE token = '$token';";
        $result = mysqli_query($db, $sql);

        $current_time = time();
        if($current_time - $result["creation_time"] > 86400)
            header("Location: http://bethanynegashfoundation.org/admin/pages/login.html");
    }
?>

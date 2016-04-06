<?php
    if(isset($_COOKIE["token"])) {
        $token = $_COOKIE["token"];

        $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
        //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server

        $sql = "SELECT * FROM login_token_t WHERE login_token = '$token';";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $current_time = time();

            // If token is expired
            if($current_time - $row["creation_time"] > 86400)
                header("Location: http://bethanynegashfoundation.org/admin/pages/login.php");

        }

        // If there's no token in database
        else {
            header("Location: http://bethanynegashfoundation.org/admin/pages/login.php");
        }
    }
    else{
        header("Location: http://bethanynegashfoundation.org/admin/pages/login.php");
    }
?>

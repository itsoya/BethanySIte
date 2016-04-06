<?php
    $email = $_POST["email"]; // Getting the email that was passed in
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo ("Failed to connect to database");
    }

    $sql = "SELECT * FROM login_t WHERE email = '$email'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $login_id = $row["login_id"];

    // Email exists
    if($login_id != ""){
        $name = $row["first_name"] . " " . $row["last_name"];
        $token = GenerateToken();
        $timeInSeconds = time();

        // Insert into forgot_password_t for password reset
        $sql = "INSERT INTO forgot_password_t(email, token, created_time)
                              VALUES('" . $GLOBALS['email'] . "', '$token', $timeInSeconds);";
        mysqli_query($GLOBALS['db'], $sql);
        SendEmail("http://bethanynegashfoundation.org/admin/pages/password_reset.php?token=$token&email=" .
                    $GLOBALS["email"], $name);
    }
    // Email doesn't exists
    else {
        echo "email doesn't exist";
    }

    function GenerateToken(){
        $charString = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $token = "";
        for($i = 0, $length = strlen($charString); $i < 20; $i++)
            $token .= $charString[rand(0, $length)];

        return $token;
    }

    function SendEmail($hyperLink, $name){
        // subject
        $subject = 'Bethany Negash Foundation Password Reset';

        // message
        $message = "<html>
                        <head>
                        <title>Bethany Negash Foundation Password Reset</title>
                        </head>
                        <body>
                            <p>
                                You have requested a password reset to your Bethany Negash Foundation account
                                Here is the Link to reset your password.
                            </p>
                            <a href='$hyperLink'>Password Reset</a>
                        </body>
                    </html>";

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= "To: $name <" . $GLOBALS["email"] .">" . "\r\n";
        $headers .= 'From: Bethany Negash Foundation <snegash@bethanynegashfoundation.com>' . "\r\n";

        // Mail it
        mail($GLOBALS["email"], $subject, $message, $headers);
        echo "success";
    }
?>

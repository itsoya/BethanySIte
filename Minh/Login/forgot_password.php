<?php

    $email = $_GET["email"]; // Getting the email that was passed in
    $email = "minhdi11@gmail.com";
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo ("Failed to connect to database");
    }

    function GenerateToken(){
        $charString = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $token = "";
        for($i = 0, $length = strlen($charString); $i < 20; $i++)
            $token .= $charString[rand(0, $length)];

        return $token;
    }
    $token = GenerateToken();
    $timeInSeconds = time();

    // Insert new if there isn't a transaction id already exist, else update
    $sql = "INSERT INTO forgot_password_t(email, token, created_time)
                          VALUES('$email', '$token', $timeInSeconds);";
    mysqli_query($db, $sql);

    SendEmail("http://bethanynegashfoundation.org/Minh/Login/password_reset_form.php?token=$token&email=$email");

    function SendEmail($hyperLink){
        // multiple recipients
        $to  = 'minhdi11@gmail.com' . ', '; // note the comma
        //$to .= 'wez@example.com';

        // subject
        $subject = 'Bethany Negash Foundation Password Reset';

        // message
        $message = "
        <html>
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
        </html>
        ";

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'To: Minh Pham <minhdi11@gmail.com>' . "\r\n";
        $headers .= 'From: <minhdi11@gmail.com>' . "\r\n";
        //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

        // Mail it
        mail($to, $subject, $message, $headers);
        echo 1;
    }
?>

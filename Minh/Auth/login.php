<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        die ("Failed to connect");
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    Login($email, $password, $db);

    /* =========================================================================
        Login is a function to either login or sign up an account
        $email = a string for user's email.
        $password = a string for user's password.
        @return success if authentication was success, fail if authentication was not success
    ============================================================================*/
    function Login($email, $password, $db){
        require_once("lib/password.php");
        $sql = "SELECT * FROM login_t WHERE email = '$email';";
        $result = mysqli_query($db, $sql);

        // email does exist, check to see if the password is correct
        if(mysqli_num_rows($result) > 0){
            // Check if the hashed password stored in the db is the same as the input password
            $row = mysqli_fetch_assoc($result);
            $isSuccess = (password_verify($password, $row["password"]) == '1') ? "success" : "fail";
            $isAdmin = $row["is_admin"];
            $id = $row['login_id'];
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            if($isSuccess == "success" && $isAdmin == "1"){

                $token = GenerateToken();
                $timeInSeconds = time();

                setcookie("email", "$email", $timeInSeconds + (86400), "/"); // This is 1 days
                setcookie("first_name", "$firstName", $timeInSeconds + (86400), "/"); // This is 1 days
                setcookie("last_name", "$lastName", $timeInSeconds + (86400), "/"); // This is 1 days
                setcookie("token", "$token", $timeInSeconds + (86400), "/"); // This is 1 days

                $sql_token = "INSERT INTO login_token_t(login_token, login_id, creation_time)
                                            VALUES('$token', $id, $timeInSeconds);";
                //echo $sql_token;
                if(mysqli_query($db, $sql_token))
                    echo "success"; // Send back if the login was successful or unsuccessful
                else {
                    echo "insert token failed";
                }
            }
            elseif($isAdmin == "0")
                echo "account is not admin";
            // If email does exist but password doesn't match
            else{
                echo "email or password is incorrect";
            }
        }
        // email doesn't exist in database
        else {
            echo "email or password is incorrect";
        }
        $db->close();
    }

    /* ================================================================================================
        GenerateToken is a function that genrerate a token to be used for sessions
        @return a token 25 character string
    ================================================================================================ */
    function GenerateToken(){
        //$charString = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // charString randomized
        $charString = "Yp3gutvJn9OyIK3iETwpLIG7ep1IsHMq6QGAjcjHl8f4SjmxcSXYBD5P37yvOk";
        $token = "";
        for($i = 0, $length = strlen($charString); $i < 25; $i++){
            $token .= $charString[rand(0, $length -1)];
        }
        return $token;
    }
 ?>

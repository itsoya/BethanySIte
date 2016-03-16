<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        die ("Failed to connect");
    }

    else{
        $email = $_POST["email"];
        $password = $_POST["password"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        SignUp($email, $password, $firstName, $lastName);
    }

    /* ============================================================================
        SignUp is a function to sign up a new account
        $email = a string for user's email.
        $password = a string for user's password.
        @return success for creation being successful, fail for creation failed because email already exists
    ============================================================================ */
    function SignUp($email, $password, $firstName, $lastName){
        require_once("lib/password.php");
        global $db;
        $sql = "SELECT email from login_t WHERE email = '$email';";
        $result = $db->query($sql);
        if(mysqli_num_rows($result) == 0){
            // This checks to see if the hashed password is did not fail during the hashing process
            $hashedPassword = "false";
            while($hashedPassword == "false")
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO login_t(email, password, first_name, last_name)
                                        VALUES('$email', '$hashedPassword', '$firstName', '$lastName');";
            $db->query($sql);
            echo "success";
        }

        else {
            echo "fail";
        }
        $db->close();
    }
 ?>

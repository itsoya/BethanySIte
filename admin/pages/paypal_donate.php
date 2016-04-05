<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        die ("Failed to connect");
    }

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $amount = $_POST["amount"];
    $email = $_POST["email"];
    $streetAddress = $_POST["streetAddress"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    // Insert new if there isn't a transaction id already exist, else update
    $sql = "INSERT INTO `paypal_manual_t`(`first_name`, `last_name`, `amount`, `email`, `street_address`, `city`, `state`, `zip`)
            VALUES ('$firstName', '$lastName', '$amount', '$email', '$streetAddress', '$city', '$state', '$zip');";

    if(mysqli_query($db, $sql))
        echo "success";
    else
        echo "try again";
 ?>

<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server

    if(!$db){
        die ("Failed to connect");
    }

    $first_name = $_POST["fName"];
    $last_name = $_POST["lName"];
    $amount = $_POST["amount"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $payment_type = $_POST["type"];
    $sql = "INSERT INTO manual_donation_t (first_name, last_name, amount, email, country";
    $related_project = $payment_type == "Cash" ? $_POST["related_project"] : "";
    if($country == "United States of America"){
        $street_address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $sql .= ", street_address, city, state, zip, date_received, payment_type, related_project)
                VALUES ('$first_name', '$last_name', $amount, '$email', '$country', '$street_address', '$city', '$state', '$zip', CURDATE(), '$payment_type', '$related_project');";
    }
    else {
        $sql .= ", date_received, payment_type, related_project) VALUES ('$first_name', '$last_name', $amount, '$email', '$country', CURDATE(), '$payment_type', '$related_project');";
    }

    //echo $sql;
    mysqli_query($db, $sql);
    $db-close();
    header("Location: http://bethanynegashfoundation.org/admin/pages/index.php");
 ?>

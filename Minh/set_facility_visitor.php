<?php
    $visitor_count = $_POST["visits"];
    $date = $_POST["visitDate"];

    $dateArray = explode(" ", $date); // day month year
    //print("Day: " . $dateArray[0] . " <br>Month: " . $dateArray[1] . "<br>Year: " . $dateArray[2]);

    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo ("Failed to connect to database");
    }

    $sql = "INSERT INTO facility_visitor_t(total_visitor, day, month, year)
            VALUES ($visitor_count, " . $dateArray[0] . ", '" . $dateArray[1] . "', " . $dateArray[2] .");";
    mysqli_query($db, $sql);
    //echo "Query: $sql";
    $db->close();
    header("Location: http://bethanynegashfoundation.org/admin/pages/visitor.php");

?>

<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server

    if(!$db){
        die ("Failed to connect");
    }

    $sql = "SELECT * FROM manual_donation_t;";

    $result = mysqli_query($db, $sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result))
        $rows[] = $r;
    print json_encode($rows);
 ?>

<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server

    if(!$db){
        echo ("Failed to connect to database");
    }

    $sql = "SELECT * FROM facility_visitor_t";
    $result = mysqli_query($db, $sql);
    while($r = mysqli_fetch_assoc($result))
        $rows[] = $r;
    print json_encode($rows);
    $db->close();
?>

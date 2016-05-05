<?php
    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo ("Failed to connect to database");
    }
    $month = date('F'); // month in string
    $year = date('Y');
    $sql = "SELECT (SELECT SUM(amount) FROM manual_donation_t) AS total_donation,
            (SELECT SUM(amount) FROM manual_donation_t WHERE YEAR(date_received) = YEAR(CURDATE())) AS current_year_total,
            (SELECT SUM(total_visitor) FROM facility_visitor_t) AS total_visitor,
            (SELECT SUM(total_visitor) FROM facility_visitor_t WHERE year = $year AND month = '$month') AS current_month_visitor,
            (SELECT SUM(visitors) FROM website_statistics_t) AS total_web_visitor,
            (SELECT SUM(visitors) FROM website_statistics_t WHERE date LIKE '%$year%') AS current_year_web_visitor;";
    //echo $sql;

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_donation = $row["total_donation"] == NULL ? 0 : $row["total_donation"]; // This is the total donation
    $current_year_total = $row["current_year_total"] == NULL ? 0 : $row["current_year_total"]; // This is the total donation this year
    $total_visitor = $row["total_visitor"] == NULL ? 0 : $row["total_visitor"]; // This is the total visitors
    $current_month_visitor = $row["current_month_visitor"] == NULL ? 0 : $row["current_month_visitor"]; // This is the total donation this year
    $total_web_visitor = $row["total_web_visitor"] == NULL ? 0 : $row["total_web_visitor"]; // This is the total visitors
    $current_year_web_visitor = $row["current_year_web_visitor"] == NULL ? 0 : $row["current_year_web_visitor"]; // This is the total donation this year

    $data = array("total_donation" => $total_donation,
                    "current_year_total" => $current_year_total,
                    "total_visitor" => $total_visitor,
                    "current_month_visitor" => $current_month_visitor,
                    "total_web_visitor" => $total_web_visitor,
                    "current_year_web_visitor" => $current_year_web_visitor);
    //echo "$current_year_total $total_donation $current_month_visitor $total_visitor $total_web_visitor $current_year_web_visitor";
    print_r(json_encode($data));
    /*
    echo "total donation: $total_donation <br>total donation this year: $current_year_total
        <br>total visitors: $total_visitor <br>total visitor this month: $current_month_visitor";
        */
?>

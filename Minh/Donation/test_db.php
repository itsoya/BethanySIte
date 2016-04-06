<?php
$db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
//$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
if(!$db){
    die ("Failed to connect");
}

$payer_email = "minh_pham_1@yahoo.com";
$txn_id = "677326599";
$payment_amount = 3.53;
$payment_status = "completed";

// Insert new if there isn't a transaction id already exist, else update
$sql = "INSERT INTO paypal_t(transaction_id, payer_email, payment_amount, payment_status)
                      VALUES('$txn_id', '$payer_email', $payment_amount, '$payment_status')
        ON DUPLICATE KEY UPDATE
            payer_email = '$payer_email', payment_amount = $payment_amount, payment_status = '$payment_status';";
echo $sql . "<br>";
if(mysqli_query($db, $sql))
    echo "Insert completed";

else
    echo "insert failed";
 ?>

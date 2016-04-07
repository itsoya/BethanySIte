<?php
    require __DIR__  . '/vendor/autoload.php';
    //define("SITE_URL", "http://localhost/Donation"); // Local Server
    define("SITE_URL", "http://bethanynegashfoundation.org/Minh/Donation"); // Live Server

    /*
    // minhdi11@gmai.com - Personal Account
    $clientID = "ASHKBGAVI8DeEHCOwVmU1Ebdk0hSwlGnlrPkD0FMcytMo2t9XGdonL2T9hYBSFC0RCdFRjPrePT9JT32";
    $clientSecret = "EIXveqfoAK0Sp1YH0ZXrlZ31-3d6k00rk8AehI8XyzoAhBMa7bvWEgq0-6EsECmB3kmluoah4Bgy-MIy";
    */

    // minhdi12@gmai.com - Business Account
    $clientID = "AUdI2baWXq4YHmDdJYWUmqPEDqFMcTHLFgpq2G3hCbF1i9qcLI1C2Z_GfigLuQ2L0V-Rb5M8Pk2w_-8x";
    $clientSecret = "EOweOF1-fu5FpGn-hJbeC_0CWu6USQAavWesuqN9eXDlIvaujkAOLMBFLFRPfrWR-o5vLlPGGaW5IKRm";

    $paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential($clientID, $clientSecret));

 ?>

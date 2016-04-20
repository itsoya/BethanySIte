<?php
    $token = $_GET["token"];
    $email = "";
    $is_expired = "false";

    $db = new mysqli("localhost", "solomonnegash", "negash2016", "bethany_negash_foundation");   // use this for Live Server
    //$db = new mysqli("localhost", "root", "", "bethany_negash_foundation");      // Use this for Local Server
    if(!$db){
        echo 0;
    }

    else{
        if($token != ""){
            $sql = "SELECT email, is_used FROM forgot_password_t WHERE token = '$token'";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                // Check to see if the password reset is valid
                if($row["is_used"] == 1){
                    // Alert the user to request another password reset
                    $is_expired = "true";
                }
                else {
                    $email = $row["email"];
                }
            }
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type = "text/javascript">
        var is_expired = "<?php echo $is_expired; ?>";
        var email = "<?php echo $email; ?>";
        var token = "<?php echo $token ?>";

        $(function (){
            if(is_expired == "true"){
                $(".container").hide();
                alert("Please request a new password reset.");
            }
            $("#password_reset_tittle").text("Password Reset for: " + email);

            $("#b_password_reset").click(function(){
                var password = $("#t_password").val();
                var password_confirm = $("#t_password_confirm").val();
                if(password.length >= 5){
                    if(password == password_confirm)
                        Forget_Email(password);
                    else
                        alert("Your passwords do not match.");
                }
                else
                    alert("Your password is not long enough");

            });
        });

        function Forget_Email(password){
            $.ajax({
                method : "POST",
                url : "/Minh/Auth/password_reset.php",
                data : {"email" : email, "password" : password, "token": token},
                success : (function (returnData) {
                    /*
                    if(returnData == "success") {
                        alert("Password reset was successful.");
                        window.location.replace("http://bethanynegashfoundation.org/admin/pages/login.php");
                    }
                    else {
                        alert("Try again.");
                    }
                    */
                    alert(returnData);
                })
            });

        }
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title" id="password_reset_tittle">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="password" autofocus id="t_password"></input>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" autofocus id="t_password_confirm"></input>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="button" class="btn btn-lg btn-success btn-block" value="Reset Password" id="b_password_reset"></input>
                                <a href="../../index.php" class="btn btn-lg btn-success btn-block">Back to Site</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

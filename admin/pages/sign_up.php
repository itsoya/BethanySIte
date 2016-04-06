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
        $(function(){
            $("#b_sign_up").click(function(){
                var email = $("#t_login_email").val();
                var password = $("#t_login_password").val();
                var password_confirm = $("#t_login_password_confirm").val();
                var firstName = $("#t_first_name").val();
                var lastName = $("#t_last_name").val();

                if(email != "" && password != "" && password_confirm != "")
                {
                    if(password != password_confirm)
                        alert("Passwords do not match");
                    else if (password.length < 5) {
                        alert("Password isn't long enough, 5 or more characters.")
                    }
                    else
                        SignUp(email, password, firstName, lastName);
                }
                else {
                    alert("Try again.");
                }
            });
        });

        function SignUp(email, password, firstName, lastName){
            $.ajax({
                method : "POST",
                url : "../../Minh/Auth/signup.php",
                data : {"email" : email, "password" : password, "firstName" : firstName, "lastName" : lastName},
                success : (function (returnData) {
                    if(returnData == "success") {
                        alert("Sign up was successful.");
                        window.location.replace("http://bethanynegashfoundation.org/admin/pages/login.php");
                    }
                    else {
                        alert("Email already exists.");
                    }
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
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus id="t_login_email"></input>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" id="t_login_password"></input>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" id="t_login_password_confirm"></input>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="firstName" type="text" autofocus id="t_first_name"></input>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lastName" type="text" autofocus id="t_last_name"></input>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="button" class="btn btn-lg btn-success btn-block" value="Sign Up" id="b_sign_up"></input>
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

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

<html>
    <head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type = "text/javascript">
        var is_expired = "<?php echo $is_expired; ?>";
        var email = "<?php echo $email; ?>";
        var token = "<?php echo $token ?>";


        $(function (){
            if(is_expired == "true"){
                $("#password_form").hide();
                alert("Please request a new password reset.");
            }

            $("#b_submit").click(function(){
                if($("#password").val() == $("#confirm_password").val() && $("#password").val().length >= 5){
                    $.ajax({
                        method : "POST",
                        url : "password_reset.php",
                        data : {"token" : token, "email" : email, "password" : $("#password").val()},
                        success : (function (returnData) {
                            if(returnData == "1")
                                window.location.replace("http://bethanynegashfoundation.org/");
                            else {
                                alert("Update fail");
                            }
                        })
                    });
                }
                else if($("#password").val().length < 5){
                    alert("Your password is not long enough.");
                }
                else if($("#password").val() == $("#confirm_password").val()){
                    alert("Your passwords do not match.");
                }
            });
        });
    </script>
    </head>
    <body>
        <div style="margin:10%;" id="password_form">
            <table>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" id="password" id="password"></input></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" id="password_confirm" id="confirm_password"></input></td>
                </tr>
            </table>
            <input type="button" value="Update Password" id="b_submit"></input>
        </div>
    </body>
</html>

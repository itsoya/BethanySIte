<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $comment = $_GET["comments-area"];

    $subject = "Bethany Negash Foundation - Contact Us";

    // message
    $message = "<html>
                    <head>
                    <title></title>
                    </head>
                    <body>
                        <h1>A visitor from Bethany Negash Foundation has made a comment:</h1>
                        <table>
                            <tr> <td><h3>Name: </h3></td> <td>$name</td></tr>
                            <tr><td><h3>Email: </h3></td><td>$email</td></tr>
                            <tr><td><h3>Comment: </h3></td><td>$comment</td></tr>
                        </table>
                    </body>
                </html>";

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= "To: Bethany Negash Foundation <minhdi11@gmail.com>" . "\r\n";
    $headers .= "From:  Bethany Negash Foundation <minhdi11@gmail.com>" . "\r\n";

    // Mail it
    mail("minhdi11@gmail.com", $subject, $message, $headers);
    header("Location: http://bethanynegashfoundation.org/about.php");

?>

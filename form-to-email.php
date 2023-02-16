<?php
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Form submission";

    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

    $to = 'heyyy.wait.what@gmail.com';

    $headers = "From: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

?>
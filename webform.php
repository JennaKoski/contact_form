<?php


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = wordwrap($_POST['message'], 70, "\r\n");
    $to = "Makingfoogbrb@protonmail.com";
    $headers = 'From: '."$email" . "\r\n" .
    'Reply-To: '. "$to" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

?>

<div>Your message has been sent</div>
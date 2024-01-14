<?php
    $name = $_GET['name'];
    $email = $_GET['email'];;
    $message = $_GET['message'];;
    $from = 'From: my contact form'; 
    $to = 'tomtarpey@hotmail.com'; 
    $subject = 'Contact form message is here';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    mail($to, $subject, $body);
?>
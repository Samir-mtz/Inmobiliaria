<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $header = 'From: ' . $email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'armando.samir.mtzi@gmail.com';

    mail($para, $subject, utf8_decode($message), $header);
    echo $message;
    header("Location:index.html");
?>
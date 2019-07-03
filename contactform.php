<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $email = "RWS_Webdevelopment@outlook.com";
    $headers = "From: ".$mail;
    $txt = "You have recieved an E-Mail from" .$name."."\n\n".$message;


    mail($email, $message, $txt, $headers);
    header("Location: Index.php?mailsend");
}

?>
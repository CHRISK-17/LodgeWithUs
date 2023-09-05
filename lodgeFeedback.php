<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = "Feedback";
    $feedback = $_POST['feedback'];

    $mailTo = "LodgeWithUS@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$feedback;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: home.html?mailsend");
}
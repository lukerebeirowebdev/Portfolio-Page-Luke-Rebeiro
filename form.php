<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "";
    $headers = "From; ".$mailFrom;
    $txt = "You have received an email from. " $name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
}
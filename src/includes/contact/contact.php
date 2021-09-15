<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $myMail = "hr.movahed@yahoo.com";
    $header = "from : " . $email;
    $message2 = " you have a message from : " . $name . ".\n\n" . $message;
    mail($myMail, $subject, $message2, $header);

    header("location: index.php?mailsent");
}

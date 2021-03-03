<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "ceo@kollk.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("location: ../public/php/contact.php?success=mailsend");
}
?>
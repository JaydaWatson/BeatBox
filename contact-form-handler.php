<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $emailTo = "watsonjaydabooking@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    email($emailTo, $subject, $txt, $headers);
    header("Location: Contact.html?emailsend");
    }

?>
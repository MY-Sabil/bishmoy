<?php

if (isset($_POST['submit'])) {
  $name = $_POST['contact_name'];
  $mailFrom = $_POST['contact_email'];
  $message = $_POST['contact_message'];

  $mailTo = "sabilsabil121@gmail.com";
  //$mailTo = "my.sabil444@yahoo.com";
  $subject = "Mail from Bishoy site"
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html")
}

 ?>

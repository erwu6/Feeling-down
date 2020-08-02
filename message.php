<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name']
  $message = $_POST['message']

  $mailTo = "jinxia@yahoo.com";
  $headers = "From: My website";
  $txt = "you have received an email from ".$name. ".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: contact.php");
}

 ?>

<!DOCTYPE HTML>
<?php

$message = $_POST['Message'];
$email = $_POST['Email'];
$name = htmlspecialchars($_POST['Name']);
$subject = $name . " - ianfajardo.com";
$headers = 'From: "' . $name . '" <' . $email . '>';
$invalid_email = false;
$empty_message = false;
$message_sent = false;
$message_error = false;

if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email) && isset($email)){
  $invalid_email = true;
}
elseif(isset($message) && empty($message)){
  $empty_message = true;
}
elseif(!empty($email) && !empty($message) && isset($message) && isset($email)){
  $message = htmlspecialchars($message);
  if(mail ("hello@ianfajardo.com", $subject, $message, $headers)){
    $message_sent = true;
  }
  else{
    $message_error = true;
  }
}

?>
<html lang="en-US">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LiLDaRkMaRk</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="bower_components/respondJs/dest/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
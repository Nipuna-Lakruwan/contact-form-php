<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  
  if (!empty($email)&&!empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $receiver = "senarath.lakruwan@gmail.com";
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nWebsite: $website\nPhone: $phone\n\nMessage:\n$message";
      $sender = "From: $email";
      if (mail($receiver, $subject, $body, $sender)) {
        echo "Your message has been sent";
      }else {
        echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Please enter a valid email address";
    }
  }else {
    ech
  }
?>

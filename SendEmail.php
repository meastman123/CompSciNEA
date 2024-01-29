<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $description = $_POST["description"];

  $to = "inquiries-weyside@outlook.com";
  $subject = "New Booking Inquiry";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Phone: $phone\n";
  $message .= "Description: $description\n";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>

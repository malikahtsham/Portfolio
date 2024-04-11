<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'malikahtsham806@gmail.com';

  // Set the email subject
  $subject = 'New message from your website contact form';

  // Compose the email message
  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n\n";
  $email_message .= "Message:\n$message\n";

  // Set additional headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $email_message, $headers)) {
    // Email sent successfully
    echo "<h2>Thank you for contacting us, $name!</h2>";
    echo "<p>We will get back to you at $email as soon as possible.</p>";
    echo "<p>Your message: $message</p>";
  } else {
    // Error sending email
    echo "<h2>Sorry, there was a problem sending your message.</h2>";
  }
} else {
  // If someone tries to access this script directly without submitting the form
  // you can redirect them back to the

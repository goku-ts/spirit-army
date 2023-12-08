<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $prayerRequest = $_POST["prayerRequest"];

  // Specify the recipient email address
  $to = "your_email@example.com";

  // Build the email message
  $subject = "New Prayer Request";
  $message = "Name: $name\n\nPrayer Request:\n$prayerRequest";

  // Send the email
  mail($to, $subject, $message);

  // Redirect back to the form after submission
  header("Location: index.html");
  exit();
}
?>

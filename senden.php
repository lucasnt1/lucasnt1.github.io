<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$to = "deine@email.de"; // Empfängeradresse
$subject = "Neue Nachricht von $name";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";

if (mail($to, $subject, $body, $headers)) {
  echo "E-Mail erfolgreich gesendet!";
} else {
  echo "Fehler beim Senden der E-Mail.";
}
?>

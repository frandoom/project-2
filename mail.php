<?php
if (isset($_POST['name']))
$name = $_POST['name'];
if (isset($_POST['email']))
$email = $POST['email'];

$content = "From: $name";
$recipient = "From: $email \r\n";
mail($recipient, $subjet, $content, $mailheader) or die("Error!")
echo "Email sent!"
?>

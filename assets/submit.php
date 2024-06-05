<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $email = $message = "";
$name = $_POST['sender-name'] ;
$email = $_POST['sender-email'];
$message = $_POST['message'];

$to = "josephonsase37@gmail.com";
$subject = "New e-mail from $email";
$body = "Email : $message";

mail($to, $subject, $body);

exit();
}

?>
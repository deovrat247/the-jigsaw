<?php

//change settings here
$your_email = "info@jewelleryphotographymumbai.in";
$your_smtp = "mail.jewelleryphotographymumbai.in";
$your_smtp_user = "info@jewelleryphotographymumbai.in";
$your_smtp_pass = "rvjig@123";
$your_website = "http://jewelleryphotographymumbai.in/";



require("phpmailer/class.phpmailer.php");

//function to check properly formed email address
function isEmailValid($email) {
 // checks proper syntax
 if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email)) {
  return false;
 }

 return true;
}

//get contact form details
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];



//validate email address, if it is invalid, then returns error

if (!isEmailValid($email)) {
 die('Invalid email address');
}

//start phpmailer code

$ip = $_SERVER["REMOTE_ADDR"];
$user_agent = $_SERVER['HTTP_USER_AGENT'];



$response = "Name: $name\nEmail: $email\nContact: $phone\nEnquiry for:$message";

$mail = new PHPmailer();
$mail->SetLanguage("en", "phpmailer/language");
$mail->From = $your_email;
$mail->FromName = $your_website;
$mail->Host = $your_smtp;
$mail->Mailer = "smtp";
$mail->Password = $your_smtp_pass;
$mail->Username = $your_smtp_user;
$mail->Subject = "$your_website feedback";
$mail->SMTPAuth = "true";

$mail->Body = $response;
$mail->AddAddress($your_email, "$your_website admin");
$mail->AddReplyTo($email, $name);


if (!$mail->Send()) {
 echo "<p>There was an error in sending mail, please try again at a later time</p>";
 echo "<p>" . $mail->ErrorInfo . "</p>";
} else {

	echo "<script>alert('Thank You For Your Feed back $name, We Will Contact You Soon');
	window.location.href = 'index.php'</script>";
}

$mail->ClearAddresses();
$mail->ClearAttachments();
?>
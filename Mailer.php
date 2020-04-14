<?php
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\PHPMailer;

	require __DIR__.'\PHPMailer\src\Exception.php';
	require __DIR__.'\PHPMailer\src\PHPMailer.php';
	require __DIR__.'\PHPMailer\src\SMTP.php';
	require 'S:\SERVEURS\apps\phpmyadmin4.8.4\vendor\autoload.php';

	$account = "";

	if(isset($_POST["user_name"]) && isset($_POST["user_mail"]) && isset($_POST["user_message"]))
    {
       $user_name=$_POST["user_name"];
       $user_mail=$_POST["user_mail"];
       $user_message=$_POST["user_message"];
    }

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "";
	$mail->Password = "";
	$mail->setFrom($user_mail);
	$mail->addReplyTo($user_mail);
	$mail->addAddress($account);
	$mail->Subject = "Message du lecteur ".$user_name;
	$mail->msgHTML("<bd>Nom du lecteur: ".$user_name."<br>".
					"Email du lecteur: ".$user_mail."</bd><br><br>"
					.$user_message);

	if (!$mail->send()) 
	{
    	echo 	"Échec d'envoi";
    	echo 	"<script>
    				alert('Une erreur a survenue');
    			</script>";
	} 
	else 
	{
    	echo 	"Message envoyé!";
	}
?>
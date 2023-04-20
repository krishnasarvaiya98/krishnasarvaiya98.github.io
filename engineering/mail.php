<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    $subject = "Prodex Consulting Inquiry  ".$_REQUEST['name']." " ;										
    $message = "
    <html>
    <head>
    <title>CLIENT Inquiry</title>
    </head>
    <body>
    <p>Dear Prodex Consulting</p>				
    <p>Plese kindly check for the below details.</p>
    <p><strong>Name		: </strong> ".$_REQUEST['name']." </p>
    <p><strong>Email 	: </strong> ".$_REQUEST['email']." </p>
    <p><strong>Message 	: </strong> ".$_REQUEST['msg']." </p>
    <p></p>
    </body>
    </html>
    ";
    // echo $message;
									
								
    // require_once('class.smtp.php');
    // require_once('PHPMailerAutoload.php');
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp-relay.sendinblue.com";
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = "arshitgoti@gmail.com"; //booking@truckguru.co.in
    $mail->Password = "IORzaQ2bEH7NDZJc"; //rxcibflicznypiko
    $mail->SetFrom("data@yopmail.com"); //booking@truckguru.co.in
    $mail->Subject = $subject;
    $mail->Body = $message;
    // $mail->AddAddress($to1);
    $mail->AddAddress("data@yopmail.com");//info@truckguru.co.in
    $mail->AddAddress("data@yopmail.com"); //booking@truckguru.co.in

        if(!$mail->Send()) 
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } 
        else 
        {
            echo "<p>Thank you ! We have received your request. Our team will get in touch shortly.</p><p>&nbsp;</p>";
            header("location:contact.php");
        }
}
?>
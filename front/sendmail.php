<?php
session_start();
require "config.php";
//
// *** To Email ***

$to = $_SESSION['mail_env'];
//
// *** Subject Email ***
$subject = 'Notification de StarTroc';
//
// *** Content Email ***
$recup_mail=$_SESSION['recup_mail'] ;
$query = "SELECT * FROM users WHERE email LIKE '%$to%'";
$query_run = $conn->query($query);
$count = $query_run->fetchAll(PDO::FETCH_ASSOC);

$content = "<html><h2>Bonjour,</h2><p>Votre nouveau mot de passe est: ".$count[0]['code']."</p></html>";
//
//*** Head Email ***

$headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
$headers .= "From: startroc3@gmail.com\r\n";
//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
	header("location: login.php");
} 
else 
{
   	echo "ERROR";
}
<?php
session_start();
require "config.php";
//
// *** To Email ***

$to = 'souissi.hedi@esprit.tn';
//
// *** Subject Email ***
$subject = 'Notification de StarTroc';
//
// *** Content Email ***
$recup_mail=$_SESSION['recup_mail'] ;
$query = "SELECT * FROM users WHERE email='souissi.hedi@esprit.tn'";
$query_run = $conn->query($query);
$count = $query_run->fetchAll(PDO::FETCH_ASSOC);

$content = 'Votre nouveau mot de passe est: '.$count[0]['code'];
//
//*** Head Email ***
$headers = "From: startroc3@gmail.com\r\n";
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
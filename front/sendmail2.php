<?php
session_start();
require "config.php";


$prod1=$_GET['IdProd1'];
$prod2=$_GET['IdProd2'];
if ($prod1 < $prod2){
	$query = "SELECT * FROM produit WHERE IdProd=$prod1 or IdProd=$prod2 ORDER BY IdProd";
	$query_count = "SELECT COUNT(*) FROM produit WHERE IdProd=$prod1 or IdProd=$prod2 ORDER BY IdProd";
}else{
	$query = "SELECT * FROM produit WHERE IdProd=$prod1 or IdProd=$prod2 ORDER BY IdProd DESC";
	$query_count = "SELECT COUNT(*) FROM produit WHERE IdProd=$prod1 or IdProd=$prod2 ORDER BY IdProd DESC";
}

$query_run = $conn->query($query);
$res = $conn->query($query_count);
$row = $res->fetchColumn();
$arr=array();
foreach ($query_run as $produit){
	$arr[]=$produit;
}

$p1=$arr[0];

$p2= $arr[1];

$to = $_SESSION['mail_env'];



$myfile = fopen("chosen.png", "w");
fwrite($myfile, $p1['lienImg']);
fclose($myfile);

$myfile2 = fopen("property.png", "w");
fwrite($myfile2, $p2['lienImg']);
fclose($myfile2);

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 
// Include library files 
require '../PHPMailer/Exception.php'; 
require '../PHPMailer/PHPMailer.php'; 
require '../PHPMailer/SMTP.php';


$mail = new PHPMailer; 
  

$mail->setFrom('startroc3@gmail.com', 'StraTroc'); 
 
// Add a recipient 
$mail->addAddress($to); 
 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Notification de StarTroc'; 
 
// Mail body content 
$bodyContent = '<h1>You sent an Exchange Proposal</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
$bodyContent .= '<img src="cid:achat">'; 
$bodyContent .= '<img src="cid:proposition">'; 
$mail->Body    = $bodyContent; 

$mail->AddEmbeddedImage('chosen.png','achat');
$mail->AddEmbeddedImage('property.png','proposition');
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
	
	unlink('chosen.png');
	unlink('property.png'); 
} else {
	unlink('chosen.png');
	unlink('property.png');  
}
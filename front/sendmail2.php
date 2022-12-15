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
  

$mail->setFrom('startroc3@gmail.com', 'StrarTroc'); 
 
// Add a recipient 
$mail->addAddress($to); 
 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Notification de StarTroc'; 
 
// Mail body content 
$bodyContent = '<h1>You sent an Exchange Proposal</h1>
				<table style="width:100%;">
				<tr>
				<td><p>This the product you chose for the exchange	</p></td>
				<td><p>This is the product you are proposing for the exchange</p></td>
				</tr>
				<tr>
				<td><img style="width:300px" src="cid:achat"></td>
				<td><img style="width:300px" src="cid:proposition"></td>
				</tr>
				</table>'; 



$mail->Body    = $bodyContent; 

$mail->AddEmbeddedImage('chosen.png','achat','product_you_chose.png');
$mail->AddEmbeddedImage('property.png','proposition','your_product.png');
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
	
	unlink('chosen.png');
	unlink('property.png'); 
} else {
	unlink('chosen.png');
	unlink('property.png');  
}
<?php
include('config.php');
session_start();
        $adress=$_POST['objet'];
        $name=$_POST['caractéristiques'];
        $suj=$_POST['description'];
        $client=$_SESSION['id'];
$nb = fopen($_FILES['inputlink']['tmp_name'],'rb');

        $sujet=$_POST['sujet'];
       
      $query= "SELECT * from catégories
      where catégorie LIKE '%$sujet%' ";
      $qq=$conn->query($query); 
      $row = $qq->fetch(PDO::FETCH_BOTH); 
    
    $id=$row['id_categorie'];
    $query= "INSERT INTO don (objet,caractéristiques,description,photos,id_catégories,id_client)
    VALUES (:objet,:carac,:Description,:pic,:idcat,:client)
    ";

$step=$conn->prepare($query);
$step->bindParam(':objet',$adress,PDO::PARAM_STR, 30);
$step->bindParam(':carac',$name,PDO::PARAM_STR, 100);
$step->bindParam(':Description',$suj,PDO::PARAM_STR, 200);
$step->bindParam(':pic',$nb,PDO::PARAM_LOB);
$step->bindParam(':idcat',$id,PDO::PARAM_INT, 11);
$step->bindParam(':client',$client,PDO::PARAM_INT, 11);

$step->execute();

$to = $_SESSION['mail_env'];
$subject = 'Dons reçue avec succès';
$content = "<html><h2>Bonjour,</h2><p>Votre Don a bien été envoyé .Merci pour votre aide!</p></html>";

$headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= "From: startroc3@gmail.com\r\n";
if (mail($to, $subject, $content, $headers))
{
  header('Location:index.php');
} 
else 
{
   	echo "ERROR";
}



    
  /*} else {
 
    echo'<script>alert("compte already exist")</script>';
  }*/
 
  //header('Location:../../../vue/login.php');
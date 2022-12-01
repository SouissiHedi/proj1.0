<?php
session_start();
require 'config.php';
$mail = $_POST['mail'];
$prix =$_POST['prix'];
$aqui = $_POST['aqui'];


$to = $aqui ;
//
// *** Subject Email ***
$subject = 'Payment';
//
// *** Content Email ***
$content = "tu as recu un message de $mail.\n".
                            "l'argent ajouté au solde de votre compte est:\n $prix.\n";
//
//*** Head Email ***
$headers = "From: $mail\r\n";
//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
} 
else 
{
   	echo "ERROR";
}
/*mail = $_POST['mail'];
$prix =$_POST['prix'];
$aqui = $_POST['aqui'];


$visitor_email = $mail;
 
  $reciever=$aqui;



$email_from = $visitor_email;

$email_subject = "Payment";

$email_body = "tu as recu un message de $visitor_email.\n".
                            "l'argent ajouté au solde de votre compte est:\n $prix.\n";
$to = $reciever;

$headers = "From: $email_from \r\n";
                          
$headers .= "Reply-To: $visitor_email \r\n";
                          
mail($to,$email_subject,$email_body,$headers); */   

if(isset($_POST['delete-argent']))
{
    $argent_id =$_POST['delete-argent'];

    try{

    $query = "DELETE FROM argent WHERE ID=:arg_id";
    $statement = $conn->prepare($query);
    $data = [
        ':arg_id' => $argent_id
    ];
    $query_execute = $statement->execute($data);

    if($query_execute)
    {
        $_SESSION['message']=" coordonnées est supprimé ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="cordonnées n'est pas supprimé";
        header("Location: table.php");
        exit(0);
    }
}
    catch(PDOException $e){
    echo $e->getMessage();
}
    
}




if(isset($_POST['update1']))
{
    $argent_id = $_POST['argent_id'];
    
    $mail = $_POST['mail'];
    $prix =$_POST['prix'];
    $aqui = $_POST['aqui'];
 
    try{
    $query="UPDATE argent SET   mail=:mail , prix=:prix, aqui=:aqui
             WHERE ID=:arg_id  ";
    $statement = $conn->prepare($query);
        $data = [
            
            ':mail'=>$mail,
            ':prix'=>$prix,
            ':aqui'=>$aqui,
            ':arg_id'=>$argent_id
        ];
        $query_execute = $statement->execute($data);



    if($$query_execute)
    {
        $_SESSION['message']="coordonnées mise a jour ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="coordonnées n'est pas mise a jour";
        header("Location: table.php");
        exit(0);
    }
}
    catch (PDOException $e) {
    echo $e->getMessage();
}

}

if(isset($_POST['ajouter1'])){
   
    $idR=$_POST['idR'];
    $mail = $_POST['mail'];
    $prix =$_POST['prix'];
    $aqui = $_POST['aqui'];
    

    $query = "INSERT INTO argent (idR,mail,prix,aqui) VALUES (:idR,:mail , :prix , :aqui)";
     $query_run = $conn->prepare($query);

     $data = [
        ':idR'=>$idR,
        ':mail'=> $mail,
        
        ':prix'=>$prix,
        ':aqui'=>$aqui,
        
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message']="coordonnées  enregistré";
        header("Location: payment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="coordonnées non enregistré";
        header("Location: payment.php");
        exit(0);
    }




}
 
  





?>
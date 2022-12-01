<?php
session_start();
require 'config.php';



/*$query='SELECT * FROM rendezR
  INNER JOIN echange ON rendezR.idEX = echange.idEX';*/


if(isset($_POST['delete-rendezR']))
{
    $renderR_id = $_POST['delete-rendezR'];
    try{

    $query = "DELETE FROM rendezR WHERE idR=:rend_id";
    $statement = $conn->prepare($query);
    $data = [
        ':rend_id' => $renderR_id
    ];
    $query_execute = $statement->execute($data);


    if($query_execute)
    {
        $_SESSION['message']="Deleted Successfully ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Not Deleted";
        header("Location: table.php");
        exit(0);
    }
}
catch(PDOException $e){
    echo $e->getMessage();
}

    
}




if(isset($_POST['update']))
{
    $rendezR_id = $_POST['rendezR_id'];
   // $idEX=$_POST['idEX'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $pays =$_POST['pays'];
    $localisation =$_POST['localisation'];

    $query="UPDATE rendezR SET  date=:date , heure=:heure , pays=:pays , localisation=:localisation
             WHERE idR=:rend_id LIMIT 1 ";
     $statement = $conn->prepare($query);

     $statement->bindParam(':rend_id',$rendezR_id,PDO::PARAM_INT,11);
     $statement->bindParam(':date',$date,PDO::PARAM_STR);
     $statement->bindParam(':heure',$heure,PDO::PARAM_STR,60);
     $statement->bindParam(':pays',$pays,PDO::PARAM_STR,100);
     $statement->bindParam(':localisation',$localisation,PDO::PARAM_STR,200);
     $query_execute = $statement->execute();

    if($query_execute)
    {
        $_SESSION['message']=" mise a jour ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="troc n'est pas mise a jour";
        header("Location: table.php");
        exit(0);
    }
}

if(isset($_POST['ajouter'])){
    $date = $_POST['date'];
    $heure =$_POST['heure'];
    $pays =$_POST['pays'];
    $localisation=$_POST['localisation'];
   
    


          /* $query1=" SELECT *
            FROM rendezR
            INNER JOIN echange
            WHERE rendezR.idR = echange.idEX";*/
            /*$query1='SELECT * FROM rendezR
  INNER JOIN echange ON rendezR.idEX = echange.idEX';*/
    

    $query = "INSERT INTO rendezR (date,heure,pays,localisation) VALUES (:date,:heure,:pays,:localisation)";
    //$query1_run=$conn->prepare($query1);
    $query_run = $conn->prepare($query);
     
    $data = [
        ':date' => $date,
        ':heure' => $heure,
        ':pays' => $pays,
        ':localisation' => $localisation,
        
       
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message']="rendez-vous enregistré";
        header("Location: rendezVous.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="rendez-vous non enregistré";
        header("Location: rendezVous.php");
        exit(0);
    }
    
}





?>
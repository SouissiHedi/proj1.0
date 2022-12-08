<?php
include('config.php');
        $adress=$_POST['objet'];
        $name=$_POST['caractéristiques'];
        $suj=$_POST['description'];
        
$nb = fopen($_FILES['inputlink']['tmp_name'],'rb');

        $sujet=$_POST['sujet'];
       
        $query= "INSERT INTO catégories (catégorie)
        VALUES ('$sujet')";
      $conn->query($query); 
      $query= "SELECT * from catégories,don
      where don.id_catégories!=catégories.id_categorie ";
      $qq=$conn->query($query); 
      $row = $qq->fetch(PDO::FETCH_BOTH); 
    
    $id=$row['id_categorie'];
    $query= "INSERT INTO don (objet,caractéristiques,description,photos,id_catégories)
    VALUES (:objet,:carac,:Description,:pic,:idcat)
    ";

$step=$conn->prepare($query);
$step->bindParam(':objet',$adress,PDO::PARAM_STR, 30);
$step->bindParam(':carac',$name,PDO::PARAM_STR, 100);
$step->bindParam(':Description',$suj,PDO::PARAM_STR, 200);
$step->bindParam(':pic',$nb,PDO::PARAM_LOB);
$step->bindParam(':idcat',$id,PDO::PARAM_INT, 11);

$step->execute();
    
  /*} else {
 
    echo'<script>alert("compte already exist")</script>';
  }*/
 
  //header('Location:../../../vue/login.html');
<?php
include('config.php');
        $id=$_POST['id2'];
$adress=$_POST['objet'];
        $name=$_POST['caractéristiques'];
        $suj=$_POST['description'];
        $messagee=$_POST['sujet'];
       
      
        $query= "UPDATE don SET objet='adress', caractéristiques='$name' , description='$suj' where id_catégories='$id'";
  
   
  $conn->query($query);
  $query= "UPDATE catégories SET catégorie='$messagee' where id_categorie='$id'";

  $conn->query($query);
    
  /*} else {
 
    echo'<script>alert("compte already exist")</script>';
  }*/
 
  header('Location:table.php');
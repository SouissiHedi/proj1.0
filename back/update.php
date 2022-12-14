<?php
include('config.php');
        $id=$_POST['id'];
        $adress=$_POST['objet'];
        $name=$_POST['caractéristiques'];
        $suj=$_POST['description'];
        $messagee=$_POST['sujet'];

        $query0= "SELECT * FROM catégories where catégorie LIKE '%$messagee%'";
        $tag = $conn->query($query0);
        $typeint = $tag->fetch();
        $ty=$typeint['id_categorie'];
      
        $query= "UPDATE don SET objet='$adress', caractéristiques='$name' , description='$suj', id_catégories=$ty where IDD='$id'";
  
   
  $conn->query($query);
    
  /*} else {
 
    echo'<script>alert("compte already exist")</script>';
  }*/
 
  header('Location:table.php');
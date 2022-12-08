<?php
include('config.php');

        $id=$_GET['objet'];
      /*  $lastName=$_POST['prenom'];
        $fisrtName=$_POST['nom'];
        $userr=$_POST['user'];
        $adress=$_POST['email'];
        $mot=$_POST['password1'];*/
        if(isset($_GET['objet'])){
          $delete1="DELETE FROM don WHERE id_catégories ='$id' " ;
          $delete2="UPDATE don set id_catégories=null WHERE id_catégories ='$id' " ;
          $delete3="DELETE FROM catégories WHERE id_categorie ='$id' ";
          
          $conn->query($delete1);
          $conn->query($delete2);
          $conn->query($delete3);
        } else echo('aaslema');
        
 
 
  header('Location:table.php');
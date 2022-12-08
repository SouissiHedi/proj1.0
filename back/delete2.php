<?php
include('config.php');
        $id=$_GET['objet'];
      /*  $lastName=$_POST['prenom'];
        $fisrtName=$_POST['nom'];
        $userr=$_POST['user'];
        $adress=$_POST['email'];
        $mot=$_POST['password1'];*/
        if(isset($_GET['objet'])){
          $delete1="DELETE FROM don WHERE id ='$id' " ;
          $delete2="UPDATE FROM don WHERE id ='$id' ";
          $delete3="DELETE FROM user WHERE id ='$id' " ;
          $conn->query($delete1);
          $conn->query($delete2);
          $conn->query($delete3);
        }
        
 
 
  //header('Location:table.php');
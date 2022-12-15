<?php
include('config.php');

        $id=$_GET['objet'];
      /*  $lastName=$_POST['prenom'];
        $fisrtName=$_POST['nom'];
        $userr=$_POST['user'];
        $adress=$_POST['email'];
        $mot=$_POST['password1'];*/
        if(isset($_GET['objet'])){
          $delete1="DELETE FROM don WHERE IDD ='$id' " ;
          
          $conn->query($delete1);
        } else echo('aaslema');
        
 
 
  header('Location:table.php');
<?php
require 'config.php';


if(isset($_POST['delete-produit']))
{
    $produit_id = $_POST['delete-produit'];

    $query = "DELETE FROM produit WHERE IdProd='$produit_id'";
    $query_run = $conn->query($query);

    header("Location: table.php");
    
}


if(isset($_POST['add-cat']))
{
    $cat = $_POST['newCat'];

    $query = "INSERT INTO category(NomCat) VALUES (:cat)";
    $step=$conn->prepare($query);
    $step->bindParam(':cat',$cat,PDO::PARAM_STR, 40);
    
    $step->execute();

    header("Location: table.php");
}


if(isset($_POST['']))
{
    $produit_id = $_POST['delete-produit'];

    $query = "DELETE FROM produit WHERE IdProd='$produit_id'";
    $query_run = $conn->query($query);

    header("Location: table.php");
    
}


if(isset($_POST['delete-echange']))
{
    $echange_id = $_POST['delete-echange'];

    $query = "DELETE FROM echange WHERE IdEX='$echange_id'";
    $query_run = $conn->query($query);

    header("Location: table.php");
}



if(isset($_POST['update']))
{
    $produit_id =$_GET['IdProd'];
    $NomProduit =$_POST['NomProduit'];
    $Description =$_POST['Description'];
    $event = $_POST['Type'];
    $cat_qu = "SELECT * FROM category WHERE NomCat LIKE '%$event%'";
    $cat=$conn->query($cat_qu);
    foreach ($cat as $gory){
        $idtype = $gory['IdCat'];
    }
    
    $update_query="UPDATE produit SET  NomProduit=:NomProduit , Description=:Description, Type=:Type WHERE IdProd=:produit_id  ";
    $step=$conn->prepare($update_query);
    $step->bindParam(':produit_id',$produit_id,PDO::PARAM_INT , 20);
    $step->bindParam(':NomProduit',$NomProduit,PDO::PARAM_STR, 20);
    $step->bindParam(':Description',$Description,PDO::PARAM_LOB);
    $step->bindParam(':Type',$idtype,PDO::PARAM_STR, 40);

        
    $step->execute();  
    header("Location: table.php"); 
}

if(isset($_POST['eval']))
{
    $produit_id =$_GET['IdProd'];
    $Description =$_POST['Description'];
    $event = $_POST['Type'];
    $cat_qu = "SELECT * FROM category WHERE NomCat LIKE '%$event%'";
    $cat=$conn->query($cat_qu);
    foreach ($cat as $gory){
        $idtype = $gory['IdCat'];
    }
    $valeurP = (int) $_POST['valeurP'];
    
    $update_query="UPDATE produit SET  Description=:Description, Type=:Type, valeurP=:valeurP   WHERE IdProd=:produit_id  ";
    $step=$conn->prepare($update_query);
    $step->bindParam(':produit_id',$produit_id,PDO::PARAM_INT , 20);
    $step->bindParam(':Description',$Description,PDO::PARAM_LOB);
    $step->bindParam(':Type',$idtype,PDO::PARAM_STR, 40);
    $step->bindParam(':valeurP',$valeurP,PDO::PARAM_INT , 20);

        
    $step->execute();  
    header("Location: table.php"); 
}




?>
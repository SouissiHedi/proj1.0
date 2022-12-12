<?php
require 'config.php';
session_start();
if(!isset($_SESSION['mail_env'])){
    header("location: login.php");
}{
if(isset($_POST['inputNameP']))
{
    $id = $_POST['inputNameP'];
}

$nb = fopen($_FILES['inputlink']['tmp_name'],'rb');

if(isset($_POST['inputState']))
{
    $event = $_POST['inputState'];
    $cat_qu = "SELECT * FROM category WHERE NomCat LIKE '%$event%'";
    $cat=$conn->query($cat_qu);
    foreach ($cat as $gory){
        $idtype = $gory['IdCat'];
    }
}
if(isset($_POST['inputdesc'])){
    $sugg = $_POST['inputdesc'];
}



$sqlquery0 = "INSERT INTO produit(NomProduit,lienImg,Description,Type,id_user) VALUES (:NomProduit,:lienImg,:Description,:Type,:idusr)";

$step=$conn->prepare($sqlquery0);
$step->bindParam(':NomProduit',$id,PDO::PARAM_STR, 20);
$step->bindParam(':lienImg',$nb,PDO::PARAM_LOB);
$step->bindParam(':Description',$sugg,PDO::PARAM_LOB);
$step->bindParam(':Type',$idtype,PDO::PARAM_STR, 40);
$step->bindParam(':idusr',$_SESSION['id'],PDO::PARAM_INT, 11);

$step->execute();

header("Location: addform.php");
}
?>
<?php
    require 'config.php';

    $jointure = "SELECT produit.NomProduit, category.NomCat, category.IdCat FROM produit INNER JOIN category ON produit.Type = category.IdCat";
    $requ=$conn->prepare($jointure);
    $requ->execute();
    $result=$requ->fetchAll();
    echo '<pre>';
    print_r($result);
    echo '<pre>';
?>
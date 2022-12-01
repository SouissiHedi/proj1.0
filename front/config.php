<?php
/*$conn= mysqli_connect("localhost","root","","echange1");
if(!$conn){
    die('Connection Failed'.mysqli_connect_error());
}*/
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projetdb";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
    echo "";
    
} catch(PDOException $e) {

    echo "Connection Failed" .$e->getMessage();
}

?>
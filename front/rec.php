<?php

class rec {
       public  string $ID;
        public string $Name;
        public string $phone;
        public string $degre;
        public  int $dob;   
        public string $id_client;   
        public string $code_produit;   
        public string $code_dachat; 
        public string $reclamation;

}

class rep{

    public  string $ID;
    public string $ID_r;
    public string $rep;




}


function updclient(string $firstName,string $LastName,string $ddress)
{


    $sql="UPDATE client SET last='$firstName',first='$LastName',address=$ddress  where id=:100";
    $db=config::getConnexion();
   /* $req=$db->prepare($sql);
    $req->bindValue(":id",$id);*/
    /*$query= mysql_query($sql);
    $row= mysql_fetch_array($query);*/
    $req=$db->prepare($sql);
    $req->bindValue(":id",100);





    try
{
$req->execute();
}catch(Exception $e)
{
    die('ERROR'. $e->getMessage());
}


 

}





?>

<?php
require 'rec.php';
require 'config2.php';
class reclamation
{
    function ajouter_reclamation (string $prenom,string $id_client,string $num, string $date,string $code_produit,string $code_dachat,string $degre,string $reclamation,string $st){

  
        try
        {
        $db=config::getConnexion();
        $query=$db->prepare(
        'INSERT INTO rec (prenom,id_client,num,date,code_produit,code_dachat,degre,reclamation,star)
         VALUES (:prenom,:id_client,:num,:date,:code_produit,:code_dachat,:degre ,:reclamation,:star)'
        
        
        );
        
        $query->execute([
        'prenom' =>$prenom,
        'id_client' =>$id_client,
        'num' =>$num,
        'date'=>$date,
        
        'code_produit' => $code_produit,
        'code_dachat' =>$code_dachat,
        'degre' =>$degre,
        'reclamation' =>$reclamation,
        'star' =>$st,

       
        
        ]);
        
        }
        catch(PDOException $e)
        {
            $e->getMESSAGE();
        }
    
       
    
    }
    public function listeClient2(string $id)
  {  
    //$db=config::getConnexion();
    //$sql="SELECT * FROM rec WHERE id_client=$id";

    
    $sql="SELECT * FROM `rec` WHERE id_client='$id'";
    

    $db=config::getConnexion();
             try{
              $liste =$db->query($sql);
              return $liste;
             }
             catch(PDOException $e)  {
  
              die('error'.$e->getMessage());
          
          }
          
     
    }



    public function listeClient()

    {  $sql="SELECT * FROM rec";

      $db=config::getConnexion();
             try{
              $liste =$db->query($sql);
              return $liste;
             }
             catch(PDOException $e)  {
  
              die('error'.$e->getMessage());
          
          }
          
     
    }

    function deleteclient($id)
{

$sql="DELETE FROM rec WHERE id = :id";
$db=config::getConnexion();
$req=$db->prepare($sql);
$req->bindValue(":id",$id);

try
{
$req->execute();
}catch(Exception $e)
{
    die('ERROR'. $e->getMessage());
}
 }



 function deletrep($id)
{

$sql="DELETE FROM rep WHERE id_rec = :id_rec";
$db=config::getConnexion();
$req=$db->prepare($sql);
$req->bindValue(":id_rec",$id);

try
{
$req->execute();
}catch(Exception $e)
{
    die('ERROR'. $e->getMessage());
}
 }




//$clientC=new reclamation;
//$clientC->ajouter_reclamation('mourad ','df','258','',80,1520,'cx','bonjour je mallelle mehdi');






function chrclient(string $id)
{
   $c2= new  rec();
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE id= ?');
    $clientt->execute(array($id));

    while($ligne = $clientt->fetch())
    {
        //echo $ligne['last']." ".$ligne['first'];
         $c2->Name=$ligne['prenom'];
         $c2->phone=$ligne['num'];

         $c2->ID=$ligne['id'];

         $c2->code_produit=$ligne['code_produit'];
         $c2->code_dachat=$ligne['code_dachat'];
         $c2->degre=$ligne['degre'];
         $c2->reclamation=$ligne['reclamation'];

         //$c2->dob=$ligne['dob'];
         


        
    }



return $c2;
}








///////////  /  /  /  / / / / / / / / / / / / / / / / / / / / / //  / / / / / / / / / / 
function chrrep(string $id)
{
   $c2= new rep();
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rep WHERE id_rec= ?');
    $clientt->execute(array($id));

    while($ligne = $clientt->fetch())
    {

        
         $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];

       
  
         


        
    }



return $c2;
}










function updclient(string $id,string $Name,string $phone,string $degre,string $code_dachat,string $code_produit,string $reclamation)
{


 $sql="UPDATE `rec` SET prenom='$Name',num='$phone',code_produit='$code_produit',code_dachat='$code_dachat',degre='$degre',reclamation='$reclamation'   where id= ?";
    $db=config::getConnexion();
   /* $req=$db->prepare($sql);
    $req->bindValue(":id",$id);*/
    /*$query= mysql_query($sql);
    $row= mysql_fetch_array($query);*/
$req=$db->prepare($sql);
$req->bindValue(":id",$id);


     try
{
$req->execute(array($id));
}catch(Exception $e)
{
    die('ERRiiiOR'. $e->getMessage());
}


 

}


function updclient2(string $id, string $reclamation)
{


 $sql="UPDATE `rec` SET re='$reclamation'  where id= ?";
    $db=config::getConnexion();
   /* $req=$db->prepare($sql);
    $req->bindValue(":id",$id);*/
    /*$query= mysql_query($sql);
    $row= mysql_fetch_array($query);*/
$req=$db->prepare($sql);
$req->bindValue(":id",$id);


     try
{
$req->execute(array($id));
}catch(Exception $e)
{
    die('ERRiiiOR'. $e->getMessage());
}


 

}





function updrep(string $id, string $reclamation)
{


 $sql="UPDATE `rep` SET rep='$reclamation'  where id_rec= ?";
    $db=config::getConnexion();
   /* $req=$db->prepare($sql);
    $req->bindValue(":id",$id);*/
    /*$query= mysql_query($sql);
    $row= mysql_fetch_array($query);*/
$req=$db->prepare($sql);
$req->bindValue(":id_rec",$id);


     try
{
$req->execute(array($id));
}catch(Exception $e)
{
    die('ERRiiiOR'. $e->getMessage());
}



 

}







function updreppp2(string $id, string $reclamation)
{


 $sql="UPDATE `rec` SET re='$reclamation'  where id= ?";
    $db=config::getConnexion();
   /* $req=$db->prepare($sql);
    $req->bindValue(":id",$id);*/
    /*$query= mysql_query($sql);
    $row= mysql_fetch_array($query);*/
$req=$db->prepare($sql);
$req->bindValue(":id",$id);


     try
{
$req->execute(array($id));
}catch(Exception $e)
{
    die('ERRiiiOR'. $e->getMessage());
}


}




































function ajouter_reclamation2(string $prenom,string $id_client)
{

  
    try
    {
    $db=config::getConnexion();
    $query=$db->prepare(
    'INSERT INTO rep (id_rec,rep)
     VALUES (:id_rec,:rep)'
     );
    
    $query->execute([
    'id_rec' =>$prenom,
    'rep' =>$id_client,
    
   
    
    ]);
    
    }
    catch(PDOException $e)
    {
        $e->getMESSAGE();
    }

   

}









function star5()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(5));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==5)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}




function star4()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(4));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==4)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}


function star3()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(3));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==3)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}

function star2()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(2));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==2)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}

function star1()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(1));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==1)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}
function star0()
{
   $c2=0;
    try
    {
    $db=config::getConnexion();
    } 
    catch(Exception $e)
    {
        echo 'erreur:' . $e->getMESSAGE();
    }
    $clientt =$db->prepare('SELECT * FROM rec WHERE star= ?');
    $clientt->execute(array(0));

    while($ligne = $clientt->fetch())
    {

        
       /*  $c2->ID=$ligne['id_r'];
         $c2->ID_r=$ligne['id_rec'];

         $c2->rep=$ligne['rep'];*/

       if($ligne['star']==0)
       {
        $c2=$c2+1;
       }
  
         


        
    }



return $c2;
}








}


$c2=new reclamation();
//$c2->deleteclient(51);





?>
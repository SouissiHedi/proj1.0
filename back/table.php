<?php
session_start();
require 'config.php';

include '../front/client.php';
$clientC=new reclamation();

$list=$clientC->listeClient();
$c5=$clientC->star5();
$c4=$clientC->star4();
$c3=$clientC->star3();
$c2=$clientC->star2();
$c1=$clientC->star1();
$c0=$clientC->star0();

if(isset($_POST['up']))
{


   $clientC->updrep($_GET['delteteid'],$_POST['reclamation']);
  
   $clientC->updreppp2($_GET['delteteid'],$_POST['reclamation']);
   header('Location: table.php');
}


if(isset($_POST['uprep']))
{

   $clientC->ajouter_reclamation2($_GET['delteteid'],$_POST['reclamation']);
   $clientC->updclient2($_GET['delteteid'],$_POST['reclamation']);
   
   header('Location: table.php');
}

?>

<script>
    function confirmV(arr){
        if(arr=='0'){
            if(!confirm('Are you sure To desactivate ?')){
                event.preventDefault();
                alert(" ");
            }
        }else{
            if(!confirm('Are you sure To Activate ?')){
                event.preventDefault();
                alert(" ");
            }
        }
    }
</script>


<script>
    function aff_add_form(){
        if (document.getElementById("add-form-cat").hidden == true ){
            document.getElementById("add-form-cat").hidden = false;
        }else{
            document.getElementById("add-form-cat").hidden = true;
        }
    }
    
    function aff_tab(){
        if (document.getElementById("joint_product").hidden == true ){
            document.getElementById("joint_product").hidden = false;
        }else{
            document.getElementById("joint_product").hidden = true;
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
       


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.php" class="dropdown-item">Buttons</a>
                            <a href="typography.php" class="dropdown-item">Typography</a>
                            <a href="element.php" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a>
                            <a href="404.php" class="dropdown-item">404 Error</a>
                            <a href="blank.php" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <?php
            include('message.php');
            ?>
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                       
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">table des utilisateurs</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">adress</th>
                                        <th scope="col">code</th>
                                        <th scope="col">Active</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM users";
                                        $query_run = $conn->query($query);
                                        
                                        $query_count = "SELECT COUNT(*) FROM users";
                                        $res = $conn->query($query_count);
                                        $count = $res->fetchColumn();


                                        if($count>0)
                                        {
                                            foreach ($query_run as $users) 
                                            {
                                               ?>
                                               <tr>
                                                <td><?= $users['id'];?></td>
                                                <td><?= $users['name'];?></td>
                                                <td><?= $users['email'];?></td>
                                                <td><?= $users['phone'];?></td>
                                                <td><?= $users['adress'];?></td>
                                                <td><?= $users['code'];?></td>
                                                <td><?= $users['activity'];?></td>
                                                <td>
                                                   
                                                    <a href="../front/id-edit.php?id=<?= $users['id']; ?>" class="btn btn-success btn-sm">Update</a>
                                                    
                                                    <form action="../front/role.php" method="POST" class="d-inline">
                                                    <button type="submit" name="admin-user" value="<?= $users['id'] ?>" class="btn btn-warning btn-sm">Role</button>

                                                    </form>
                                                    <form action="../front/codeD.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete-user" value="<?= $users['id'] ?>" class="btn btn-danger btn-sm">Delete</button>

                                                    </form>
                                                    <?php
                                                    if ($users['activity'] == '0') { ?>
                                                        <form action="../front/codeD.php" method="POST" onsubmit="confirmV(<?=$users['activity'];?>)" class="d-inline" style="margin-left:4.5%">
                                                            <input hidden type="text" name="activity" id="activity" value="<?= $users['activity']; ?>" >
                                                            <button type="submit" name="desactivate" value="<?= $users['id'] ?>" class="btn btn-success btn-sm" >Active</button>
                                                        </form>
                                                    <?php }else{ ?>
                                                        <form action="../front/codeD.php" method="POST" onsubmit="confirmV(<?=$users['activity'];?>)" class="d-inline">
                                                            <input hidden type="text" name="activity" value="<?= $users['activity']; ?>" >
                                                            <button type="submit" name="desactivate" value="<?= $users['id'] ?>" class="btn btn-danger btn-sm">Desactive</button>
                                                        </form>
                                                    <?php } ?>
                                                </td>
                                                </tr>
                                                <?php
                                            } 
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div style="display: flex;">
                                <div style="flex: 50%;"><h6 class="mb-4">table des produits</h6></div>
                                <div style="flex: 50%;margin-left: 69%;"><a href="../front/addform.php"  class="btn btn-success btn-sm">Add</a><a href="pie.php" style="height:63%;"  class="btn btn-light rounded-pill m-2">!</a></div>   
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">idProd</th>
                                        <th scope="col">Nom du Produit</th>
                                        <th scope="col">Image affectée</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Price</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM produit";
                                        $query_count = "SELECT COUNT(*) FROM produit";
                                        $query_run = $conn->prepare($query);
                                        $query_run->execute();
                                        $res = $conn->query($query_count);
                                        $count = $res->fetchColumn();
                                        $data = $query_run->fetchAll(PDO::FETCH_ASSOC);
                                        if($count>0)
                                        {
                                            foreach ($data as $produit) 
                                            {
                                               ?>
                                               <tr>
                                                <td><?= $produit['IdProd'];?></td>
                                                <td><?= $produit['NomProduit'];?></td>
                                                <td><img style="margin-left:40px;max-height:30px" src='data:image/png;base64,<?=base64_encode($produit['lienImg'])?>'/></td>
                                                <td><?= $produit['Description'];?></td>
                                                <td><?= $produit['Type'];?></td>
                                                <td><?= $produit['valeurP'];?></td>
                                                <td>
                                                   
                                                    <a href="aaa.php?IdProd=<?= $produit["IdProd"]; ?>" name ="update" class="btn btn-success btn-sm">Update</a>
                                                    
                                                    <form action="codeH.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete-produit" value="<?= $produit['IdProd'] ?>" class="btn btn-danger btn-sm">Delete</button>

                                                    </form>
                                                    <a href="ev.php?IdProd=<?= $produit["IdProd"]; ?>" name ="update" class="btn btn-warning btn-sm">Evaluate</a>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                                    ?>
                                                    <tr>
                                                        <td><?=$count;?></td>
                                                    </tr>
                                                    <?php
                                            
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                            
                            <button onclick="aff_tab()"  class="btn btn-info btn-sm">Union entre le tableau des produits et celui des catégories</button>   
                        </div>
                    </div>

                    
                    <div class="col-12" id="joint_product" hidden>
                        <div class="bg-secondary rounded h-100 p-4">
                            <div style="display: flex;">
                                <div style="flex: 50%;"><h6 class="mb-4">table des produits</h6></div>
                                <div style="flex: 50%;margin-left: 69%;"><a href="../front/addform.php"  class="btn btn-success btn-sm">Add</a><a href="pie.php" style="height:63%;"  class="btn btn-light rounded-pill m-2">!</a></div>   
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">idProd</th>
                                        <th scope="col">Nom du Produit</th>
                                        <th scope="col">Image affectée</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Price</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $jointure = "SELECT * FROM produit INNER JOIN category ON produit.Type = category.IdCat";
                                        $requ=$conn->prepare($jointure);
                                        $requ->execute();
                                        $data=$requ->fetchAll(PDO::FETCH_ASSOC);

                                        $query_count = "SELECT COUNT(*) FROM produit INNER JOIN category ON produit.Type = category.IdCat";
                                        $res = $conn->query($query_count);
                                        $count = $res->fetchColumn();
                                        if($count>0)
                                        {
                                            foreach ($data as $produit) 
                                            {
                                               ?>
                                               <tr>
                                                <td><?= $produit['IdProd'];?></td>
                                                <td><?= $produit['NomProduit'];?></td>
                                                <td><img style="margin-left:40px;max-height:30px" src='data:image/png;base64,<?=base64_encode($produit['lienImg'])?>'/></td>
                                                <td><?= $produit['Description'];?></td>
                                                <td><?= $produit['NomCat'];?></td>
                                                <td><?= $produit['valeurP'];?></td>
                                                <td>
                                                   
                                                    <a href="aaa.php?IdProd=<?= $produit["IdProd"]; ?>" name ="update" class="btn btn-success btn-sm">Update</a>
                                                    
                                                    <form action="codeH.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete-produit" value="<?= $produit['IdProd'] ?>" class="btn btn-danger btn-sm">Delete</button>

                                                    </form>
                                                    <a href="ev.php?IdProd=<?= $produit["IdProd"]; ?>" name ="update" class="btn btn-warning btn-sm">Evaluate</a>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                                    ?>
                                                    <tr>
                                                        <td><?=$count;?></td>
                                                    </tr>
                                                    <?php
                                            
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div style="display: flex;">
                                <div style="flex: 50%;"><h6 class="mb-4">table des échanges</h6></div>
                                <div style="flex: 50%;margin-left: 69%;"><a href=""  class="btn btn-success btn-sm">Add</a></div>   
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">IdEX</th>
                                        <th scope="col">IdProd1</th>
                                        <th scope="col">IdProd2</th>
                                        <th><div style="margin-left:50%;"> Action</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query2 = "SELECT * FROM echange";
                                        $query_count2 = "SELECT COUNT(*) FROM echange";
                                        $query_run2 = $conn->prepare($query2);
                                        $query_run2->execute();
                                        $res2 = $conn->query($query_count2);
                                        $count2 = $res2->fetchColumn();
                                        $data2 = $query_run2->fetchAll(PDO::FETCH_ASSOC);
                                        if($count2>0)
                                        {
                                            foreach ($data2 as $echange) 
                                            {
                                               ?>
                                               <tr>
                                                <td><?= $echange['IdEX'];?></td>
                                                <td><?= $echange['IdProd1'];?></td>
                                                <td><?= $echange['IdProd2'];?></td>
                                                <td>
                                                    <div style="margin-left:50%;">
                                                        <a href="" name ="update" class="btn btn-success btn-sm">Update</a>
                                                        
                                                        <form action="codeH.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete-echange" value="<?= $echange['IdEX'] ?>" class="btn btn-danger btn-sm">Delete</button>

                                                        </form>
                                                    </div>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                                    ?>
                                                    <tr>
                                                        <td><?=$count2;?></td>
                                                    </tr>
                                                    <?php
                                            
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                     
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div style="display: flex;">
                                <div style="flex: 50%;"><h6 class="mb-4">table des catégories</h6></div>
                                <div style="flex: 50%;margin-left: 69%;"><a  onclick="aff_add_form()" class="btn btn-success btn-sm">Add</a></div>   
                            </div>
                            <div id="add-form-cat" hidden>
                                <form action="codeH.php" method="POST" >
                                    <div style="display: flex;">
                                        <input class="form-control form-control-sm" name='newCat' type="text" >
                                        <button type="submit" name="add-cat"  class="btn btn-success btn-sm">Confirm</button>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">IdCat</th>
                                        <th scope="col">NomCat</th>
                                        <th><div style="margin-left:40%;"> Action</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query3 = "SELECT * FROM category";
                                        $query_count3 = "SELECT COUNT(*) FROM category";
                                        $query_run3 = $conn->prepare($query3);
                                        $query_run3->execute();
                                        $res3 = $conn->query($query_count3);
                                        $count3 = $res3->fetchColumn();
                                        $data3 = $query_run3->fetchAll(PDO::FETCH_ASSOC);
                                        if($count3>0)
                                        {
                                            foreach ($data3 as $categ) 
                                            {
                                               ?>
                                               <tr>
                                                <td><?= $categ['IdCat'];?></td>
                                                <td><?= $categ['NomCat'];?></td>
                                                <td>
                                                    <div style="margin-left:40%;">
                                                        <a href="" name ="update" class="btn btn-success btn-sm">Update</a>
                                                        
                                                        <form action="" method="POST" class="d-inline">
                                                            <button type="submit" name="delete-produit" value="" class="btn btn-danger btn-sm">Delete</button>

                                                        </form>
                                                    </div>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                                    ?>
                                                    <tr>
                                                        <td><?=$count3;?></td>
                                                    </tr>
                                                    <?php
                                            
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">table de troc</h6>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">idR</th>
                                            <!--<th scope="col">idEX</th>-->
                                            
                                            <!--<th scope="col">idEX</th>-->
                                            <th scope="col">date</th>
                                            <th scope="col">heure</th>
                                            <th scope="col">pays</th>
                                            <th scope="col">localisation</th>
                                            
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM rendezR";
                                        // $query=" SELECT *
                                            //FROM rendezR
                                            //INNER JOIN echange
                                            //WHERE rendezR.idEX = echange.idEX";
                                            
                                            $statement = $conn->prepare($query);
                                            $statement->execute();

                                            $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                            $result = $statement->fetchAll();


                                            if($result)
                                            {
                                                foreach ($result as $row) 
                                                {
                                                ?>
                                                <tr>
                                                    <td><?= $row->idR;?></td>
                                                    <!--<td><?//= $row->idEX;?></td>-->
                                                    <td><?= $row->date;?></td>
                                                    <td><?= $row->heure;?></td>
                                                    <td><?=$row->pays;?></td>
                                                    <td><?=$row->localisation;?></td>
                                                    
                                                    <td>
                                                    
                                                        <a href="troc-edit.php?idR=<?= $row->idR; ?>" class="btn btn-success btn-sm">Update</a>
                                                        
                                                        <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete-rendezR" value="<?= $row->idR ?>" class="btn btn-danger btn-sm">Delete</button>

                                                        </form>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                } 
                                            }
                                            else
                                            {
                                                echo"<h5>no record found</h5>";   
                                            }
                                        ?>
                                        
                                    
                                    </tbody>
                                </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">table de coordonnées</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scop="col">idR</th>
                                        <th scope="col">adresse e-mail</th>
                                        <th scope="col">prix a envoyer</th>
                                        <th scope="col">envoyer a</th>
                                  
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM argent";
                                        $statement = $conn->prepare($query);
                                        $statement->execute();

                                        $statement->setFetchMode(PDO::FETCH_OBJ);
                                        $result = $statement->fetchAll();

                                        if($result)
                                        {
                                            foreach ($result as $row) 
                                            {
                                               ?>
                                               <tr>
                                               <td><?= $row->idR;?></td>
                                                <td><?= $row->ID;?></td>
                                                <td><?= $row->mail;?></td>
                                                <td><?= $row->prix;?></td>
                                                <td><?=$row->aqui;?></td>
                                           
                                                <td>
                                                   
                                                    <a href="payment-edit.php?ID=<?=$row->ID;  ?>" class="btn btn-success btn-sm">Update</a>
                                                    
                                                    <form action="code1.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete-argent" value="<?= $row->ID; ?>" class="btn btn-danger btn-sm">Delete</button>

                                                    </form>

                                                    


                                                </td>
                                                </tr>
                                                <?php
                                            } 
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    <div class="col-12 ">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table gestion</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">IDD</th>
                                        <th scope="col">id client</th>
                                        <th scope="col">objet</th>
                                        <th scope="col">caractéristiques</th>
                                        <th scope="col">description</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM don,catégories where don.id_catégories=catégories.id_categorie";
                                        $query_run = $conn->query($query);
                                        
                                        $query_count = "SELECT COUNT(*) FROM don,catégories where don.id_catégories=catégories.id_categorie";
                                        $res = $conn->query($query_count);
                                        $count = $res->fetchColumn();


                                        if($count>0)
                                        {
                                            foreach ($query_run as $clientC) 
                                            {
                                               ?>
                                               <tr>
                                                    <td><?= $clientC['IDD']?></td>
                                                    <td><?= $clientC['id_categorie']?></td>
                                                    <td><?= $clientC['objet']?></td>
                                                    <td><?= $clientC['caractéristiques']?></td>
                                                    <td><?= $clientC['description']?></td>
                                                    <td><img style="margin-left:20px;max-height:30px" src='data:image/png;base64,<?=base64_encode($clientC['photos'])?>'/></td>
                                                    <td><?= $clientC['catégorie']?></td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" href="delete.php?objet=<?= $clientC['id_categorie']; ?>">delete</a>
                                                        <a class="btn btn-success btn-sm" href="form2.php?id=<?= $clientC['id_categorie']; ?>">UPDATE</a>
                                                    </td>
                                                </tr>
                                                <?php
                                            } 
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
               
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table catégories</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">catégorie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query2 = "SELECT * FROM don,catégories where don.id_catégories=catégories.id_categorie";
                                        $query_run2 = $conn->query($query2);
                                        
                                        $query_count2 = "SELECT COUNT(*) FROM don,catégories where don.id_catégories=catégories.id_categorie";
                                        $res2 = $conn->query($query_count2);
                                        $count2 = $res2->fetchColumn();


                                        if($count2>0)
                                        {
                                            foreach ($query_run2 as $clientC) 
                                            {
                                               ?>
                                               <tr>
                                                    <td><?= $clientC['id_categorie']?></td>
                                                    <td><?= $clientC['catégorie']?></td>
                                                </tr>
                                                <?php
                                            } 
                                        }
                                        else
                                        {
                                             echo"<h5>no record found</h5>";   
                                        }
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table" id="tableau">
                                    
                                        <tr>
                                            <th scope="col">id_rec</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">id_client</th>
                                            <th scope="col">phone</th>
                                            <th scope="col">date</th>
                                            <th scope="col"> code produit</th>
                                            <th scope="col">code d achat</th>
                                            <th scope="col">degré d'urgence</th>
                                            <th scope="col">reclamation</th>
                                            <th scope="col">reponse</th>
                                            <th scope="col">operation</th>
                                           
                                        </tr>
                         

                                                                        
                                                                            <?php
                                        foreach($list as $client)
                                        {

                                        ?>
                                          <tr>
                                            <th scope="row"><?=$client['id'];?></th>
                                           
                                            <td><?=$client['prenom'];?></td>
                                            <td><?=$client['id_client'];?></td>
                                            <td><?=$client['num'];?></td>
                                            <td><?=$client['date'];?></td>
                                            <td><?=$client['code_produit'];?></td>
                                            <td><?=$client['code_dachat'];?></td>
                                            <td><?=$client['degre'];?></td>
                                            <td><?=$client['reclamation'];?></td>
                                            <td><?=$client['re'];?></td>
                                            <td style="width:21%;"> <button class="btn btn-danger btn-sm"><a href="table.php?delteteid=<?=$client['id'];?>" style="color:white" >Delete</a></button>
                                            <button class="btn btn-danger btn-sm" ><a href="rep.php?delteteid=<?=$client['id'];?>" style="color:white" >repondre</a></button>
                                            <button class="btn btn-warning btn-sm" ><a href="rep2.php?delteteid=<?=$client['id'];?>" style="color:white">UPDATE</a></button></td>
                                            </tr>
                                                                        
                                    <?php 
                                    } ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div>
                <canvas id="myChart"></canvas>
            </div>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                    labels: [ 'star0','star1', 'star2', 'star3', 'star4', 'star5'],
                    datasets: [{
                        label: '# of Votes',
                        data: [<?php echo $c0;?>,<?php echo $c1;?>,<?php echo $c2;?>, <?php echo $c3;?>, <?php echo $c4;?>,<?php echo $c5;?>],
                        borderWidth: 10
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });
            </script>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="src.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


<?php


if(isset($_GET['delteteid']))
{

   // $idd=$_GET['delteteid'];
   $clientC->deleteclient($_GET['delteteid']);
   $clientC->deletrep($_GET['delteteid']);
    //echo'qddqd'.$idd;
}

?>
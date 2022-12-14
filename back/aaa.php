<?php
require'config.php';

session_start();
if(!isset($_SESSION['mail_env']) || $_SESSION['adm']==0){
    header("location: ../front/login.php");
}
?>

<!DOCTYPE html><html><head><meta charset="utf-8"/>

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>startroc</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="cssH/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="cssH/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="cssH/responsive.css" rel="stylesheet"/>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php">
                <span>
                  startroc
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.php">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.php">Services </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sign up.php">Sign up</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php"> Login</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

<main>

    <?php
    if(isset($_GET['IdProd']))
    {
        $produit_id=$_GET['IdProd'];
        $query = "SELECT * FROM produit WHERE IdProd='$produit_id'";
        $query_count = "SELECT COUNT(*) FROM produit WHERE IdProd='$produit_id'";
        $res = $conn->query($query_count);
        $count = $res->fetchColumn();
        $query_run = $conn->query($query);

        

        if($count>0)
        {
          $produit = $query_run->fetch(PDO::FETCH_BOTH); 
          $event = $produit['Type'];
          $cat_qu = "SELECT * FROM category WHERE IdCat LIKE '%$event%'";
          $cat=$conn->query($cat_qu);
          $idtype = $cat->fetch(PDO::FETCH_BOTH); 
          $nomCategry = $idtype['NomCat'];
           ?>


<section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>
       Mettre ?? jour les informations d'un Article
      </h2>
    </div>
    <div class="container">
      <form  id="login_form" name="update" action="codeH.php?IdProd=<?= $_GET["IdProd"]; ?>" method="post" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type='hidden'  class="field_class" name="produit_id" value="."   required>
            <label for="inputNameP">Nom du Produit</label>
            <input type="text" class="form-control" id="inputNameP" name="NomProduit"  value="<?=$produit['NomProduit'];?>"   required/>
          </div>
          <div class="form-group col-md-6">
            <label for="lienImg">Image repr??santant votre Produit <span style="font-size:80%">(remettre votre image pour la conserver)<span></label>
            <input class="form-control bg" type=file id='lienImg' name='lienImg' disabled>
            <img style="position:absolute;max-height:150px" src='data:image/png;base64,<?=base64_encode($produit['lienImg'])?>'/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputState">Selectionner le type de produit</label>
            <select id="inputState" name="Type" class="form-control" >
              <?php
                $allcat_qu = "SELECT * FROM category";
                $allcat=$conn->query($allcat_qu);
                foreach ($allcat as $Ctgs){
              ?>
              <option <?php if (isset($nomCategry) && $nomCategry==$Ctgs['NomCat']) echo "selected";?>><?=$Ctgs['NomCat']?></option>
              <?php
                }
              ?>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="inputdesc">Description</label>
          <input type="text" class="form-control" id="inputdesc" name="Description"  value="<?=$produit['Description'];?>"   required/>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button  type="submit" name="update" form="login_form">Update</button>
    </div>
    </form>
    
  </section>






        <?php
        }
        else 
        {
            echo"No such id found";
        }
    }
    ?>
    </main>




  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
          startroc
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                 des liens utiles
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum dolor
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sit amet, consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing elit,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sed do eiusmod
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tempor incididunt
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  contactez nous
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum
                    </a>
                  </li>
                  <li>
                    <a href="">
                      dolor sit amet,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing
                    </a>
                  </li>
                  <li>
                    <a href="">
                      elit, sed do eiusmod
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="images/fb.png" alt=""/>
            </a>

            <a href="">
              <img src="images/twitter.png" alt=""/>
            </a>
            <a href="">
              <img src="images/linkedin1.png" alt=""/>
            </a>
            <a href="">
              <img src="images/instagram1.png" alt=""/>
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    
  </div>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body></html>
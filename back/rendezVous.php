<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css2/style.css" rel="stylesheet"/>
    <link href="css2/rendez  vous.css" rel="stylesheet"/>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css2/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
  
  
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="../front/index.php">
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
                      <a class="nav-link" href="../front/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/about.php">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/service.php">Services </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/product/product.php"> product</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/sign up.php">Sign up</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../front/login.php"> Login</a>
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

      
    <main>
        <form  class="form_class" action="code.php" method="post">
                <a href="rendezVous.php" class="btn btn-secondary btn-lg">rendez-vous</a>
                <a  href="payment.php" class="btn btn-secondary btn-lg">payment</a>
            <div class="form_div">
            
                <div class="alert">

                </div>

               
                
                <?php
               
                include('message.php'); 
                ?>
                
               
                <label>date</label>
                <input id="date" class="field_class" name="date" type="date"  required>
                <label>heure</label>
                <input id="time" class="field_class" name="heure" type="time"  required>
                <label>pays</label>
                <input id="pays" class="field_class" name="pays" type="text" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter on alphabets only. ')"  required>
                <label>localisation</label>
                <input id="localisation" class="field_class" name="localisation" type="text" pattern="[a-zA-Z0-9]*"  required>

              
                <button class="submit_class" type="submit" name="ajouter"  onclick="return validarLogin()">submit</button>
                
   
                <!--<button class="submit_class"   onclick="validarLogin()">Submit</button>-->
             
            </div>
           
        </form>
    </main>
    <script  src="../js/rendez vous.js"></script>
</body>
</html>
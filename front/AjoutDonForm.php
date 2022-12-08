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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
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
              <a class="navbar-brand" href="index.html">
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
<br><br>
          
     <body>  
      <form action="add.php"  enctype="multipart/form-data"  method="post">
        <div class="contactez-nous">
          <center> <h1>Contactez-nous</h1>
            <p>Bienvenu dans notre cite Web? Envie de faire un don! Remplisser juste ces quelques étapes! </p>


            <div>
              <div>
              
                <input class="text"  type="text" id="objet" name="objet" id="objet"  placeholder="L'objet du Don"  required="">
                <!--<input           type="text" id="nom"            name="nom"            id="nom" >-->
                <span id="error"></span>
              </div>
              <br>
              <div>
                <input class="text" type="text" Id="caractéristiques" name="caractéristiques" placeholder="Les caractéristiques du Don " required="">
                <span id="error2"></span>
              </div>
          
            
              <div>
                <br>
                <div>
                  <input class="text" type="text" name="description" id="Description" placeholder="Description du Don " required="" >
                <span id="error3"></span>
                </div>
                <br>
            
          
            
              </div>
              <div>
                <label for="inputlink">Choisissez la photo du Don:</label>
                <input class="form-control bg" type=file id="inputlink" name='inputlink'>

              </div>
              <br>  
              <div>
                <label for="sujet">Choisissez votre type de don: </label>
                <select name="sujet" id="sujet" >
                  <option value="" disabled selected hidden>Choisissez votre type de don</option>
                  <option value="donation-simple" >Donation simple    (pour avantager les personnes de votre choix)</option>
                  <option value="donation-partage">Donation partage  (pour eviter d'eventuels conflits)</option>
                  <option value="donation-manuel">Donation manuel    (pour transmettre de l'argent et certains bien)</option>
                  <option value="autre">Autre...</option>
                </select>
              </div>
              <br>
              <br>
              <div>
              <button id="butt" type="submit">Envoyer mon message</button>
              </div>
            </div>
          </center>
        </div>
      </form>


  
<br><br><br><br>
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
<div class="colorlibcopy-agile">
			
</div>
<!-- //copyright -->
<ul class="colorlib-bubbles">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
</div>
<!-- //main -->
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/sign up.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->

<!-- //web font -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
  <header class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <img src="C:\Users\user\Pictures" height="50px" width="60px">
            <a class="navbar-brand" href="index.html">
              <span>
                startroc
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>



</head>
<script src="jj.js"></script>
<body>

  
	

</body></html>
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
  <link href="css/csss.css" rel="stylesheet"/>

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

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h1> <i class="fa-sharp fa-solid fa-gear"></i> 
      <span>Nouvelle</span> <span>Réclamation</span>
      </h1>
     <!-- <p>
        psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>-->
    </div>
    <div class="container">
      
   <form method="POST" >  
        <div class="form-row"> 
          <div class="form-group col-md-6">
            <label for="inputName4">  <i class="fa-solid fa-user"> </i> Name </label>
         <input  type="text" class="form-control" id="inputName4"   name="prenom" />    
         <test1 > </test1>
           
          </div>

        
      
          <div class="form-group col-md-6">
            <label for="inputEmail6">  <i class="fa-solid fa-id-card"></i> Id</label>
            <input type="text" class="form-control" id="inputEmail6" name="id" >
            <test3>  </test3>
          </div>
          
                           
         
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber5">  <i class="fa-solid fa-phone"></i>Phone number</label>
            <input type="tel" class="form-control" id="inputNumber5" name="num" >
            <test2>  </test2>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">  <i class="fa-solid fa-tower-broadcast"></i> Degré d'urgence</label>
            <select id="inputState" class="form-control" name="degre" >

              <option value="normale">normale</option>
               <option value="urgent">urgent</option>
            </select>
           
          </div>

        </div>


       
           

          <div class="form-row"> 
          <div class="form-group col-md-6">
            <label for="inputEmail4">  <i class="fa-solid fa-calendar-days"></i>date</label>
            <input type="date" class="form-control" id="inputEmail4" name="date" />

          </div>
        
         
          <div class="form-group col-md-6">
            <label for="inputNumber8">   <i class="fa-solid fa-code"></i> code produit</label>
            <input type="text" class="form-control" id="inputNumber8" name="codep" />
           <!-- <test4>  </test4> -->
          </div>
          </div>
       
          <div class="form-group col-md-6">
            <label for="inputNumber7">   <i class="fa-solid fa-code"></i>  code d'achat</label>
            <input type="text" class="form-control" id="inputNumber7" name="codea" />
           <!--  <test5></test5> -->
          </div>         

      
      

   
    






        <div class="form-group">
          <label for="inputMessage">   <i class="fa-sharp fa-solid fa-circle-exclamation"></i> Détails de la réclamation</label>

          <textarea name="reclamation" type="text" class="form-control" id="inputMessage" placeholder=""></textarea>
              
        </div>
    </div>

    <div class="rationg">
  <input type="radio" name="star" id="star1"  value='5' hidden><label for="star1">
    
</label>
<input type="radio" name="star" id="star2" value='4' hidden><label for="star2">
</label>
<input type="radio" name="star" id="star3" value='3' hidden><label for="star3">
</label>
<input type="radio" name="star" id="star4" value='2' hidden><label for="star4">
</label>
<input type="radio" name="star" id="star5" value='1' hidden><label for="star5">
  
</label>


</div>
   
    <div class="d-flex justify-content-center">
      <!--  <form action="config2.php">  -->
      <button type="submit"  id="upe" value="confirmer" name="upe">Send</button>
     <!--  </form> -->
    </div> 
   
  </form>

    <div class="d-flex justify-content-center">
    <form action="update.php">
      <button   type="submit">UPDATE</button>
      </form> <!--    -->


    </div>
 
    
    
  </section>

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


  <script src="https://kit.fontawesome.com/8d26086bfa.js" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
  
  </form>

  <script src="controle.js"></script>
 
</script>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
</html>



<?php

require 'client.php';

$clientC=new reclamation();
if (isset($_POST['upe']  ) ) {
 

   $prenom=$_POST['prenom'];


    $num=$_POST['num'];
    $de=$_POST['degre'];
    $id=$_POST['id'];
    $da=$_POST['date'];
    $codep=$_POST['codep'];
    $codea=$_POST['codea'];
    $reclamation= $_POST['reclamation'];  
    if($_POST['star']==NULL )
    {
      $st=0;
    }
    else
    {
      $st=$_POST['star'];
    }


   



    
    $clientC->ajouter_reclamation($prenom,$id,$num,$da,$codea,$codep,$de,$reclamation,$st);

    //header('Location: client.php');
   


    
 }






?>
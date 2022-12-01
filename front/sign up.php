<?php

require 'config.php';

if(isset($_POST['submit'])) {

    $name =$_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $adress =  $_POST['adress'];
    $code = $_POST['code'];
    $ccode = $_POST['ccode'];

    $select = "SELECT * FROM users WHERE email = '$email' && code = '$code' ";
    $result = $conn->query($select);
    
    $select_count = "SELECT COUNT(*) FROM users WHERE email = '$email' && code = '$code' ";
    $res = $conn->query($select_count);
    $count = $res->fetchColumn();
    if($count > 0) {
        
        $error[] = 'User already exist!';
    }else {
        if($code != $ccode){
            $error[] = 'password not matched!';
        }else {
            $insert = "INSERT INTO users(name,email,phone,adress,code) VALUES('$name', '$email', '$phone', '$adress', '$code') ";
            $conn->exec($insert);
            $srchqu = "SELECT * FROM users WHERE email  = '$email'";
            $srchqu_run = $conn->query($srchqu);
            $srch = $srchqu_run->fetch(PDO::FETCH_BOTH);
            $idcr = (int) $srch['id'];
            
            
            $query2 = "INSERT INTO role(id_client,type) VALUES ($idcr,'client')";
            $query_run2 = $conn->query($query2);
            header('location: login.php');
        }
    }

}





?>



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
</head>
<body>
  <form method="post">

	<!-- main -->
    
    



    <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <img src="images/logo.png" height="50px" width="60px">
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
                        <a class="nav-link" href="sign%20up.php"> Sign up</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php"> Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="compte.php"> Compte</a>
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
       
   
              
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
        <?php
        
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>' ; 
            };
        }

        ?>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="name" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="text" name="phone" placeholder="Phone" required="">
                    <pre><br></pre>
                    <input class="text" type="text" name="adress" placeholder="Adress" required="">
                    <pre><br></pre>
					<input class="text" type="password" name="code" placeholder="Password"  minlenght="3"  maxlenght="20"  required>
					<input class="text w3lpass" type="password" name="ccode" minlenght="3"  maxlenght="20" placeholder="Confirm Password" required>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit"  name="submit" value="SIGNUP">
				</form>
				<p>already have an account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
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
         
  </form>
	<!-- //main -->
</body>
</html>

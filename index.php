<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>photo$hop</title>
  </head>
  <body>
  	<?php
	  $login_cookie = $_COOKIE['login'];
	    if(isset($login_cookie)){
	    	if($_COOKIE['admin'] == 0){

	    	}
	    } else {
		    header('Location: ./login.html');
		}
	?>

    <!-- Image and text -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light bd-navbar">
	  <div class="container-fluid">
	    <a class="navbar-brand">
	      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-camera2" viewBox="0 0 16 16">
			  <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4z"/>
			  <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.972 5.972 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1zM2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0zM14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0z"/>
			</svg>
	      photo$hop
	    </a>

	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="./index.php">Photos</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="./shop.php">Shop</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="./admin.php">Admin</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link logout" href="./login.html">Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container my-4">

	    <!--Grid row-->
	    <div class="row">

	      <!--Grid column-->
	      <div class="col-lg-4 col-md-12 mb-4">

	        <img src="https://i.ibb.co/mzghTJN/IMG-20200609-091518.jpg" class="img-fluid mb-4" alt="">

	        <img src="https://i.ibb.co/BTnyXc3/IMG-20210128-151924.jpg" class="img-fluid mb-4" alt=""
	          data-wow-delay="0.3s">

	      </div>
	      <!--Grid column-->

	      <!--Grid column-->
	      <div class="col-lg-4 col-md-6 mb-4">

	        <img src="https://i.ibb.co/9pBMC6r/IMG-20210128-122516.jpg" class="img-fluid mb-4" alt=""
	          data-wow-delay="0.1s">

	        <img src="https://i.ibb.co/DbxSRRf/IMG-20200910-153523.jpg" class="img-fluid mb-4" alt=""
	          data-wow-delay="0.4s">

	      </div>
	      <!--Grid column-->

	      <!--Grid column-->
	      <div class="col-lg-4 col-md-6 mb-4">

	        <img src="https://i.ibb.co/tJXgVsg/IMG-20210128-151913.jpg" class="img-fluid mb-4" alt=""
	          data-wow-delay="0.2s">

	        <img src="https://i.ibb.co/68J0Qzy/IMG-20210128-102842.jpg" class="img-fluid mb-4" alt=""
	          data-wow-delay="0.5s">

	      </div>
	      <!--Grid column-->

	    </div>
	    <!--Grid row-->

	  </div>

	  <script type="text/javascript">
	  	    $(".img-fluid").addClass("wow fadeIn z-depth-1-half");

    		new WOW().init();
	  </script>

  </body>
</html>
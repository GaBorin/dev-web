<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="shop.css">

    <title>photo$hop</title>
  </head>
  <body>
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
	          <a class="nav-link" href="./index.php">Photos</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="./shop.php">Shop</a>
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

	<h1 class="display-4 text-center inner" style="margin: 50px auto;">Ensaios & Valores</h1>

	<div class="container">
	  <div class="card-deck mb-3 text-center">

	  	<?php
			$link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');

			if(!$link) {
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM ensaios ORDER BY preco_foto";

			if($result = mysqli_query($link, $sql)){
				if (mysqli_num_rows($result) <= 0){
				echo"<script language='javascript' type='text/javascript'>
				alert('Nao ha dados');window.location
				.href='login.html';</script>";
				die();
				}else{
				while($row = mysqli_fetch_array($result)){
				    echo '<div class="card mb-4 shadow-sm">';
				    echo '<div class="card-header">
					        <h4 class="my-0 font-weight-normal">' . $row['nome'] . '</h4>
					      </div>';
					echo '<div class="card-body">';
					echo '<h1 class="card-title pricing-card-title">RS' . $row['preco_foto'] . '<small class="text-muted">/ foto</small></h1>';
					echo '<ul class="list-unstyled mt-3 mb-4">';
					echo '<li>Minimo de ' . $row['quantidade_minima'] . ' fotos</li>';
					if($row['quantidade_cenarios'] == 1){
						echo '<li>Um unico cenario</li>';
					} else{
						echo '<li>' . $row['quantidade_cenarios'] . ' cenarios</li>';
					}
					if($row['edicao_profissional'] == 1){
						echo '<li>Edicao profissional</li>';
					} else{
						echo '<li>Correcoes automatica</li>';
					}
					if($row['extras']){
						echo '<li>' . $row['extras'] . '</li>';
					}
					echo '</ul>';
				    echo '</div>';
				    echo '</div>';
				}
				echo "</tr>";
				}
		      } else {
		      	die("erro ao selecionar");
		      }
		      mysqli_close($link);
			?>
	    <!--div class="card mb-4 shadow-sm">
	      <div class="card-header">
	        <h4 class="my-0 font-weight-normal">Basico</h4>
	      </div>
	      <div class="card-body">
	        <h1 class="card-title pricing-card-title">RS10 <small class="text-muted">/ foto</small></h1>
	        <ul class="list-unstyled mt-3 mb-4">
	          <li>Minimo de 25 fotos</li>
	          <li>1 unico cenario</li>
	          <li>Correcoes automatica</li>
	        </ul>
	      </div>
	    </div-->
	  </div>
	</div>

  </body>
</html>
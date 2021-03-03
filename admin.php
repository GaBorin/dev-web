<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="admin.css">

	<!-- Template -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	          <a class="nav-link" href="./shop.php">Shop</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="./admin.php">Admin</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link logout" href="./login.html">Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<?php
	  $login_cookie = $_COOKIE['login'];
	    if(isset($login_cookie)){
	    	if($_COOKIE['admin'] == 0){
	    		echo"<script language='javascript' type='text/javascript'>
              alert('Você não tem permissão pra acessar essa página!');window.location.
              href='login.html'</script>";
	    		header('Location: ./index.php');
	    	}
	    } else {
		    header('Location: ./login.html');
		}
	?>

	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var actions = $("table td:last-child").html();

		// Append table with add row form on add new button click
	    /*$(".add-new").click(function(){
			$(this).attr("disabled", "disabled");
			var index = $("table tbody tr:last-child").index();
	        var row = '<tr>' +
	        	'<td><input type="text" class="form-control" name="in_id" id="id" disabled></td>' +
	            '<td><input type="text" class="form-control" name="in_ensaio" id="ensaio"></td>' +
	            '<td><input type="text" class="form-control" name="in_preco" id="preco"></td>' +
	            '<td><input type="text" class="form-control" name="in_min" id="min"></td>' +
	            '<td><input type="text" class="form-control" name="in_cenarios" id="cenarios"></td>' +
	            '<td><input type="text" class="form-control" name="in_edicao" id="edicao"></td>' +
	            '<td><input type="text" class="form-control" name="in_extras" id="entras"></td>' +
				'<td>' + actions + '</td>' +
	        '</tr>';
	    	$("table").append(row);		
			$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
	        $('[data-toggle="tooltip"]').tooltip();
	    });*/

		// Add row on add button click
		$(document).on("click", ".add", function(){
			/*var empty = false;
			var input = $(this).parents("tr").find('input[type="text"]');
	        input.each(function(){
				if(!$(this).val()){
					$(this).addClass("error");
					empty = true;
				} else{
	                $(this).removeClass("error");
	            }
			});
			$(this).parents("tr").find(".error").first().focus();
			if(!empty){
				input.each(function(){
					$(this).parent("td").html($(this).val());
				});			
				$(this).parents("tr").find(".add, .edit").toggle();
				$(".add-new").removeAttr("disabled");
			}*/
	        var clickBtnValue = $(this).val();
	        var ajaxurl = 'ajax.php',
	        data =  {'action': clickBtnValue};
	        $.post(ajaxurl, data, function (response) {
	            // Response div goes here.
	            alert("action performed successfully");
	        });
	    });

		// Edit row on edit button click
		$(document).on("click", ".edit", function(){		
	        $(this).parents("tr").find("td:not(:last-child)").each(function(){
				$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
			});		
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").attr("disabled", "disabled");
	    });
		// Delete row on delete button click
		$(document).on("click", ".delete", function(){
	        $(this).parents("tr").remove();
			$(".add-new").removeAttr("disabled");
	    });
	});
	</script>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <h1 class="display-4 text-center inner">Lista de Ensaios</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	<th>Id</th>
                        <th>Nome do Ensaio</th>
                        <th>Preco por Foto</th>
                        <th>Quantidade Min</th>
                        <th>Quantidade Cenarios</th>
                        <th>Edicao Profissional</th>
                        <th>Extras</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
						$link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');

						if(!$link) {
							die("ERROR: Could not connect. " . mysqli_connect_error());
						}

						$sql = "SELECT * FROM ensaios";

						if($result = mysqli_query($link, $sql)){
							if (mysqli_num_rows($result) <= 0){
							echo"<script language='javascript' type='text/javascript'>
							alert('Nao ha dados');window.location
							.href='login.html';</script>";
							die();
							}else{
							while($row = mysqli_fetch_array($result)){
							    echo "<tr>";
							    echo "<td>" . $row['id'] . "</td>";
							    echo "<td>" . $row['nome'] . "</td>";
							    echo "<td>" . $row['preco_foto'] . "</td>";
							    echo "<td>" . $row['quantidade_minima'] . "</td>";
							    echo "<td>" . $row['quantidade_cenarios'] . "</td>";
							    echo "<td>" . $row['edicao_profissional'] . "</td>";
							    echo "<td>" . $row['extras'] . "</td>";
							}
							echo "</tr>";
							}
					      } else {
					      	die("erro ao selecionar");
					      }
					      // Close connection
						  mysqli_close($link);
						?>
                </tbody>
            </table>
        </div>
    </div>

    <form action="admin.php" method="post">
	  <div class="input-group mb-3 insert-form">
	    
	      <input type="text" class="form-control" placeholder="Nome do Ensaio" name="insert_nome">
	    
	      <input type="text" class="form-control" placeholder="Preco por Foto" name="insert_preco">
	    
	      <input type="text" class="form-control" placeholder="Quantidade Minima" name="insert_min">
	    
	      <input type="text" class="form-control" placeholder="Quantidade Cenarios" name="insert_cenario">
	
	   
	      <input type="text" class="form-control" placeholder="Edicao Profissional" name="insert_edicao">
	   
	      <input type="text" class="form-control" placeholder="Extras" name="insert_extras">
	    
		  <div class="input-group-append">
			<button class="btn btn-success" type="submit" name="insert" value="insert">Insert</button>
		  </div>
	  </div>
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insert']))
	    {

			$in_nome = $_POST['insert_nome'];
			$in_preco = ($_POST['insert_preco']);
			$in_min = ($_POST['insert_min']);
			$in_cenarios = ($_POST['insert_cenario']);
			$in_edicao = ($_POST['insert_edicao']);
			$in_extras = ($_POST['insert_extras']);

			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */
			$link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');
			 
			// Check connection
			if($link === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			 
			// Attempt insert query execution
			$sql = "INSERT INTO ensaios (nome, preco_foto, quantidade_minima, quantidade_cenarios, edicao_profissional, extras) VALUES ('" . $in_nome . "', '" . $in_preco . "', '" . $in_min . "', '" . $in_cenarios . "', '" . $in_edicao . "', '" . $in_extras . "')";
			if(mysqli_query($link, $sql)){
			    //echo "Records inserted successfully.";
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
			 
			// Close connection
			mysqli_close($link);

			//Refresh by HTTP 'meta'
			echo("<meta http-equiv='refresh' content='0'>");
		}
	?>

	<form action="admin.php" method="post">
	  <div class="input-group mb-3 edit-form">

	  	  <input type="text" class="form-control" placeholder="Id" name="edit_id">
	    
	      <input type="text" class="form-control" placeholder="Nome do Ensaio" name="edit_nome">
	    
	      <input type="text" class="form-control" placeholder="Preco por Foto" name="edit_preco">
	    
	      <input type="text" class="form-control" placeholder="Quantidade Minima" name="edit_min">
	    
	      <input type="text" class="form-control" placeholder="Quantidade Cenarios" name="edit_cenario">

	      <input type="text" class="form-control" placeholder="Edicao Profissional" name="edit_edicao">
	   
	      <input type="text" class="form-control" placeholder="Extras" name="edit_extras">
	    
		  <div class="input-group-append">
			<button class="btn btn-info" type="submit" name="edit" value="edit">Edit</button>
		  </div>
	  </div>
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['edit']))
	    {
	    	$edit_id = $_POST['edit_id'];
			$edit_nome = $_POST['edit_nome'];
			$edit_preco = ($_POST['edit_preco']);
			$edit_min = ($_POST['edit_min']);
			$edit_cenario = ($_POST['edit_cenario']);
			$edit_edicao = ($_POST['edit_edicao']);
			$edit_extras = ($_POST['edit_extras']);

			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */
			$link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');
			 
			// Check connection
			if($link === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			 
			// Attempt insert query execution
			$sql = "UPDATE ensaios SET nome = '" . $edit_nome . "', preco_foto = '" . $edit_preco . "', quantidade_minima = '" . $edit_min . "', quantidade_cenarios = '" . $edit_cenario . "', edicao_profissional = '" . $edit_edicao . "', extras = '" . $edit_extras . "' WHERE id = "  . $edit_id;

			if(mysqli_query($link, $sql)){
			    //echo "Records inserted successfully.";
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
			 
			// Close connection
			mysqli_close($link);

			//Refresh by HTTP 'meta'
			echo("<meta http-equiv='refresh' content='0'>");
		}
	?>

    <form action="admin.php" method="post">
    	<div class="input-group mb-3 delete-button">
		  <input type="text" class="form-control" placeholder="Id to delete" name="id_to_delete">
		  <div class="input-group-append">
			<button class="btn btn-danger" type="submit" name="delete" value="delete">Delete</button>
		  </div>
		</div>
    </form>

    <?php
	    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['delete']))
	    {
	        /* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */
			$link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');
			 
			// Check connection
			if($link === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			 
			// Attempt delete query execution
			$sql = "DELETE FROM ensaios WHERE id = " . $_POST['id_to_delete'];
			if(mysqli_query($link, $sql)){
			    //echo "Records were deleted successfully.";
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
			 
			// Close connection
			mysqli_close($link);

			//Refresh by HTTP 'meta'
			echo("<meta http-equiv='refresh' content='0'>");
		}
	?>

  </body>
</html>
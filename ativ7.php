<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        
        <h1 class="navbar-brand">Photos</h1>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 center">
            <li class="nav-item">
              <a class="nav-link" href="https://ttc-dev-web.herokuapp.com/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://ttc-dev-web.herokuapp.com/photos.html">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ttc-dev-web.herokuapp.com/others.html">Others</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://ttc-dev-web.herokuapp.com/about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ttc-dev-web.herokuapp.com/contact.html">Contact</a>
            </li>
          </ul>
        </div>

        <a class="navbar-brand">Home Sweet Home</a>
        <!--a class="navbar-brand" href="https://ttc-dev-web.herokuapp.com/index.html">Home Sweet Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button-->

      </div>
    </nav>

    <h1 class="bd-form"> DB managment </h1>

    <form method="post" action="ativ7.php">
      <div class="input-group mb-3 bd-form">
        <label class="input-group-text" for="inputGroupSelect01">Operation</label>
        <select class="form-select" id="inputOperacao" name="inputOp">
          <option selected>Escolha...</option>
          <option value="insert">Insert</option>
          <option value="delete">Delete</option>
          <option value="edit">Edit</option>
        </select>

        <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="inputUsername">
      </div>

      <div class="input-group mb-3 bd-form">
        

        <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="inputEmail">

        <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="inputPassword">

        <input class="btn btn-outline-secondary" type="submit" value="Submit">
      </div>
    </form>
	<?php
      $operacao = $_POST['inputOp'];
      $username = $_POST['inputUsername'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputPassword'];

      //echo '<h3> op:' . $operacao . '</h3>';
      //echo '<h3> username:' . $username . '</h3>';
      //echo '<h3> email:' . $email . '</h3>';
      //echo '<h3> senha:' . $senha . '</h3>';

      if($operacao){
        require('connectionDB.php');

        switch ($operacao) {
          case 'insert':

          	  $sql = 'INSERT INTO users (username, email, password) VALUES (\'' . $username . '\', \'' . $email . '\', \'' . $senha . '\')';
              
              echo '<h5 class="bd-form">' . $sql . '</h5>';
              
              if (mysqli_query($link, $sql)) {
			    echo "New record created successfully";
			  } else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($link);
			  }
              /*
              if (mysqli_query($link, $sql)) {
				$last_id = mysqli_insert_id($link);
				echo '<h5 class="bd-form"> New record created successfully. Last inserted ID is: ' . $last_id . '</h5>';
			  } else {
				echo '<h5 class="bd-form" style="color: red;">Error: ' . $sql . '<br>' . mysqli_error($link) . '</h5>';
			  }*/

              break;
          case 'delete':
              $sql = $operacao . ' from users where id = ' . $dados . ';';
              echo '<h3 class="bd-form">' . $sql . '</h3>';              
              

              break;
          case 'edit':
              $sql = ' update users set nome = ' . $dados . ';';
              echo '<h3 class="bd-form">' . $sql . '</h3>';
              
              

              break;
          default:
              
              break;
      	}
      } else {
        echo '<h3 class="bd-form"> Nenhuma operação selecionada! </h3>';
      }

      $link->close();
    ?>
  </body>

  <footer class="page-footer">
	  This app is hosted on a
	  <a href="https://www.heroku.com/free">Heroku Free Dyno</a>.
  </footer>
</html>
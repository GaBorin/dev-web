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

    <h1 class="email-form"> Operações no banco </h1>

    <div class="input-group mb-3 bd-form">
      <label class="input-group-text" for="inputGroupSelect01">Ação</label>
      <select class="form-select" id="inputOperacao" name="inputOperacao">
        
        <option value="1">Insert</option>
        <option value="2">Delete</option>
        <option value="3">Edit</option>
      </select>
    </div>

    <div class="input-group mb-3 bd-form">
      <span class="input-group-text" id="inputGroup-sizing-default">Tabela</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

      <span class="input-group-text" id="inputGroup-sizing-default">Dados</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Send</button>
    </div>

    <?php
      $operacao = $_POST['inputOperacao'];

      if($operacao){
      	require('connectionBD.php');
        echo '<h2> operacao </h2>';
        switch ($operacao) {
	        case '1':
	            echo 'this is value1<br/>';
	            break;
	        case '2':
	            echo 'value2<br/>';
	            break;
	        case '3':
	            echo 'value3<br/>';
	            break;
	        default:
	            # code...
	            break;
	    }
      } else {
      	echo 'deu ruim rapaize';
      }
    ?>

  </body>

  <footer class="page-footer">
  This app is hosted on a
  <a href="https://www.heroku.com/free">Heroku Free Dyno</a>.
</footer>
</html>
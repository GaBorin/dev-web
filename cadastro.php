<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">

    <title>Cadastro photo$hop</title>
  </head>

  <body>
    <?php
      $login = $_POST['login'];
      $senha = MD5($_POST['senha']);
      $email = ($_POST['email']);
      
      $link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');

      $query_select = "SELECT login FROM usuarios WHERE login = '" . $login . "'";
      $select = mysqli_query($link, $query_select);
      $array = mysqli_fetch_array($select);
      $logarray = $array['login'];

      if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>
            alert('O campo login deve ser preenchido!');window.location.
            href='cadastro.html'</script>";
      } else{
        if($logarray == $login){
          echo"<script language='javascript' type='text/javascript'>
            alert('Este login ta existe!');window.location.
            href='cadastro.html'</script>";
          die();
        } else{
          $query = "INSERT INTO usuarios (login,senha, email) VALUES ('$login','$senha','$email')";
          $insert = mysqli_query($link, $query);

          if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuario cadastrado com sucesso!');window.location.
            href='login.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Nao foi possivel cadastrar esse usuario');window.location
            .href='cadastro.html'</script>";
          }
        }
      }
    ?>
  </body>
</html>

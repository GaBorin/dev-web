<?php
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  
  $link = mysqli_connect('localhost', '242517', '7LFv9hbgWz_FYjh', '242517db2');
  
  if (isset($entrar)) {
    $result = mysqli_query($link, "SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($result) <= 0) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      } else {
        while($row = mysqli_fetch_array($result)){
          if($row['admin'] == 1 ){
            echo"<script language='javascript' type='text/javascript'>
          alert('Admin logado');window.location
          .href='login.html';</script>";
            $_SESSION["admin"] = 1;
          } else {
            echo"<script language='javascript' type='text/javascript'>
          alert('Não admin logado');window.location
          .href='login.html';</script>";
            $_SESSION["admin"] = 0; 
          }
          setcookie("admin", $row['admin']);
        }
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>
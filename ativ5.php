<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <p>Hello World1</p>

    <?php 

    echo $_POST['user']."<br>";
    echo $_POST['age']."<br>";


    echo $_POST['pwd']."<br>";

    $numero = $_POST['num'];

    //$_GET['name'];

    //PAR
    if($numero%2==0)
    {
      echo "O numero ". $numero ."eh PAR<br>";
    }
    else
    {
      echo "O numero ". $numero ." eh IMPAR<br>";
    }

    /* VERIFICAR SE EH PRIMO */
    $primo = 1;
    $n = $numero-1;
    while($n > 1){
      if (($numero%$n)==0)
      {
        $primo = -1;
      }
      $n--;
    }

    if($primo==1)
      echo "<br> ".$numero." EH primo <br>";
    else
      echo "<br>".$numero."  NAO EH primo <br>";


    for($x=$numero;$x>0;$x--){
      echo $x . " ";

    }



$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 


    
    $idade = 16;
    echo $user = $idade>=18 ? "pode comprar" : "chama o papai";

      $x=4;
      if ($x==1)
          echo '<p>Hello World2</p>'; 
      else
          echo '<p>Hi World3</p>'; 
    
    ?> 

  </body>
</html>
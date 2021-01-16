<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/ativ2.css">

		<a href=https://ttc-dev-web.herokuapp.com/index.html>Home</a>
	</head>

	<body>
		<h4>ATIVIDADES PHP BÁSICO</h4>
		<div class="dark-purple">
			<form action="ativ5.php" method="post">
				1) Programa para calcular o consumo médio de combustível (variáveis estáticas)
				Exemplo: $litros=10; $km=15;
				<br>
				<?php
					echo '<p style="margin-left: 40px">Quilometros por Litro: ';
					$litros = $_POST['litros'];
					$km = $_POST['km'];
					$km_litro = $km/$litros;
					echo intval($km_litro).'</p>';
				?>
				<br>
				<br>

				2) COVID-19: Programa que estima quantos alunos podem ficar dentro de uma sala de aula. Para evitar o contato, é preciso respeitar distância mínima entre as cadeiras, de 1.0m a 1.5 m. Neste cenário, é necessário garantir pelo menos 2.25m2 por aluno. O usuário deve informar a largura e comprimento do local. Considere a área retangular.
				<br>
				<?php
					echo '<p style="margin-left: 40px">Quantidade máxima de alunos: ';
					$area = $_POST['largura']*$_POST['comprimento'];
					$qntd_alunos = $area/2.25;
					echo $qntd_alunos.'</p>';
				?>
				<br>
				<br>

				3) Faça um programa que calcule a área de um trapézio e o volume de uma pirâmide. Usar dados estáticos.
				<br>
				<?php
				echo '<p style="margin-left: 40px">Area do trapézio: ';
					$area_trapezio = ($_POST['B']+$_POST['b'])*$_POST['h']/2;
					echo $area_trapezio.'</p>';
				?>
				<br>
				<?php
					echo '<p style="margin-left: 40px">Volume pirâmide: ';
					$volume_piramide = $_POST['area_base']*$_POST['H']/3;
					echo $volume_piramide.'</p>';
				?>
				<br>
				<br>

				4) Programa para classificar um triângulo. Informe os tamanhos dos segmentos (a,b,c) e classifique de acordo com equilátero, isósceles e escaleno.
				<br>
				<?php
					$a = $_POST['ladoA'];
					$b = $_POST['ladoB'];
					$c = $_POST['ladoC'];

					if ( $a >= $b + $c or $b >= $a + $c or $c >= $a + $b) echo '<p style="margin-left: 40px">Não forma um triângulo</p>';
					else{
						echo '<p style="margin-left: 40px">Triângulo é ';
						if ( $a == $b and $b == $c ) echo 'equilátero';
						else if ( $a == $b or $a == $c or $b == $c) echo 'isósceles';
						else echo 'escaleno';
						echo '</p>';
					}
				?>

				<br>
				<br>

				5) Programa para calcular a série de Fibonacci: O termo estático e imprima a série.
				<br>
				<?php
				echo'<p style="margin-left: 40px">Série de Fibonacci:';
					$N = $_POST['N'];

					$x = 0;
					$y = 1;
					if ($N >= 1) echo $x.' ';
					if ($N >= 2) echo $y.' ';

					for ($i = 3; $i <= $N; $i++) {
						$aux = $y;
						$y = $x + $y;
						$x = $aux;

					    echo $y.' ';
					}
					echo '</p>';
				?>
			</form> 
		</div>
  	</body>
</html>
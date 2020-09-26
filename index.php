<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<title>Pagina Taller web 1</title>
</head>
<body>
	<div class="container">
		<div class="section">
			<div class="content">
				<form class='Form1' action="index.php" method="POST">
						<div class='ac1'>
						<p><label>Ingresa la operacion que quieres hacer: <input type="text" name="eleccion" list="listaNumeros"></label></p>

								<datalist id="listaNumeros">

									<label>O elige uno de la siguiente lista</label>

										<select name="Seleccionar">

											<option name='Suma'>Suma</option>

											<option name='Resta'>Resta</option>

											<option name='Multiplicacion'>Multiplicacion</option>

											<option name='Division'>Division</option>

										</select>

								  </label>

								</datalist>
								<br><br>
							<input type="number" placeholder='Numero:1' name='Num1'>
							<input type="number" placeholder='Numero:2' name='Num2'>
							<input type="submit" placeholder='Calcular' name='Btn1'>
							<input type="reset">
						</div>
				</form>
				<?php
					if(isset($_POST['Btn1'])){
						$Numero1=$_POST['Num1'];
						$Numero2=$_POST['Num2'];
						$total=0;

						$Seleccionar=$_POST['eleccion'];

						switch ($Seleccionar) {
							case 'Suma':
								$total = $Numero1+$Numero2;
								echo 'la suma de los numeros es de: ',$total;
								break;
							case 'Resta':
								$total = $Numero1-$Numero2;
								echo 'la Resta de los numeros es de: ',$total;
								break;
							case 'Multiplicacion':
								$total = $Numero1*$Numero2;
								echo 'la Multiplicacion de los numeros es de: ',$total;
								break;
							case 'Division':
								$total = $Numero1/$Numero2;
								echo 'la Division de los numeros es de: ',$total;
								break;
							default:
							}
					}
				?>


				<h2>EJERCICIO N°1</h2>
			</div>
		</div>

		<div class="section">
			<div class="content">

				<form action="index.php" method='POST'>
					<input type="text" placeholder='Peso' name='peso'>
					<input type="text" placeholder='Altura' name='Altura'>
					 <input type="submit" placeholder="enviar" name='Btn2'>
				</form>
				<?php
				if (isset($_POST['Btn2'])) {
					$pes=$_POST['peso'];
					$alt=$_POST['Altura'];
					$IMC=$pes/($alt*$alt);
					switch ($IMC) {
						case $IMC<18.5:
							echo('Peso insufuciente');
							break;
							case $IMC>18.5 && $IMC<24.9:
								echo('Normopeso');
								break;
								case $IMC>18.5 && $IMC<24.9:
									echo('Sobrepeso Grado I');
									break;
									case $IMC>25 && $IMC<26.9:
										echo('Sobrepeso grado II');
										break;
										case $IMC>27 && $IMC<29.9:
											echo('obecidad de tipo I');
											break;
											case $IMC>30 && $IMC<34.9:
												echo('Obesidad de tipo II');
												break;
												case $IMC>35 && $IMC<39.9:
													echo('Obesidad de tipo III (Morbida)');
													break;
													case $IMC>=50:
														echo('Obesidad tipo IV (Extrema)');
														break;
						default:
						}

				}
				?>
				<h2>EJERCICIO N°2</h2>
			</div>
		</div>

		<div class="section">
			<div class="content">
				<h2>EJERCICIO N°4</h2>
			</div>
		</div>
		<div class="section">
			<div class="content">
				<h2>EJERCICIO N°6</h2>
            </div>
        </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<footer>
	
	</footer>
</body>
</html>
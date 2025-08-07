<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<style>
	body{
		font-family: Arial, "sans-serif";
		background: linear-gradient(120deg, green, olive, darkgreen);
        padding: 20px;
	}
	.Formulario{
	  background-color: gray;
      padding: 20px;
      width: 300px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
	}
	input[type="number"], input[type="submit"]{
	  width: 93%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
	}
	input[type="submit"]{
      background-color: darkolivegreen;
      color: white;
      border: none;
      cursor: pointer;
	}
	.resultado{
	  margin-top: 15px;
      font-weight: bold;
      text-align: center;		
	}
	h1{
		background: linear-gradient(-150deg, aliceblue, gray);
		border-radius: 12px;
		border: 1px solid;
	}
</style>
<body>
	<h1 align="center">Edades</h1>
	<div class="Formulario">
		<form method="post">
			<Label>Ingrese la edad:</Label>
			<input type="number" name="numero" required>
			<input type="submit" value="Ver resultado">
		</form>	
		
		<div class="resultado">
			<?php
			if ($_SERVER['REQUEST_METHOD']== "POST") {
				$nota = intval($_POST['numero']);
				$resultado = "";
				
				switch (true) {
					case ($nota >= 1 && $nota <= 12):
						$resultado = "Niño";
						break;
					case ($nota >= 13 && $nota <= 17):
						$resultado = "Adolescente";
						break;
					case ($nota >= 18 && $nota <= 25):
						$resultado = "Joven";
						break;
					case ($nota >= 26 && $nota <= 50):
						$resultado = "Adulto";
						break;
					case ($nota > 50):
						$resultado = "Anciano";
						break;
				}
				echo $resultado;
			}
			?>		
		</div>
	</div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<style>
	body{
		font-family: Arial, "sans-serif";
		background: linear-gradient(120deg, beige, khaki);
        padding: 20px;
		color: 
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
      background-color: darkblue;
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
		background: linear-gradient(120deg, red, orange);
		border-radius: 12px;
		border: 1px solid;
	}
</style>
<body>
	<h1 align="center">Notas</h1>
	<div class="Formulario">
		<form method="post">
			<Label>Ingrese la nota:</Label>
			<input type="number" name="numero" required>
			<input type="submit" value="Ver resultado">
		</form>	
		
		<div class="resultado">
			<?php
			if ($_SERVER['REQUEST_METHOD']== "POST") {
				$nota = intval($_POST['numero']);
				$resultado = "";
				
				switch (true) {
					case ($nota >= 0 && $nota <= 4):
						$resultado = "Insuficiente";
						break;
					case ($nota == 5):
						$resultado = "Suficiente";
							break;
					case ($nota == 6):
						$resultado = "Bueno";
						break;
					case ($nota >= 7 && $nota <= 8):
						$resultado = "Notable";
						break;
					case ($nota >= 9 && $nota <= 10):
						$resultado = "Sobresaliente";
						break;
				}
				echo $resultado;
			}
			?>		
		</div>
	</div>
</body>
</html>
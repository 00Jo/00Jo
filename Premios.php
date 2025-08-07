<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Premios con Switch</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(-120deg, gray, darkgray, white);
      padding: 20px;
    }

    .formulario {
      background-color: white;
      padding: 20px;
      width: 300px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    input[type="number"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #28a745;
      color: white;
      border: none;
      cursor: pointer;
    }

    .resultado {
      margin-top: 15px;
      font-weight: bold;
      text-align: center;
    }
	  h1{
		  background: linear-gradient(120deg, skyblue, aqua);
		  border-radius: 14px;
		  border: 1px solid;
	  }
  </style>
</head>
<body>
	<h1 align="center">Premios</h1>

<div class="formulario">
  <form method="post">
    <label>Ingrese un número:</label>
    <input type="number" name="numero" required>
    <input type="submit" value="Ver Premio">
  </form>

  <div class="resultado">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);
        $premio = "";

        switch (true) {
          case ($numero >= 1 && $numero <= 5):
            $premio = "¡Ganaste Q. 100.00!";
            break;

          case ($numero == 6 || $numero == 8 || $numero == 10):
            $premio = "¡Ganaste Q. 250.00!";
            break;

          case ($numero >= 20 && $numero <= 30):
          case ($numero >= 50 && $numero <= 75):
            $premio = "¡Ganaste Q. 500.00!";
            break;

          default:
            $premio = "Gracias por participar.";
        }

        echo $premio;
      }
    ?>
  </div>
</div>

</body>
</html>

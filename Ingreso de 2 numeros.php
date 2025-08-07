<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Mayor y Menor</title>
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #01579b;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        button {
            margin-top: 15px;
            background-color: #0288d1;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #039be5;
        }

        .resultado {
            margin-top: 20px;
            background: #e1f5fe;
            color: #0277bd;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Comparar Dos Números</h2>
        <form method="post">
            <input type="number" name="n1" placeholder="Primer número" required>
            <input type="number" name="n2" placeholder="Segundo número" required>
            <button type="submit">Comparar</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                if ($n1 == $n2) {
                    echo "Ambos números son iguales: $n1.";
                } else {
                    $mayor = max($n1, $n2);
                    $menor = min($n1, $n2);
                    echo "Mayor: <strong>$mayor</strong><br>Menor: <strong>$menor</strong>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

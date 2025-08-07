<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Orden Ascendente</title>
    <style>
        body {
            background: linear-gradient(to right, #654ea3, #eaafc8);
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
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #6a1b9a;
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
            background-color: #6a1b9a;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #8e24aa;
        }

        .resultado {
            margin-top: 20px;
            background: #f3e5f5;
            color: #6a1b9a;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ordenar 3 Números</h2>
        <form method="post">
            <input type="number" name="n1" placeholder="Primer número" required>
            <input type="number" name="n2" placeholder="Segundo número" required>
            <input type="number" name="n3" placeholder="Tercer número" required>
            <button type="submit">Ordenar</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $n3 = $_POST["n3"];
                $numeros = [$n1, $n2, $n3];
                sort($numeros);
                echo "Orden ascendente: " . implode(" - ", $numeros);
            }
            ?>
        </div>
    </div>
</body>
</html>

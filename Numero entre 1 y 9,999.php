<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Contar Cifras</title>
    <style>
        body {
            background: radial-gradient(circle at center, #fceabb, #f8b500);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #ff6f00;
        }

        input[type="number"] {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
            font-size: 1em;
            margin-top: 10px;
        }

        button {
            margin-top: 15px;
            background: #ff6f00;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #ffa000;
        }

        .resultado {
            margin-top: 20px;
            background: #fff8e1;
            color: #ff6f00;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contador de Cifras</h2>
        <form method="post">
            <input type="number" name="numero" min="1" max="9999" placeholder="Entre 1 y 9999" required>
            <button type="submit">Contar cifras</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $num = intval($_POST["numero"]);
                if ($num >= 1 && $num <= 9999) {
                    $cifras = strlen((string)$num);
                    echo "El número <strong>$num</strong> tiene <strong>$cifras</strong> cifra" . ($cifras > 1 ? "s" : "") . ".";
                } else {
                    echo "El número debe estar entre 1 y 9999.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

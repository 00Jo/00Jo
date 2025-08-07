<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Tipo de Carácter</title>
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: #f0db4f;
        }

        input[type="text"] {
            padding: 10px;
            width: 60px;
            font-size: 1.2em;
            text-align: center;
            border-radius: 8px;
            border: none;
            margin-bottom: 15px;
        }

        button {
            background-color: #f0db4f;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #ffe873;
        }

        .resultado {
            margin-top: 20px;
            font-size: 1.2em;
            background-color: rgba(0,0,0,0.3);
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tipo de Carácter</h2>
        <form method="post">
            <input type="text" name="caracter" maxlength="1" required>
            <br>
            <button type="submit">Verificar</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $caracter = $_POST["caracter"];
                switch (true) {
                    case ctype_alpha($caracter):
                        echo "Es una <strong>letra</strong>.";
                        break;
                    case ctype_digit($caracter):
                        echo "Es un <strong>número</strong>.";
                        break;
                    default:
                        echo "Es un <strong>símbolo</strong>.";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

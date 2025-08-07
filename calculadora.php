<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Calculadora con Switch</title>
    <style>
        body {
            background: linear-gradient(to right, #1c1c1c, #383838);
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.08);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #00e5ff;
            margin-bottom: 20px;
        }

        input, select {
            padding: 10px;
            border: none;
            border-radius: 8px;
            margin: 10px 0;
            width: 100%;
            font-size: 1em;
            background-color: #e0f7fa;
        }

        button {
            background-color: #00e5ff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #4dd0e1;
        }

        .resultado {
            margin-top: 20px;
            background-color: rgba(0,0,0,0.3);
            padding: 15px;
            border-radius: 10px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora con Switch</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Primer número" required>
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" placeholder="Segundo número" required>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST["num1"];
                $b = $_POST["num2"];
                $op = $_POST["operador"];

                switch ($op) {
                    case '+':
                        echo "$a + $b = " . ($a + $b);
                        break;
                    case '-':
                        echo "$a - $b = " . ($a - $b);
                        break;
                    case '*':
                        echo "$a × $b = " . ($a * $b);
                        break;
                    case '/':
                        echo $b != 0 ? "$a ÷ $b = " . ($a / $b) : "Error: división por cero";
                        break;
                    default:
                        echo "Operador inválido.";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

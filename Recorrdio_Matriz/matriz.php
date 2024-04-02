<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        body {
            background-image: url(adam-chang-IWenq-4JHqo-unsplash.jpg);
            background-size: cover;
        }

        .contenido {
            display: grid;
            justify-content: center;
            text-align: center;
        }

        H1 {

            font-family: 'Tangerine', serif;
            text-shadow: 2px 2px 10px black;
            color: red;
            font-size: 50px;
        }

        p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
            color: aliceblue;
            font-size: 25px;
        }

        table tr td {
            border: solid 3px rgba(0, 225, 255, 0.845);
        }
    </style>
</head>

<body>

    <div class="contenido">
        <h1>Matriz Generada</h1>
        <p>Se marcaran los numeros primos</p>
        <?php
        if (count($_POST) > 0) {

            $filas = $_POST["filas"];
            $columnas = $_POST["columnas"];
            $numeros = 0;

            echo "<table>";
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    $numeros++;

                    if ($numeros == 1) {
                        $primo = "rgba(0, 0, 0, 0.679)"; 
                    } else {
                        $factorial = 1;
                        for ($k = 2; $k < $numeros; $k++) {
                            $factorial = ($factorial * $k) % $numeros;
                        }
                        $primo = (($factorial + 1) % $numeros == 0) ? "rgba(255, 0, 0, 0.467)" : "rgba(0, 0, 0, 0.679)";
                    }

                    echo '<td style="width: 60px; height: 60px; background-color:' . $primo . '">' . $numeros . '</td>';
                }
                echo "</tr>";
            }
            echo "</table>";
        }


        ?>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero Damas Vasquez O</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        body {
            background-image: url(./Chess\ Battle.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        #box {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #tabla {
            box-shadow: 0 0 50px 12px rgba(0, 0, 0, 0.904);
            border: solid 1px white;
        }

        p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 12px;
            color: white;
            text-align: center;
            margin-top: 5px;
        }

        #circulos {
            margin-left: 10%;
        }

        H1 {
            text-align: center;
            font-family: 'Tangerine', serif;
            text-shadow: 2px 2px 10px red;
            color: white;
            font-size: 90px;
        }
    </style>
</head>

<body>
    <!-- tablero -->
    <h1>Tablero de Damas</h1>
    <div id="box">
        <?php
        $a = 8;
        $b = 8; ?>
        <table id="tabla"><?php

                            for ($i = 0; $i < $a; $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < $b; $j++) {

                                    $color = ($i + $j) % 2 == 0 ? 'rgb(225, 213, 161)' : 'rgb(13, 44, 103)';

                                    echo "<td style='width: 83px; height: 83px; background-color: $color;'>";
                                    if (($i == 5 || $i == 4 || $i == 3) && ($i + $j) % 2 == 0) {
                                        echo "<div id='circulos' style='width: 63px; height: 63px; border-radius: 50%; background-color: rgba(255, 0, 0, 0.723); border: solid 2px white;'></div>";
                                    } elseif (($i == 2 || $i == 1 || $i == 0) && ($i + $j) % 2 == 0) {
                                        echo "<div id='circulos' style='width: 63px; height: 63px; border-radius: 50%; background-color: black; border: solid 2px white;'></div>";
                                    }
                                    echo "</td>";
                                }

                                echo   "</tr>";
                            }
                            ?>
        </table>
    </div>
    <p><i>Subtte Cab. Vasquez Ordoñez</i></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
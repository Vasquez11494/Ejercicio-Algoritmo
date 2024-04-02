        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <style>
                body {
                    background-image: url(./escalera.jpg);
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                #num {
                    text-align: center;
                    font-size: 30px;
                    border: solid 1px black;
                    box-shadow: 0px 0 12px white;
                }

                h1 {
                    text-align: center;
                    color: white;
                }

                #formulario {
                    background-color: rgba(80, 110, 66, 0.333);
                    border: solid 2px white;
                    padding: 5%;
                    text-align: center;
                    margin-top: 15%;
                }

                #resultado {
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                    text-align: center;
                    color: white;
                    font-size: 38px;
                }
            </style>
        </head>

        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6">
                        <?php
                        if (isset($_POST["cantidad"])) {

                            $cantidad = $_POST["cantidad"];
                            $numero = 0;
                            $suma_numeros = 0;
                            $multiplicacion_numeros = 1;
                            echo "<h1>ESCALERA DE " . $cantidad . " PISOS</h1><br>";
                        ?>

                            <table><?php

                                    for ($i = 1; $i <= $cantidad; $i++) {
                                        echo "<tr>";

                                        for ($j = $cantidad; $j >= 1; $j--) {

                                            if ($j <= $i) {
                                                $numero++;

                                                $suma_numeros += $numero;
                                                $multiplicacion_numeros *= $numero;
                                    ?>
                                            <td id="num" style="width: 75px; height: 75px; background-color: rgba(232, 99, 27, 0.87)"><?php echo $numero ?></td>
                                        <?php

                                            } else { ?>
                                            <td style="width: 75px; height: 75px;"></td>
                                <?php
                                            }
                                        }

                                        echo "</tr>";
                                    }

                                ?>
                            </table>
                    </div>
                    <div class="col-6">

                        <form action="#" method="post" id="formulario">
                            <h1>Seleccione Opcion para los numeros generados</h1><br>
                            <div>
                                <select name="opcion">
                                    <option value="1">SUMAR LOS NUMEROS</option>
                                    <option value="2">MULTIPLICAR LOS NUMEROS</option>
                                </select>
                                <input type="hidden" value="<?php echo $suma_numeros ?>" name="suma_numeros">
                                <input type="hidden" value="<?php echo $multiplicacion_numeros ?>" name="multiplicacion_numeros">
                            </div>
                            <div><br><button type="submit">REALIZAR</button></div>
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                </div>

                <?php
                if (isset($_POST["opcion"])) {

                    $suma_numeros = $_POST['suma_numeros'];
                    $multiplicacion_numeros = $_POST['multiplicacion_numeros'];
                    $opcion = $_POST['opcion'];


                    switch ($opcion) {

                        case '1':
                            echo "<div id='resultado'> La suma de los numeros generados en la escalera es de : " . $suma_numeros . "</div>";
                            break;
                        case "2":
                            echo "<div id='resultado'> La multipliacion de los numeros generados en la escalera es de : " . $multiplicacion_numeros . "</div>";
                            break;
                        default:
                            echo "OPCION NO VALIDA";
                    }
                }

                ?>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>

        </html>
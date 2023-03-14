<?php

require_once("./1_conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body
    {
        text-align: center;
        padding-left: 15%;
        padding-top: 3%;
    }

</style>
<body>
    <div class="container">
    <div class="row">
        <?php
        foreach ($result as $key => $value) 
        {
            echo('
            <div class="col-lg-4 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">'.$value["NombreProducto"].'</h5>
                        <h5 class="card-title"> ID: '.$value["IdProducto"].'</h5>
                        <h6 class="card-subtitle mb-2 text-muted">'.$value["CantidadPorUnidad"].'</h6>
                        <p class="card-text">'.$value["PrecioUnidad"].'€/u</p>
                        <p class="card-text">'.$value["UnidadesEnExistencia"].' Unidades disponibles</p>
                    </div>
                </div>
            </div>
            ');
        }
        ?>
        </div>
    </div>
    </div>
</body>
</html>
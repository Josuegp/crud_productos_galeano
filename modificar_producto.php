<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query(" select * from productos_crud where id=$id")

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">

        <h3 class="text-center text-secondary">Modificar productos</h3>
        <input type="hidden" name ="id" value ="<?= $_GET["id"]?>" >

        <?php

        include "controlador/modificar_producto.php";

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre productos</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero stock</label>
                <input type="text" class="form-control" name="stock" value="<?= $datos->nstock ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" value="<?= $datos->valor ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?= $datos->categoria ?>">
            </div>



        <?php }

        ?>


        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar producto</button>
    </form>
</body>

</html>
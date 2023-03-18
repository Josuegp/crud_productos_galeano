<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de productos parcial Galeano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7802fac11f.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">CRUD productos Josue Galeano</h1>
    <div class="container-fluid row">

        <!-- Aqui esta el codigo del formulario -->

        <form class="col-4 p-3" method="POST">

            <h3 class="text-center text-secondary">Registro de productos</h3>

            <?php
            include "modelo/conexion.php";
            include "controlador/registro_producto.php";

            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre productos</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero stock</label>
                <input type="text" class="form-control" name="stock">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <!-- Aquí ya comineza el codigo para tablas -->

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Numero stock</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Categoria</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select*from productos_crud");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>

                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->nstock ?></td>
                            <td><?= $datos->valor ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->categoria ?></td>
                            <td>
                                <a href="modificar_producto.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>

                        </tr>



                    <?php }
                    ?>


                </tbody>
            </table>



        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
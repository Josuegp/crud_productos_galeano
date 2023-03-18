<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["stock"]) and !empty($_POST["valor"]) and !empty($_POST["descripcion"]) and !empty($_POST["categoria"])) {
        $id=$_POST["id"];
        $nombre = $_POST["nombre"];
        $stock = $_POST["stock"];
        $valor = $_POST["valor"];
        $descripcion = $_POST["descripcion"];
        $categoria = $_POST["categoria"];
        $sql=$conexion->query(" update productos_crud set nombre='$nombre', nstock='$stock', valor='$valor', descripcion='$descripcion', categoria='$categoria' where id = $id");
        if ($sql==1) {
            header("location:index.php");

        }else{
            echo "<div class='alert alert-danger'>Error al modificar producto</div>";

        }

    } else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }


}


?>
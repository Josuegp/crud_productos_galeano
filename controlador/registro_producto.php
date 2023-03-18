<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["stock"]) and !empty($_POST["valor"]) and !empty($_POST["descripcion"]) and !empty($_POST["categoria"])) {
        
        $nombre=$_POST["nombre"];
        $stock=$_POST["stock"];
        $valor=$_POST["valor"];
        $descripcion=$_POST["descripcion"];
        $categoria=$_POST["categoria"];

        $sql=$conexion->query(" insert into productos_crud (nombre, nstock, valor, descripcion, categoria)values('$nombre', '$stock', '$valor', '$descripcion' , '$categoria')");
        if ($sql==1) {
            echo '<div class= "alert alert-success"> Producto registrado correctamente </div>' ;
        } else {
            echo '<div class= "alert alert-danger"> Error al registrar producto </div>' ;
        }
        

    }else{
        echo '<div class= "alert alert-warning"> Uno de los campos esta vacio </div>' ;
    }
}
?>
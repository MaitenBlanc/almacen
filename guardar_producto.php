<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];

$guardar = "INSERT INTO productos(nombre_producto, descripcion_producto, cantidad_producto) VALUES ('$nombre', '$descripcion', '$cantidad')";

$validacion = mysqli_query($conexion, $guardar);

if ($validacion) {
    header("location: pages/lista_productos.php");
} else {
    echo "Algo ha salido mal :(" . mysqli_error($conexion);
}

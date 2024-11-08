<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];

$peticion = "INSERT INTO empleados(nombre, edad, dni, telefono, cargo) VALUES ('$nombre', '$edad', '$dni', '$telefono', '$cargo')";

$validacion = mysqli_query($conexion, $peticion);

if ($validacion) {
    header('location: pages/registro_completado.php');
} else {
    echo "<a href='pages/nuevo_usuario.php'>Regresar al ingreso de datos</a>";
}
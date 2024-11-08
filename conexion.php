<?php

$conexion = mysqli_connect("localhost", "root", "admin", "almacen");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
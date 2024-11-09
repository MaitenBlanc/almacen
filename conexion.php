<?php

$conexion = mysqli_connect("localhost", "", "", "");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

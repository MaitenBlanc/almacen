<?php

include '../conexion.php';

$id = $_GET['id'];

$seleccion = "SELECT * FROM productos WHERE idproductos = '$id'";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/lista_productos.css">
    <title>Vista Producto</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include '../components/menu.php';
        ?>
    </div>

    <h2 class="title">Modificar producto: </h2>
    <div class="tabla">
        <form action="../actualizacion.php" method="post">
            <table class="table table-hover table-striped">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha de Registro</th>
                </tr>

                <?php
                $validacion = mysqli_query($conexion, $seleccion);

                while ($resultado = mysqli_fetch_array($validacion)) {
                ?>
                    <tr>
                        <td><input type="text" name='id' value="<?php echo $resultado['idproductos']; ?>" readonly></td>
                        <td><input type="text" name='nombre' value="<?php echo $resultado['nombre_producto']; ?>"></td>
                        <td><textarea type="text"
                                name='descripcion'><?php echo $resultado['descripcion_producto']; ?></textarea>
                        </td>
                        <td><input type="text" name='cantidad' value="<?php echo $resultado['cantidad_producto']; ?>"></td>
                        <td><input type="text" name='fecha' value="<?php echo $resultado['fecha_registro']; ?>"></td>

                    <?php
                }
                    ?>

                    </tr>
            </table>

            <div class="col-auto">
                <button class="btn bg-gradient" style="background-color: #b293cb; float: right">Guardar
                    Cambios</button>
            </div>
        </form>
    </div>
</body>

</html>
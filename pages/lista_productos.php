<?php
include '../conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/lista_productos.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Lista de Productos</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include '../components/menu.php';
        ?>
    </div>

    <h2 class="title">Productos: </h2>
    <div class="tabla">

        <table class="table table-hover table-striped">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha de Ingreso</th>
                <th scope="col">Editar</th>
            </tr>

            <?php
            $sql = "SELECT * FROM productos";
            $peticion = mysqli_query($conexion, $sql);

            while ($resultado = mysqli_fetch_array($peticion)) {
            ?>

                <tr>
                    <td><?php echo $resultado['idproductos']; ?></td>
                    <td><?php echo $resultado['nombre_producto']; ?></td>
                    <td><?php echo $resultado['descripcion_producto']; ?></td>
                    <td><?php echo $resultado['cantidad_producto']; ?></td>
                    <td><?php echo $resultado['fecha_registro']; ?></td>
                    <td><a href="../pages/unico.php?id=<?php echo $resultado['idproductos']; ?>"> Editar</a></td>
                <?php
            }
                ?>
                </tr>
        </table>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/nuevo_producto.css">
    <title>Nuevo Producto</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include '../components/menu.php';
        ?>
    </div>

    <div class="formulario">
        <form action="../guardar_producto.php" method="post">
            <h2 class="subtitulo">Crear un Nuevo Producto</h2>

            <div class="form-group">
                <label class="form-label mb-0 mt-3">Nombre del Producto: </label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del producto" name="nombre">

                <label class="form-label mb-0 mt-3">Cantidad: </label>
                <input type="text" class="form-control" placeholder="Ingresa la cantidad del producto" name="cantidad">

                <div class="mb-3">
                    <label class="form-label mb-0 mt-3">Descripción: </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Ingresa la descripción del producto" name="descripcion"></textarea>
                </div>

                <div class="col-auto" style="display: flex; justify-content: center;">
                    <button class="btn bg-gradient w-50" style="background-color: #b293cb;">Crear
                        Producto</button>
                </div>
        </form>
    </div>
</body>

</html>
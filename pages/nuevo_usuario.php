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
    <title>Nuevo Usuario</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include '../components/menu.php';
        ?>
    </div>

    <div class="formulario">
        <form action="../usuario.php" method="post">
            <h2 class="subtitulo">Ingresar un Nuevo Usuario</h2>

            <div class="form-group">
                <label class="form-label mb-0 mt-3">Nombre: </label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del empleado" name="nombre">

                <label class="form-label mb-0 mt-3">Edad: </label>
                <input type=" text" class="form-control" placeholder="Ingresa la edad del empleado" name="edad">

                <label class="form-label mb-0 mt-3">DNI: </label>
                <input type=" text" class="form-control" placeholder="Ingresa el DNI del empleado" name="dni">

                <label class="form-label mb-0 mt-3">Teléfono: </label>
                <input type=" text" class="form-control" placeholder="Ingresa el teléfono del empleado" name="telefono">

                <label class="form-label mb-0 mt-3">Cargo: </label>
                <input type=" text" class="form-control" placeholder="Ingresa el cargo del empleado" name="cargo">

                <div class="col-auto" style="display: flex; justify-content: center">
                    <button class="btn bg-gradient w-50 mt-3" style="background-color: #b393cb;">Crear
                        Usuario</button>
                </div>
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Nuevo Usuario</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include '../components/menu.php';
        ?>
    </div>

    <div class="carta">
        <h2 class="titulo"><i class="bi bi-check2-circle text-success"></i> Usuario registrado exitosamente.</h2>
        <a href="nuevo_usuario.php"><button class="btn bg-gradient w-50 mt-3" style="background-color: #b393cb;">Ingresa
                otro usuario</button></a>
        <a href="../index.php"><button class="btn bg-gradient w-50 mt-3" style="background-color: #b393cb;">Volver al
                inicio</button></a>
    </div>

</body>

</html>
<?php

define('base_url', '/almacen');

?>
<nav class="navbar navbar-expand-lg bg-gradient" style="background-color: #b293cb;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url ?>/index.php">Almacén</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url ?>/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='<?= base_url ?>/pages/nuevo_usuario.php'>Nuevo Usuario</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="<?= base_url ?>/pages/nuevo_producto.php">Nuevo Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url ?>/pages/lista_productos.php">Lista de Productos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
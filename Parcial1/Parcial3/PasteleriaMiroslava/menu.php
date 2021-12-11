<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-carrito.css">
    <title>Menú</title>
</head>

<body>
    <header>
        <h1>Menú</h1>
        <a href="carritoCompras.php" title="Ver carrito de compras">
            <img src="Img/carrito.jpg">
        </a>
    </header>
    <section>
        <?php
        require_once 'data/conexion.php';

        $query = "SELECT * FROM ` productos`";
        $result = mysqli_query($conexion, $query);

        while ($a = mysqli_fetch_array($result)) {
        ?>
            <div class="producto">
                <center>
                    <img src="Img/PastelesEspecialidades/<?php echo $a['imagen']; ?>"><br>
                    <span><?php echo $a['descripcion'] ?></span><br>
                    <a href="detalles.php?id=<?php echo $a['pastelID']; ?>">Ver detalles</a>
                </center>
            </div>
            
        <?php
        }
        ?>
    </section>
    <!-- <center><a href="menu.php">Volver al menu</a></center> -->
</body>

</html>
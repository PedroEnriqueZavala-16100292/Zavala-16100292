<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-carrito.css">
    <title>Detalles</title>
</head>

<body>
    <header>
        <h1>Detalles</h1>
        <a href="carritoCompras.php" title="Ver carrito de compras">
            <img src="Img/carrito.jpg">
        </a>
    </header>
    <section>
        <?php
        require_once 'data/conexion.php';

        $query = "SELECT * FROM ` productos` WHERE pastelID =" . $_GET['id'];
        $result = mysqli_query($conexion, $query);

        while ($a = mysqli_fetch_array($result)) {
        ?>

            <center>
                <img src="Img/PastelesEspecialidades/<?php echo $a['imagen']; ?>"><br>
                <span><?php echo $a['descripcion'] ?></span><br>
                <span><strong>Precio: <?php echo $a['precio'] ?></strong></span><br>
                <a href="carritoCompras.php?id=<?php echo $a['pastelID'];?>">Añadir al carrito</a>
            </center>

        <?php
        }
        ?>
    </section>
</body>

</html>
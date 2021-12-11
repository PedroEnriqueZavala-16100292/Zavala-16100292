<?php
session_start();
include 'data/conexion.php';
if (isset($_SESSION['carrito'])) {
    if (isset($_GET['id'])) {
        $arreglo = $_SESSION['carrito'];
        $encontro = false;
        $numero = 0;
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i]['ID'] == $_GET['id']) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
            $_SESSION['carrito'] = $arreglo;
        } else {
            $precio = 0.0;
            $imagen = "";
            $re = mysqli_query($conexion, "SELECT * FROM ` productos` WHERE pastelID=" . $_GET['id']);
            while ($f = mysqli_fetch_array($re)) {
                $precio = $f['precio'];
                $imagen = $f['imagen'];
            }
            $datosNuevos = array(
                'ID' => $_GET['id'],
                'Precio' => $precio,
                'Imagen' => $imagen,
                'Cantidad' => 1
            );

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito'] = $arreglo;
        }
    }
} else {
    if (isset($_GET['id'])) {
        $precio = 0.0;
        $imagen = "";
        $re = mysqli_query($conexion, "SELECT * FROM ` productos` WHERE pastelID=" . $_GET['id']);
        while ($f = mysqli_fetch_array($re)) {
            $precio = $f['precio'];
            $imagen = $f['imagen'];
        }
        $arreglo[] = array(
            'ID' => $_GET['id'],
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1
        );
        $_SESSION['carrito'] = $arreglo;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-carrito.css">
    <title>Carrito de compras</title>
</head>

<body>
    <header>
        <h1>Carrito de compras</h1>
        <a href="carritoCompras.php" title="Ver carrito de compras">
            <img src="Img/carrito.jpg">
        </a>
    </header>
    <section>
        <?php
        $total = 0.0;
        if (isset($_SESSION['carrito'])) {
            $datos = $_SESSION['carrito'];
            $total = 0.0;
            for ($i = 0; $i < count($datos); $i++) {
        ?>
                <div class="producto">
                    <center>
                        
                        <img src="Img/PastelesEspecialidades/<?php echo $datos[$i]['Imagen']; ?>" alt="foto"><br>
                        <span>Precio:<?php echo $datos[$i]['Precio']; ?></span><br>
                        <span>Cantidad: <input type="text" disabled value="<?php echo $datos[$i]['Cantidad']; ?>"></span>
                        <span>SubTotal: <?php echo $datos[$i]['Cantidad'] * $datos[$i]['Precio']; ?></span>
                    </center>
                </div>
        <?php
                $total = ($datos[$i]['Cantidad'] * $datos[$i]['Precio']) + $total;
            }
        } else {
            echo '<center><h2>El carrito de compras está vacio</h2></center>';
        }
        echo '<center><h2>Total: ' . $total . '</h2></center>';
        ?>
        <center><a href="menu.php">Ver catálogo</a></center>

        <center><form action="realizarOrden.php" method="POST"><a href="realizarOrden.php">Ordenar</a></form></center>
    </section>
</body>

</html>
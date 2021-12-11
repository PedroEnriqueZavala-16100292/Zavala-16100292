<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-principal.css">

    <title>Miroslava</title>
</head>

<body>
    <?php
    session_start();
    $email = $_SESSION['username'];
    if (!isset($email)) {
        header("Location: login.php");
    }else{
        echo "<script> alert('Bienvenido $email'); </script>";
    }
    ?>
    <div id="app">
        <header>
            <menu-header></menu-header>
        </header>
    </div>
    <main id="carrucel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Img/ImagenesCarrucel/principal.jpg" class="d-block w-100" alt="ImagenPrincipal">
                </div>
                <div class="carousel-item">
                    <img src="Img/ImagenesCarrucel/principal2.jpg" class="d-block w-100" alt="ImagenPrincipal3">
                </div>
                <div class="carousel-item">
                    <img src="Img/ImagenesCarrucel/principal3.jpg" class="d-block w-100" alt="ImagenPrincipal2">
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="pb-4" class="pt-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg">
                    <h6>(867)1922855</h6>
                </div>
                <div class="col-12 col-lg">
                    <h6>Mirislava@gmail.com</h6>
                </div>
                <div class="col-12 col-lg">
                    <h6>Todo lo que buscas</h6>
                </div>
                <div class="col-12 col-lg">
                    <h6>Calle Revolución #6525 Col. Buena Vista</h6>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="Js/app.js"></script>
</body>

</html>
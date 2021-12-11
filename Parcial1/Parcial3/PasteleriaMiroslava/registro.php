<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-registrarse.css">
    <title>Regístrate</title>
</head>

<body>
    <div id="app">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col col-md-8 offset-md-2">
                    <h1>CREAR CUENTA</h1>
                    <form action="realizarRegistro.php" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" tabindex="1" required>
                                <br>
                                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" tabindex="3" required>
                                <br> 
                                <input type="text" name="email" class="form-control" placeholder="Correo Electronico" tabindex="5" required>
                            </div>
                            <div class="col">
                                <input type="text" name="apellido" class="form-control" placeholder="Apellido" tabindex="2" required>
                                <br>
                                <input type="text" name="codpostal" class="form-control" placeholder="Código Postal" tabindex="4" required>
                                <br>
                                <input type="password" name="pass" class="form-control" placeholder="Contraseña" tabindex="6" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block" value="Registrarse" tabindex="7">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        a{
            color: white;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="Js/app.js"></script>
</body>

</html>
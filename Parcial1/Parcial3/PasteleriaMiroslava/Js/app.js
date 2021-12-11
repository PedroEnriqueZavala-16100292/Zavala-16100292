Vue.component('menu-header', {
  template: `
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="Img/logo.jpg" alt="logo" width="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="menu.php">Hacer Pedido</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="eliminarCuenta.php" >Eliminar Cuenta</a>
                </li>
            </ul>
            
            <a href="cerrarSecion.php" id="registrarse">Cerrar Sesión</a>
        </div>
    </nav>
     `,
});

new Vue({
  el: "#app",
  data() {
    return {
      
    };
  },
});

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            Cornellà de Llobregat
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navegacion">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="debates.php">debates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chats.php">chats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="denuncias.php">denuncias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="intercambios.php">intercambios</a>
                </li>
                <?php
                    include 'funciones.php';
                    if(estaLogueado()) {
                        require 'menuConfiguracionUsuario.php';
                    } else {
                        require 'menuLogin.php';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>

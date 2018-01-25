<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../style/generic.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
    crossorigin="anonymous"></script>
    <title>Ayuntamiento Cornellá de Llobregat</title>

    <script>
        $(document).ready(function () {
            $('.producto').click(function() {
                if ($(this).children().length == 1) {
                    $(this).append('<p class="botonEmail">Póngase en contacto</p>')
                } else {
                    $(this).children().last().remove();
                }
            })
        });
    </script>
</head>

<body>

    <?php
    require '../php/cabecera.php';
    ?>

    <div class="container">
        <div id="intercambios" class="caja">
            <h5>Realizar búsqueda de objetos</h5>

            <div class="row">

                <div class="input-group mb-5 col-md-6">
                    <select class="custom-select">
                        <option selected>Categoría</option>
                        <option value="1">Tecnología</option>
                        <option value="2">Deportes</option>
                        <option value="3">Mobiliario</option>
                        <option value="4">...</option>
                    </select>
                </div>

              <div class="form-group col-md-6">
                <div id="buscar" class="input-group">
                    <input id="filtrar" type="text" class="filtrar form-control" placeholder="Introduce el producto">
                    <div class="input-group-append">
                        <span class="enviar input-group-text" id="basic-addon2">Buscar</span>
                    </div>
                </div>
            </div>

        </div>

        <h5>Productos</h5>

        <div class="producto">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="../img/ps4.jpg" class="rounded" alt="Play Station 4">
                    </div>
                </div>
                <div class="col-md-9">
                    <h6 class="tituloProducto">Play Station 4<span class="infoProducto">300 € - C/ Bonavista</span></h6>
                    <p class="descripcionProducto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio.</p>
                </div>
            </div>
        </div>

        <div class="producto">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="../img/horno.jpg" class="rounded" alt="Play Station 4">
                    </div>
                </div>
                <div class="col-md-9">
                    <h6 class="tituloProducto">Horno de cocina<span class="infoProducto">420 € - C/ Bonavista</span></h6>
                    <p class="descripcionProducto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio.</p>
                </div>
            </div>
        </div>  

        <div class="producto">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="../img/nike.jpg" class="rounded" alt="Play Station 4">
                    </div>
                </div>
                <div class="col-md-9">
                    <h6 class="tituloProducto">Bambas Nike en perfecto estado<span class="infoProducto">70 € - C/ Mallorca</span></h6>
                    <p class="descripcionProducto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero a mi pretium facilisis. Aenean iaculis, nisi lobortis iaculis venenatis, erat elit blandit tortor, at interdum metus ligula at odio.</p>
                </div>
            </div>
        </div>  

    </div>
</div>
</div>

</body>

</html>
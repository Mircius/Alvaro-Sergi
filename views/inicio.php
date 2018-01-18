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
            $('#imagenPortada').outerHeight($('#noticias').outerHeight());
            var imagenPortada = $('#imagenPortada');
            var backgrounds = [
                'url(../img/people.jpg)',
                'url(../img/people2.jpg)',
                'url(../img/people3.jpg'];
            var current = 0;

            function nextBackground() {
                imagenPortada.css(
                    'background-image',
                    backgrounds[current = ++current % backgrounds.length]);

                setTimeout(nextBackground, 5000);
            }
            setTimeout(nextBackground, 5000);
            imagenPortada.css('background-image', backgrounds[0]);
        });
    </script>
</head>

<body>

    <?php
        require '../php/cabecera.php';
    ?>

        <div class="container">
            <div id="inicioSuperior" class="row">
                <div class="col-md-8">
                    <div id="imagenPortada" class="caja apartadoInicio">

                    </div>
                </div>
                <div class="col-md-4">
                    <div id="noticias" class="caja apartadoInicio">
                        <h5 class="tituloApartado">Últimas noticias</h5>
                        <h6>Título noticia 1</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit amtet Lorem ipsum sit amtet lorem ipsum...</p>
                        <h6>Título noticia 2</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit...</p>
                        <h6>Título noticia 3</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit amtet Lorem ipsum sit ...</p>
                    </div>
                </div>
            </div>
            <div id="inicioInferior" class="row">
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Debates</h5>
                        <div class="circulo"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Denuncias</h5>
                        <div class="circulo"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Intercambios</h5>
                        <div class="circulo"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
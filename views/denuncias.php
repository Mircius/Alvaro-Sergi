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
            $('input[value=Enviar]').click(function () {
                $('form')[0].reset();
                $('form').before(
                    '<div class="col-md-12 alert alert-success alert-dismissable">' +
                    '<button type="button" class="close" ' +
                    'data-dismiss="alert" aria-hidden="true">' +
                    '&times;' +
                    '</button>' +
                    'La denuncia se ha tramitado correctamente. Gracias.' +
                    '</div>');
            });
        });
    </script>
</head>

<body>

    <?php
        require '../php/cabecera.php';
    ?>

        <div class="container">
            <div id="denuncias" class="caja">
                <h5>Realizar una denuncia</h3>
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea class="descripcion form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-body">
                            <div id="adjuntarArchivo">
                                <label>Adjuntar archivo</label>
                                <div class="form-group">
                                    <div class="form-control custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Selecciona el archivo</label>
                                    </div>
                                </div>
                            </div>
                            <label>O arrástrelo</label>
                            <div class="upload-drop-zone" id="drop-zone">
                                Arrastre su archivo aquí
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 js-upload-finished">
                        <label>Archivos adjuntos</label>
                        <div class="list-group">
                            <a class="list-group-item">
                                <span class="badge alert-success pull-right">jpg</span> imagen1</a>
                            <a class="list-group-item">
                                <span class="badge alert-success pull-right">png</span> imagen2</a>
                        </div>
                        <input class="btn btn-100" type="button" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

</body>

</html>
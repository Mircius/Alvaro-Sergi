<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
<script>
    $(function () {
        $('#tagsInput').keyup(anadirTag);
        $('#tagsInput').blur(anadirTag);
        $('input[value=Crear]').click(function () {
            $('form')[0].reset();
            $('form').before(
                '<div class="col-md-12 alert alert-success alert-dismissable">' +
                '<button type="button" class="close" ' +
                'data-dismiss="alert" aria-hidden="true">' +
                '&times;' +
                '</button>' +
                'El chat se ha creado correctamente.' +
                '</div>');
        });
    });

    function anadirTag() {
        var string = $('#tagsInput').val();
        var ultimoCar = string.substr(string.length - 1);
        var tagsSeparados = string.split(',');
        $('#tags').empty();
        for (i = 0; i < tagsSeparados.length; i++) {
            tag = tagsSeparados[i];
            if (tag != "") {
                $('#tags').append('<p class="tag">' + tag + '</p>');
            }
        }
    }
</script>
<div class="container">
    <div class="row">
        <div id="cabeceraChat" class="col-12">
            <h5>Crear nuevo chat</h5>
        </div>
    </div>
    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Título</label>
            <input type="text" class="form-control" placeholder="Introduzca el título">
        </div>
        <div class="form-group">
            <label for="tagsInput">Descripción</label>
            <textarea type="textarea" class="form-control" placeholder="Describa la finalidad del grupo" rows=5></textarea>
        </div>
        <div class="form-group">
            <label for="tagsInput">Etiquetas</label>
            <input type="text" class="form-control" id="tagsInput" placeholder="Separadas por comas ','">
            <div id="tags">

            </div>
        </div>
        <input id="crearChat" class="btn btn-100" type="button" value="Crear">
    </form>
</div>
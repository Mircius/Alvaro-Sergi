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
        $(function() {
            $('.enviar').click(enviarMensaje);
            bajarScrollChat();
        })
    
        function enviarMensaje() {
            var numChat = ($('div.active').attr('id').replace('v-pills-',''));
            var ultimoMensaje = $('#ventanaChat'+numChat+' .mensaje').last().parent();
            var mensaje = $('#mensaje'+numChat).val();
            ultimoMensaje.after($('<div class="row"><div class="offset-3 col-8 mensaje mensajeEnviado">'+mensaje+'</div><div class="col-1"><div class="circulo"></div></div></div>'));
            $('#mensaje'+numChat).val("");
            bajarScrollChat();
        }
    
        function bajarScrollChat() {
            for (var i=0; i<$('.ventanaChat').length; i++) {
                $('.ventanaChat')[i].scrollTop = $('.ventanaChat')[i].scrollHeight;
            }  
        }
    </script>
</head>

<body>

    <?php
    require '../php/cabecera.php';
    ?>

    <div class="container">
      <div class="container">
        <div id="chats" class="row caja">
            <div id="chatsDisponibles" class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">Chat 1</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-profile" aria-selected="false">Chat 2</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chat 3</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-settings" aria-selected="false">Chat 4</a>
              <div class="dropdown-divider"></div>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">Crear nuevo chat</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-settings" aria-selected="false">Unirse a un chat</a>
          </div>
          <div id="contenidoChat" class="col-md-9 tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php require '../php/chats/chats1.php' ?></div>
              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab"><?php require '../php/chats/chats2.php' ?></div>
              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-messages-tab"><?php require '../php/chats/chats3.php' ?></div>
              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-settings-tab"><?php require '../php/chats/chats4.php' ?></div>
              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-settings-tab"><?php require '../php/chats/crearChat.php' ?></div>
              <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-settings-tab"><?php require '../php/chats/unirseChat.php' ?></div>
          </div>
      </div>
    </div>
  </div>

</body>

</html>
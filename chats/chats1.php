<script type="text/javascript">
	$(function() {
		$('#enviar').click(enviarMensaje);
		bajarScrollChat();
	})

	function enviarMensaje() {
		var ultimoMensaje = $('.mensaje').last().parent();
		var mensaje = $('#mensaje').val();
		ultimoMensaje.after($('<div class="row"><div class="offset-3 col-8 mensaje mensajeEnviado">'+mensaje+'</div><div class="col-1"><div class="circulo"></div></div></div>'));
		$('#mensaje').val("");
		bajarScrollChat();
	}

	function bajarScrollChat() {
		$("#ventanaChat")[0].scrollTop = $("#ventanaChat")[0].scrollHeight;
	}

</script>

<div class="container">
	<div class="row">
		<div id="cabeceraChat" class="col-12">
			<h5>Chat 1</h5>
			<h6>12 integrantes</h6>
		</div>
	</div>
	<div id="ventanaChat">
		<div class="container">
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
			</div>
			<div class="row">
				<div class="offset-3 col-8 mensaje mensajeEnviado">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-1">
					<div class="circulo"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="inputMensaje">
		<div class="row">
			<div class="input-group mb-3">
				<input id="mensaje" type="text" class="form-control" placeholder="Introduce tu mensaje" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span id="enviar" class="input-group-text" id="basic-addon2">Enviar</span>
				</div>
			</div>
		</div>
	</div>

</div>
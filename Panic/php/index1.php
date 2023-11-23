<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="/css/index.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="element">
      <div class="div">
	  <form>
	  <input type="hidden"  id="txt_celular" value="7351832696">
	  <input type="hidden" id="txt_documento" value="Violencia familiar en la comunidad, por favor ayuda a tu vecino">
        <button class="group" id="btn_notificar">
          <div class="overlap-group-wrapper">
            <div class="overlap-group">
              <div class="text-wrapper">Violencia familiar</div>
              <img class="img" src="/img/5a461410d099a2ad03f9c998 1.png" />
            </div>
          </div>
		</button>
</form>
        <div class="group-wrapper">
          <div class="div-wrapper">
            <button class="overlap-group-2" onclick = "window.location.href='envia.php';"><div class="text-wrapper-2">Acceder</div></button>
          </div>
        </div>
        <div class="overlap-wrapper">
          <div class="overlap">

		  <form>
		  <input type="hidden" id="txt_celular" value="7351832696">
		  <input type="hidden" id="txt_documento" value="Ataque armado en la comunidad, ayuda  tu vecino si puedes, o manten tu seguridad ">
            <button class="group-2" id="btnataque">
              <div class="overlap-group-3">
                <div class="rectangle"></div>
                <div class="text-wrapper-3">Ataque armado</div>
              </div>
			</button>
</form>

            <img class="img-2" src="/img/ec994dc7d687a6bc65ba71ddce6a5e9e-arma-de-silueta-de-pistola 1.png" />
          </div>
		</div>

		<form>
		  <input type="hidden" id="txt_celular" value="7351832696">
		  <input type="hidden" id="txt_documento" value="Vehiculo sospechoso, ten cuidado">
        <button class="group-3" id="btnvehiculo">
          <div class="overlap-2">
            <div class="group-4">
              <div class="overlap-group-4"><div class="veh-culo-sospechoso">Vehículo&nbsp;&nbsp; sospechoso</div></div>
            </div>
            <img class="img-3" src="/img/6c5e852026e7fd11f79cf45a65299016-silueta-de-vista-lateral-de-coche-suv 1.png" />
          </div>
		</button>
</form>

<form>
		  <input type="hidden" id="txt_celular" value="7351832696">
		  <input type="hidden" id="txt_documento" value="Esta ocurriendo un robo en la comunidad">
        <button class="group-5" id="btnrobo">
          <div class="overlap-2">
            <div class="group-4">
              <div class="overlap-group-4"><div class="text-wrapper-4">Robo</div></div>
            </div>
            <img class="image" src="/img/image 111.png" />
          </div>
		</button>
</form>

<form>
		  <input type="hidden" id="txt_celular" value="7351832696">
		  <input type="hidden" id="txt_documento" value="valor_del_documento">
        <button class="group-6" id="btnpelea">
          <div class="overlap-2">
            <div class="group-4">
              <div class="overlap-group"><div class="text-wrapper-5">Peleas o Accidentes</div></div>
            </div>
            <img class="image-2" src="/img/image 2.png" />
          </div>
		</button>
</form>
        <div class="overlap-3">
          <div class="rectangle-2"></div>
          <div class="xdddd-wrapper"><img class="xdddd" src="/img/Group 13.png" /></div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var token = "GA231123121527";
            var api = "https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";

            $("#btn_notificar").click(function() {
                var payload = {
                    "op": "registermessage",
                    "token_qr": token,
                    "mensajes": [
                        {"numero": $("#txt_celular").val(), "mensaje": "*"+$("#txt_documento").val()+"+ubucacion*"}
                        // Puedes agregar más mensajes según sea necesario
                    ]
                };

                $.ajax({
                    url: api,
                    jsonp: "callback",
                    method: 'POST',
                    data: JSON.stringify(payload),
                    async: false,
                    success: function(respuestaSolicitud) {
                        alert(respuestaSolicitud.message);
                    }
                });
            });
        });
    </script>
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var token = "GA231123121527";
            var api = "https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";

            $("#btnataque").click(function() {
                var payload = {
                    "op": "registermessage",
                    "token_qr": token,
                    "mensajes": [
                        {"numero": $("#txt_celular").val(), "mensaje": "*"+$("#txt_documento").val()+"+ubucacion*"}
                        // Puedes agregar más mensajes según sea necesario
                    ]
                };

                $.ajax({
                    url: api,
                    jsonp: "callback",
                    method: 'POST',
                    data: JSON.stringify(payload),
                    async: false,
                    success: function(respuestaSolicitud) {
                        alert(respuestaSolicitud.message);
                    }
                });
            });
        });
    </script>
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var token = "GA231123121527";
            var api = "https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";

            $("#btnvehiculo").click(function() {
                var payload = {
                    "op": "registermessage",
                    "token_qr": token,
                    "mensajes": [
                        {"numero": $("#txt_celular").val(), "mensaje": "*"+$("#txt_documento").val()+"+ubucacion*"}
                        // Puedes agregar más mensajes según sea necesario
                    ]
                };

                $.ajax({
                    url: api,
                    jsonp: "callback",
                    method: 'POST',
                    data: JSON.stringify(payload),
                    async: false,
                    success: function(respuestaSolicitud) {
                        alert(respuestaSolicitud.message);
                    }
                });
            });
        });
    </script>
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var token = "GA231123121527";
            var api = "https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";

            $("#btnrobo").click(function() {
                var payload = {
                    "op": "registermessage",
                    "token_qr": token,
                    "mensajes": [
                        {"numero": $("#txt_celular").val(), "mensaje": "*"+$("#txt_documento").val()+"+ubucacion*"}
                        // Puedes agregar más mensajes según sea necesario
                    ]
                };

                $.ajax({
                    url: api,
                    jsonp: "callback",
                    method: 'POST',
                    data: JSON.stringify(payload),
                    async: false,
                    success: function(respuestaSolicitud) {
                        alert(respuestaSolicitud.message);
                    }
                });
            });
        });
    </script>
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var token = "GA231123121527";
            var api = "https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";

            $("#btnpelea").click(function() {
                var payload = {
                    "op": "registermessage",
                    "token_qr": token,
                    "mensajes": [
                        {"numero": $("#txt_celular").val(), "mensaje": "*"+$("#txt_documento").val()+"+ubucacion*"}
                        // Puedes agregar más mensajes según sea necesario
                    ]
                };

                $.ajax({
                    url: api,
                    jsonp: "callback",
                    method: 'POST',
                    data: JSON.stringify(payload),
                    async: false,
                    success: function(respuestaSolicitud) {
                        alert(respuestaSolicitud.message);
                    }
                });
            });
        });
    </script>
  </body>
</html>
<div id="miModal" class="modal">
        <!-- Contenido del modal -->
            <div class="modal-content">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <!-- Aquí puedes colocar tu formulario -->
                <h2>Ingresa el codigo de tu comunidad</h2>
                <form action="envia.php" name="registra" method="post" enctype="multipart/form-data">
                <!-- Agrega tus campos de formulario aquí -->
                    <input required class="a" type="numb" id="num" name="num" placeholder="Numero de tu Comunidad"><br><br>
                    <input class="btenvio" type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <script>
        // Función para abrir el modal
        function abrirModal() {
            document.getElementById("miModal").style.display = "block";
        }
        // Función para cerrar el modal
        function cerrarModal() {
            document.getElementById("miModal").style.display = "none";
        }
        </script>
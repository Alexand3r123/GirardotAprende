<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bracket.css">
    <link rel="stylesheet" href="css/stylos.css">
    <link rel="shortcut icon" href="models/escudo.png" type="image/x-icon">
    <title>Ingreso Usuarios</title>
  </head>
  <style>
body {
  background: rgb(62,157,20);
  background: linear-gradient(0deg, rgba(62,157,20,0.9836309523809523) 0%, rgba(0,0,0,1) 100%);
}
  </style>
  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <form action="" method="post">
        <div class="login-wrapper wd-500 wd-xs-350 pd-50 pd-xs-40 bg-white rounded shadow-base">
          <!-- Capturando mensaje de error -->
          <?php
            if (isset($_GET["m"])){
              switch($_GET["m"]){
                case "1";
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong class="d-block d-sm-inline-block-force">Error!</strong> Datos Incorrectos
                    </div>
                  <?php
                break;

                case "2";
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios
                    </div>
                  <?php
                break;
              }
            }
          ?>

          <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">I.E ATANASIO <span class="text-success">GIRARDOT</span></div>
          <div class="escudo-login"><img src="models/escudo.png" alt=""></div>

          <div class="tx-center mg-b-30">Certificados y Diplomas</div>

          <div class="form-group">
              <input type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="Ingrese Correo Electronico">
          </div>
          <div class="form-group">
              <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Ingrese Contraseña">
          </div>
          <input type="hidden" name="enviar" class="form-control" value="si">
          <button type="submit" class="btn btn-info btn-block bg-success text-white">Acceder</button>
        </div>
      </form>
    </div>

    <script src="public/lib/jquery/jquery.js"></script>
    <script src="public/lib/popper.js/popper.js"></script>
    <script src="public/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
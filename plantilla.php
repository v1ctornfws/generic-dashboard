<?php
session_start();
  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    echo '<div class="wrapper">';
    include "vistas/modulos/encabezado.php";
    include "vistas/modulos/menulateral.php";
    if (isset($_GET["pagina"])) {
      $pagina = $_GET["pagina"];

      if (
        $pagina == "inicio" ||
        $pagina == "archivos" ||
        $pagina == "usuarios" ||
        $pagina == "proyectos" ||
        $pagina == "clientes" ||
        $pagina == "productos" ||
        $pagina == "ventas" ||
        $pagina == "reportes" ||
        $pagina == "salir"
      ) {
        include "vistas/modulos/" . $pagina . ".php";
      } else {
        include "vistas/modulos/error404.php";
      }
    } else {
      include "vistas/modulos/inicio.php";
    }
    include "vistas/modulos/piedepagina.php";
    echo '</div>';
  } else {
    include "vistas/modulos/login.php";
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSS... -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <script src="https://kit.fontawesome.com/a3a749bde6.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- PLUGINS DE JAVASCRIPT -->
  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<!-- CUERPO DEL DOCUMENTO -->

<body class="login-page hold-transition skin-blue sidebar-mini"> <!-- sidebar-collapse -->
  
</body>

</html>
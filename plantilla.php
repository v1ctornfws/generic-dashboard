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
  <title>Generic Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a3a749bde6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body class="login-page hold-transition skin-blue sidebar-mini">

</body>

</html>
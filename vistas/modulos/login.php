<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'controladores/conexion.php';

$loginError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = trim($_POST['txtEmail'] ?? '');
    $password = $_POST['txtPassword'] ?? '';

    if (empty($email) || empty($password)) {
        $loginError = 'Correo y contraseña son obligatorios.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $loginError = 'El correo no tiene un formato válido.';
    } else {
        $emailEsc = $conexion->real_escape_string($email);
        $sql = "SELECT * FROM usuarios WHERE correo = '$emailEsc' LIMIT 1";
        $resultado = $conexion->query($sql);

        if ($resultado && $resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($password, $usuario['password']) || $password === $usuario['password']) {
                $_SESSION['iniciarSesion'] = 'ok';
                $_SESSION['id_usuario'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                header('Location: index.php');
                exit;
            } else {
                $loginError = 'Credenciales incorrectas.';
            }
        } else {
            $loginError = 'Usuario no encontrado.';
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row vertical-offset-100">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="text-center" style="margin: 40px 0 20px;">
          <img src="vistas/img/logo.png" alt="Logo" class="img-responsive center-block" style="max-height:110px;">
        </div>

        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3 class="panel-title" style="margin:0;">Iniciar sesión</h3>
          </div>
          <div class="panel-body">
            <form method="post" id="loginForm" autocomplete="off" novalidate>
              <div class="form-group">
                <label for="txtEmail">Correo</label>
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" required
                  value="<?php echo htmlspecialchars($_POST['txtEmail'] ?? '', ENT_QUOTES); ?>">
              </div>

              <div class="form-group">
                <label for="txtPassword">Contraseña</label>
                <input type="password" class="form-control" name="txtPassword" id="txtPassword" required>
              </div>

              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="login">Ingresar</button>
                <a href="registro.php" class="btn btn-success">Registrarse</a>
              </div>

              <?php if ($loginError): ?>
                <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($loginError, ENT_QUOTES); ?>
                </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    (function ($) {
      $(function () {
        $('#loginForm').on('submit', function (e) {
          var em = $.trim($('#txtEmail').val());
          var pw = $('#txtPassword').val();
          var err = '';

          if (!em || !pw) {
            err = 'Correo y contraseña son obligatorios.';
          } else {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!re.test(em)) {
              err = 'Formato de correo inválido.';
            }
          }

          if (err) {
            e.preventDefault();
            // mostrar alerta bootstrap
            var $existing = $(this).find('.alert-danger');
            if ($existing.length) {
              $existing.text(err).show();
            } else {
              $('<div class="alert alert-danger" role="alert"></div>').text(err).insertAfter($(this).find('.form-group').last());
            }
            return false;
          }
        });
      });
    })(jQuery);
  </script>
</body>

</html>
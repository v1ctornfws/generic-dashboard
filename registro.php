<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'controladores/conexion.php';

$registroError = '';
$registroExito = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // Sanitización básica
    $nombre = trim($_POST['txtNombre'] ?? '');
    $usuario = strtolower(trim($_POST['txtUsuario'] ?? ''));
    $correo = strtolower(trim($_POST['txtEmail'] ?? ''));
    $password = $_POST['txtPassword'] ?? '';

    // Validaciones
    if (empty($nombre) || empty($usuario) || empty($correo) || empty($password)) {
        $registroError = 'Todos los campos son obligatorios.';
    }
    // Validar formato de nombre (primera letra mayúscula de cada palabra)
    elseif (!preg_match('/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+(\s[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+)*$/', $nombre)) {
        $registroError = 'El nombre debe iniciar con mayúscula (Ejemplo: Juan Perez).';
    }
    // Validar usuario (minúsculas, sin espacios)
    elseif (!preg_match('/^[a-z][a-z0-9]{2,29}$/', $usuario)) {
        $registroError = 'El usuario debe estar en minúsculas, sin espacios (Ejemplo: sbarrera).';
    }
    // Validar correo
    elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $registroError = 'El correo no tiene un formato válido.';
    }
    // Validar contraseña
    elseif (strlen($password) < 8) {
        $registroError = 'La contraseña debe tener al menos 8 caracteres.';
    } else {
        // Preparar consulta para verificar duplicados
        $stmt = $conexion->prepare("SELECT id_usuario FROM usuarios WHERE usuario = ? OR correo = ?");
        if ($stmt) {
            $stmt->bind_param("ss", $usuario, $correo);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $registroError = 'El usuario o correo ya están registrados.';
            } else {
                // Hash de contraseña y registro
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt->close();

                $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, usuario, correo, password) VALUES (?, ?, ?, ?)");
                if ($stmt) {
                    $stmt->bind_param("ssss", $nombre, $usuario, $correo, $hash);
                    if ($stmt->execute()) {
                        $registroExito = 'Registro exitoso. Redirigiendo...';
                        header("refresh:2;url=index.php");
                    } else {
                        $registroError = 'Error al crear el usuario.';
                    }
                    $stmt->close();
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="text-center" style="margin: 40px 0 20px;">
                    <img src="vistas/img/logo.png" alt="Logo" class="img-responsive center-block"
                        style="max-height:110px;">
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">Registro de Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="registroForm" autocomplete="off" novalidate>
                            <div class="form-group">
                                <label for="txtNombre">Nombre Completo</label>
                                <input type="text" class="form-control" name="txtNombre" id="txtNombre"
                                    placeholder="Ejemplo: Juan Perez" required
                                    value="<?php echo htmlspecialchars($_POST['txtNombre'] ?? ''); ?>">
                            </div>

                            <div class="form-group">
                                <label for="txtUsuario">Usuario</label>
                                <input type="text" class="form-control" name="txtUsuario" id="txtUsuario"
                                    placeholder="Ejemplo: sbarrera" required
                                    value="<?php echo htmlspecialchars($_POST['txtUsuario'] ?? ''); ?>">
                            </div>

                            <div class="form-group">
                                <label for="txtEmail">Correo Electrónico</label>
                                <input type="email" class="form-control" name="txtEmail" id="txtEmail"
                                    placeholder="correo@ejemplo.com" required
                                    value="<?php echo htmlspecialchars($_POST['txtEmail'] ?? ''); ?>">
                            </div>

                            <div class="form-group">
                                <label for="txtPassword">Contraseña</label>
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword"
                                    placeholder="Mínimo 8 caracteres" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" name="register">Registrarse</button>
                                <a href="index.php" class="btn btn-default">Volver</a>
                            </div>

                            <?php if ($registroError): ?>
                                <div class="alert alert-danger"><?php echo htmlspecialchars($registroError); ?></div>
                            <?php endif; ?>

                            <?php if ($registroExito): ?>
                                <div class="alert alert-success"><?php echo htmlspecialchars($registroExito); ?></div>
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
                $('#registroForm').on('submit', function (e) {
                    var nombre = $('#txtNombre').val().trim();
                    var usuario = $('#txtUsuario').val().trim().toLowerCase();
                    var email = $('#txtEmail').val().trim().toLowerCase();
                    var password = $('#txtPassword').val();
                    var error = '';

                    // Validaciones del lado del cliente
                    if (!nombre || !usuario || !email || !password) {
                        error = 'Todos los campos son obligatorios.';
                    }
                    else if (!/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+(\s[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+)*$/.test(nombre)) {
                        error = 'El nombre debe iniciar con mayúscula (Ejemplo: Juan Perez).';
                    }
                    else if (!/^[a-z][a-z0-9]{2,29}$/.test(usuario)) {
                        error = 'El usuario debe estar en minúsculas, sin espacios (Ejemplo: sbarrera).';
                    }
                    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                        error = 'El correo no tiene un formato válido.';
                    }
                    else if (password.length < 8) {
                        error = 'La contraseña debe tener al menos 8 caracteres.';
                    }

                    if (error) {
                        e.preventDefault();
                        var $alert = $('.alert-danger');
                        if ($alert.length) {
                            $alert.text(error);
                        } else {
                            $('<div class="alert alert-danger"></div>').text(error)
                                .insertBefore($(this).find('button[type="submit"]').parent());
                        }
                        return false;
                    }
                });
            });
        })(jQuery);
    </script>
</body>

</html>
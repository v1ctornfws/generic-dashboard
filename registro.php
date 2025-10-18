<?php
session_start();
?>
<style>
    /* Copiado y adaptado desde login.php para mantener el mismo diseño */
    :root {
        --bg1: #f5f7fb;
        --bg2: #eef2ff;
        --card: #ffffff;
        --accent: #2563eb;
        --muted: #6b7280;
        --radius: 16px;
        --shadow: 0 16px 40px rgba(16, 24, 40, 0.10);
    }

    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        font-family: Inter, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        background: linear-gradient(180deg, var(--bg1), var(--bg2));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 28px;
        color: #0f172a;
        min-height: 100vh;
    }

    .login-page {
        width: 100%;
        max-width: 920px;
        padding: 10px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), var(--card));
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 48px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border: 1px solid rgba(15, 23, 42, 0.04);
        max-width: 100%;
    }

    .card-brand {
        display: flex;
        gap: 12px;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .brand-img {
        height: 110px;
        width: auto;
        display: block;
    }

    .card-brand h1 {
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.2px;
    }

    .lead {
        margin: 0;
        color: var(--muted);
        text-align: center;
        font-size: 1.15rem;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .field {
        position: relative;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .field input {
        width: 100%;
        padding: 14px 48px 14px 16px;
        border-radius: 12px;
        border: 1px solid rgba(15, 23, 42, 0.08);
        background: transparent;
        font-size: 1.125rem;
        color: inherit;
        outline: none;
        transition: box-shadow .12s, border-color .12s, transform .06s;
    }

    .field input:focus {
        border-color: color-mix(in srgb, var(--accent) 60%, white);
        box-shadow: 0 12px 32px rgba(37, 99, 235, 0.12);
        transform: translateY(-1px);
    }

    .label-text {
        position: absolute;
        left: 16px;
        top: -10px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.98));
        padding: 0 8px;
        font-size: 0.9rem;
        color: var(--muted);
        border-radius: 6px;
    }

    .field-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: rgba(15, 23, 42, 0.45);
        pointer-events: none;
    }

    .field-icon svg {
        width: 20px;
        height: 20px;
        display: block;
    }

    .actions {
        display: flex;
        justify-content: center;
        gap: 12px;
        padding-top: 8px;
    }

    .btn-primary {
        background: var(--accent);
        color: white;
        border: 0;
        padding: 14px 22px;
        font-size: 1.05rem;
        border-radius: 12px;
        cursor: pointer;
        box-shadow: 0 14px 34px rgba(37, 99, 235, 0.14);
    }

    .btn-primary:hover {
        filter: brightness(1.03);
        transform: translateY(-1px);
    }

    /* botón secundario para regresar al login */
    .btn-secondary {
        background: #374151;
        color: white;
        border: 0;
        padding: 14px 22px;
        font-size: 1.05rem;
        border-radius: 12px;
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(55, 65, 81, 0.08);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary:hover {
        filter: brightness(1.03);
        transform: translateY(-1px);
    }

    .msg {
        text-align: center;
        color: #b91c1c;
        font-size: 0.95rem;
    }

    .msg.success {
        color: #065f46;
    }

    @media (max-width:900px) {
        .login-page {
            max-width: 760px;
        }

        .card {
            padding: 40px;
        }

        .brand-img {
            height: 96px;
        }
    }

    @media (max-width:420px) {
        .card {
            padding: 20px;
        }

        .brand-img {
            height: 56px;
        }

        .field input {
            padding-right: 44px;
        }

        .label-text {
            top: -8px;
        }
    }
</style>

<div class="login-page">
    <div class="card">
        <div class="card-brand">
            <img src="vistas/img/logo.png" alt="Q-Bot Logo" class="brand-img">
            <h1>Q-Bot</h1>
        </div>

        <p class="lead">Registro de nuevo usuario</p>

        <form method="post" class="login-form" autocomplete="off" novalidate>
            <label class="field">
                <input type="text" name="txtNombre" required maxlength="100">
                <span class="label-text">Nombre completo</span>
                <span class="field-icon" aria-hidden>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 12a5 5 0 1 0-5-5"></path>
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    </svg>
                </span>
            </label>

            <label class="field">
                <input type="text" name="txtUsuario" required maxlength="30" pattern="[A-Za-z0-9_]{3,30}"
                    title="3-30 caracteres, letras, números y guión bajo">
                <span class="label-text">Usuario</span>
                <span class="field-icon" aria-hidden>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z" stroke="none"></path>
                        <path d="M12 12v.01"></path>
                    </svg>
                </span>
            </label>

            <label class="field">
                <input type="email" name="txtEmail" required maxlength="200">
                <span class="label-text">Correo</span>
                <span class="field-icon" aria-hidden>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 6l-10 7L2 6"></path>
                    </svg>
                </span>
            </label>

            <label class="field">
                <input type="password" name="txtPassword" required minlength="6">
                <span class="label-text">Contraseña</span>
                <span class="field-icon" aria-hidden>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </span>
            </label>

            <div class="actions">
                <button type="submit" class="btn-primary" name="register">Crear cuenta</button>
                <a href="index.php" class="btn-secondary" role="button">Regresar</a>
            </div>

            <?php
            if (isset($_POST['register'])) {
                require_once __DIR__ . '/../../controladores/conexion.php';

                $nombre = trim($_POST['txtNombre'] ?? '');
                $usuario = trim($_POST['txtUsuario'] ?? '');
                $correo = trim($_POST['txtEmail'] ?? '');
                $pass = $_POST['txtPassword'] ?? '';

                // validaciones básicas
                if ($nombre === '' || $usuario === '' || $correo === '' || $pass === '') {
                    echo '<p class="msg">Por favor complete todos los campos.</p>';
                } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    echo '<p class="msg">Correo no válido.</p>';
                } elseif (!preg_match('/^[A-Za-z0-9_]{3,30}$/', $usuario)) {
                    echo '<p class="msg">Usuario inválido. Use 3-30 caracteres, letras, números o guión bajo.</p>';
                } else {
                    // comprobar existencia de usuario o correo
                    $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ? OR correo = ?");
                    if ($stmt) {
                        $stmt->bind_param("ss", $usuario, $correo);
                        $stmt->execute();
                        $stmt->store_result();
                        if ($stmt->num_rows > 0) {
                            echo '<p class="msg">El usuario o correo ya están registrados.</p>';
                            $stmt->close();
                        } else {
                            $stmt->close();
                            $hash = password_hash($pass, PASSWORD_DEFAULT);
                            $ins = $conexion->prepare("INSERT INTO usuarios (nombre, usuario, correo, password) VALUES (?, ?, ?, ?)");
                            if ($ins) {
                                $ins->bind_param("ssss", $nombre, $usuario, $correo, $hash);
                                if ($ins->execute()) {
                                    echo '<p class="msg success">Registro exitoso. Redirigiendo al inicio...</p>';
                                    echo '<script>setTimeout(()=>{window.location="index.php";},1200);</script>';
                                } else {
                                    echo '<p class="msg">Error al guardar. Intente de nuevo.</p>';
                                }
                                $ins->close();
                            } else {
                                echo '<p class="msg">Error en la consulta. Revise la configuración.</p>';
                            }
                        }
                    } else {
                        echo '<p class="msg">Error en la consulta. Revise la conexión.</p>';
                    }
                }

                // cerrar conexión si es necesario
                if (isset($conexion) && $conexion instanceof mysqli) {
                    // $conexion->close(); // opcional
                }
            }
            ?>
        </form>
    </div>
</div>
<style>
  /* Minimal, moderno y responsivo */
  :root {
    --bg1: #f5f7fb;
    --bg2: #eef2ff;
    --card: #ffffff;
    --accent: #2563eb;
    --muted: #6b7280;
    --radius: 16px;
    --shadow: 0 16px 40px rgba(16, 24, 40, 0.10);
  }

  /* asegurar que ocupa todo el viewport para centrar verticalmente */
  html,
  body {
    height: 100%;
    margin: 0;
  }

  body {
    margin: 0;
    font-family: Inter, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background: linear-gradient(180deg, var(--bg1), var(--bg2));
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 28px;
    color: #0f172a;
    min-height: 100vh;
  }

  /* Layout container */
  .login-page {
    width: 100%;
    max-width: 920px;
    /* más grande */
    padding: 10px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Card */
  .card {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), var(--card));
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    padding: 48px;
    /* más espacio interior */
    display: flex;
    flex-direction: column;
    gap: 20px;
    border: 1px solid rgba(15, 23, 42, 0.04);
    max-width: 100%;
  }

  /* Brand */
  .card-brand {
    display: flex;
    gap: 12px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .brand-img {
    height: 110px;
    /* logo más grande */
    width: auto;
    display: block;
  }

  .card-brand h1 {
    margin: 0;
    font-size: 1.5rem;
    /* título mayor */
    letter-spacing: 0.2px;
  }

  /* Lead */
  .lead {
    margin: 0;
    color: var(--muted);
    text-align: center;
    font-size: 1.15rem;
    /* texto descriptivo más grande */
  }

  /* Form fields */
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

  /* inputs: más grandes y con espacio a la derecha para el icono */
  .field input {
    width: 100%;
    padding: 14px 48px 14px 16px;
    /* padding-right para icono al final */
    border-radius: 12px;
    border: 1px solid rgba(15, 23, 42, 0.08);
    background: transparent;
    font-size: 1.125rem;
    /* letra más grande */
    color: inherit;
    outline: none;
    transition: box-shadow .12s, border-color .12s, transform .06s;
  }

  .field input:focus {
    border-color: color-mix(in srgb, var(--accent) 60%, white);
    box-shadow: 0 12px 32px rgba(37, 99, 235, 0.12);
    transform: translateY(-1px);
  }

  /* Floating label text (visually above the input) */
  .label-text {
    position: absolute;
    left: 16px;
    top: -10px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.98));
    padding: 0 8px;
    font-size: 0.9rem;
    /* etiqueta más grande */
    color: var(--muted);
    border-radius: 6px;
  }

  /* Icon inside field moved to the right (final de la caja) */
  .field-icon {
    position: absolute;
    right: 12px;
    /* ahora en el extremo derecho */
    top: 50%;
    transform: translateY(-50%);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: rgba(15, 23, 42, 0.45);
    pointer-events: none;
  }

  /* Aumentar tamaño de los SVG dentro del icono */
  .field-icon svg {
    width: 20px;
    height: 20px;
    display: block;
  }

  /* Actions */
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
    /* botón más grande */
    font-size: 1.05rem;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0 14px 34px rgba(37, 99, 235, 0.14);
  }

  /* botón verde para registrarse */
  .btn-success {
    background: #16a34a;
    color: white;
    border: 0;
    padding: 14px 22px;
    font-size: 1.05rem;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0 10px 24px rgba(16, 185, 129, 0.12);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .btn-success:hover {
    filter: brightness(1.03);
    transform: translateY(-1px);
  }

  /* Responsive tweaks */
  @media (max-width: 900px) {
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

  @media (max-width: 420px) {
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

    <p class="lead">Iniciar sesión</p>

    <form method="post" class="login-form" autocomplete="off" novalidate>
      <label class="field">
        <input type="email" name="txtEmail" required>
        <span class="label-text">Correo</span>
        <span class="field-icon" aria-hidden>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16v16H4z" stroke="none"></path>
            <path d="M22 6l-10 7L2 6"></path>
          </svg>
        </span>
      </label>

      <label class="field">
        <input type="password" name="txtPassword" required>
        <span class="label-text">Contraseña</span>
        <span class="field-icon" aria-hidden>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="11" width="18" height="11" rx="2"></rect>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
          </svg>
        </span>
      </label>

      <div class="actions">
        <button type="submit" class="btn-primary" name="login">Ingresar</button>
        <a href="registro.php" class="btn-success" role="button">Registrarse</a>
      </div>

      <?php
      if (isset($_POST["login"])) {
        $_SESSION["iniciarSesion"] = "ok";
        echo '<script>window.location = "index.php";</script>';
      }
      ?>
    </form>
  </div>
</div>
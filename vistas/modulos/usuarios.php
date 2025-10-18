<?php
include 'controladores/conexion.php';

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);
?>
<style>
  .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    vertical-align: middle;
  }

  .dot-green {
    background: #28a745;
  }

  .dot-red {
    background: #dc3545;
  }
</style>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Usuarios <small>Gestión básica de cuentas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Directorio de usuarios</h3>

        <div class="box-tools pull-right">
          <div class="btn-group" role="group" aria-label="Acciones">
            <button type="button" class="btn btn-success btn-sm" id="btnNuevoUsuario" data-toggle="modal"
              data-target="#modalCrearUsuario">
              <i class="fa fa-user-plus"></i> Nuevo usuario
            </button>
            <button type="button" class="btn btn-default btn-sm" id="btnExportCSV">
              <i class="fa fa-file-csv"></i> Exportar CSV
            </button>
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="row" style="margin-bottom:12px;">
          <div class="col-sm-5">
            <p class="text-muted">Crea, edita y administra usuarios del sistema. Mantén roles y estados actualizados.
            </p>
            <div class="form-inline" style="margin-top:6px;">
              <label for="filtroEstado">Estado:</label>
              <select id="filtroEstado" class="form-control input-sm" style="margin:0 6px;">
                <option value="">Todos</option>
                <option value="activo">Activo</option>
                <option value="suspendido">Suspendido</option>
              </select>
            </div>
          </div>

          <div class="col-sm-7">
            <div class="pull-right">
              <div class="input-group" style="max-width:420px;">
                <input type="text" id="buscarUsuario" class="form-control input-sm"
                  placeholder="Buscar por nombre, email o ID">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" id="btnBuscarUsuario"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="tablaUsuarios">
            <thead>
              <tr>
                <th style="width:60px;">ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th style="width:100px;">Estado</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = $resultado->fetch_assoc()) {
                $activo = intval($row['activo']) === 1;
                $estadoTexto = $activo ? 'Activo' : 'Inactivo';
                $dotClass = $activo ? 'dot dot-green' : 'dot dot-red';
                ?>
                <tr>
                  <td><?php echo $row['id_usuario']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <td>
                    <span class="<?php echo $dotClass; ?>" title="<?php echo $estadoTexto; ?>"
                      aria-label="<?php echo $estadoTexto; ?>"></span>
                    <small style="margin-left:8px; vertical-align:middle;"><?php echo $estadoTexto; ?></small>
                  </td>
                  <td>
                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                    <?php if ($activo) { ?>
                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                    <?php } else { ?>
                      <button class="btn btn-success btn-xs"><i class="fa fa-unlock"></i> Activar</button>
                    <?php } ?>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <p class="text-muted" style="margin-top:12px;">
          Usa las acciones para ver detalles, modificar permisos o eliminar cuentas. Implementa validaciones y
          confirmaciones para operaciones destructivas.
        </p>
        <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
      </div>
      <div class="box-footer">
        Gestión básica de usuarios — creación, edición y búsqueda
      </div>
    </div>
  </section>

  <div class="modal fade" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="modalCrearUsuarioLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="formCrearUsuario" action="controladores/crear_usuario.php" method="post" autocomplete="off">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span
                aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modalCrearUsuarioLabel">Nuevo usuario</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
              <label for="correo">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div id="formCrearUsuarioFeedback" class="text-danger" style="display:none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear usuario</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof jQuery === 'undefined') {
      console.warn('jQuery no está cargado. Asegúrate de incluir jQuery y bootstrap.js (en este orden).');
      return;
    }
    jQuery(function ($) {
      $('#btnNuevoUsuario').on('click', function (e) {
        $('#modalCrearUsuario').modal('show');
      });

      // Validación simple antes de submit
      $('#formCrearUsuario').on('submit', function (e) {
        var nombre = $('#nombre').val().trim();
        var usuario = $('#usuario').val().trim();
        var correo = $('#correo').val().trim();
        var password = $('#password').val();
        var feedback = $('#formCrearUsuarioFeedback');
        feedback.hide().text('');
        if (!nombre || !usuario || !correo || !password) {
          e.preventDefault();
          feedback.text('Todos los campos son obligatorios.').show();
          return false;
        }
      });
    });
  });
</script>
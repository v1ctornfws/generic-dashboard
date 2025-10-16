<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
    <!-- Box: Usuarios -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Directorio de usuarios</h3>

        <div class="box-tools pull-right">
          <div class="btn-group" role="group" aria-label="Acciones">
            <button type="button" class="btn btn-success btn-sm" id="btnNuevoUsuario">
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
              <label for="filtroRol">Rol:</label>
              <select id="filtroRol" class="form-control input-sm" style="margin:0 10px 0 6px;">
                <option value="">Todos</option>
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
                <option value="user">Usuario</option>
              </select>
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
                <th style="width:120px;">Rol</th>
                <th style="width:100px;">Estado</th>
                <th style="width:160px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ejemplos estáticos; reemplazar por datos dinámicos -->
              <tr>
                <td>1</td>
                <td>Víctor Amaya</td>
                <td>victor.amaya@example.com</td>
                <td>Administrador</td>
                <td><span class="label label-success">Activo</span></td>
                <td>
                  <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>María López</td>
                <td>maria.lopez@example.com</td>
                <td>Editor</td>
                <td><span class="label label-success">Activo</span></td>
                <td>
                  <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Carlos Pérez</td>
                <td>carlos.perez@example.com</td>
                <td>Usuario</td>
                <td><span class="label label-danger">Suspendido</span></td>
                <td>
                  <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-success btn-xs"><i class="fa fa-unlock"></i> Activar</button>
                </td>
              </tr>
              <!-- Fin ejemplos -->
            </tbody>
          </table>
        </div>

        <p class="text-muted" style="margin-top:12px;">
          Usa las acciones para ver detalles, modificar permisos o eliminar cuentas. Implementa validaciones y
          confirmaciones para operaciones destructivas.
        </p>
        <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        Gestión básica de usuarios — creación, edición y búsqueda
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
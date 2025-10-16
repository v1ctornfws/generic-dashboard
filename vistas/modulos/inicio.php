<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Inicio <small>Panel de control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Hero / Welcome -->
    <div class="callout callout-info" style="border-left:6px solid #3c8dbc;">
      <div style="display:flex;align-items:center;gap:18px;flex-wrap:wrap;">
        <div style="flex:1;min-width:220px">
          <h2 style="margin:0 0 6px 0;color:#204d74">Bienvenido, Victor Amaya</h2>
          <p style="margin:0 0 8px 0;color:#2f4f66">
            Este es tu panel de control. Desde aquí puedes revisar ventas, clientes, proyectos, archivos y generar
            reportes rápidamente.
          </p>
          <p style="margin:0">
            <a href="plantilla.php?pagina=ventas" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Ver
              ventas</a>
            <a href="plantilla.php?pagina=clientes" class="btn btn-warning"><i class="fa fa-address-book"></i>
              Clientes</a>
            <a href="plantilla.php?pagina=proyectos" class="btn btn-success" style="margin-left:6px"><i
                class="fa fa-briefcase"></i> Proyectos</a>
            <a href="plantilla.php?pagina=archivos" class="btn btn-danger" style="margin-left:6px"><i
                class="fa fa-folder"></i> Archivos</a>
          </p>
        </div>
        <div style="width:160px;text-align:center;">
          <img src="vistas/img/me.jpg" alt="Avatar"
            style="width:120px;height:120px;border-radius:50%;object-fit:cover;border:4px solid #fff;box-shadow:0 6px 18px rgba(0,0,0,0.12);">
        </div>
      </div>
    </div>

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>124</h3>
            <p>Ventas (mes)</p>
          </div>
          <div class="icon"><i class="fa fa-shopping-cart"></i></div>
          <a href="plantilla.php?pagina=ventas" class="small-box-footer">Más info <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>58</h3>
            <p>Clientes activos</p>
          </div>
          <div class="icon"><i class="fa fa-users"></i></div>
          <a href="plantilla.php?pagina=clientes" class="small-box-footer">Más info <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>18</h3>
            <p>Proyectos</p>
          </div>
          <div class="icon"><i class="fa fa-briefcase"></i></div>
          <a href="plantilla.php?pagina=proyectos" class="small-box-footer">Gestionar proyectos <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>24</h3>
            <p>Archivos almacenados</p>
          </div>
          <div class="icon"><i class="fa fa-folder"></i></div>
          <a href="plantilla.php?pagina=archivos" class="small-box-footer">Abrir gestor <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Quick actions + Recent activity -->
    <div class="row">
      <div class="col-md-4">
        <div class="box box-widget">
          <div class="box-header with-border">
            <h3 class="box-title">Acciones rápidas</h3>
          </div>
          <div class="box-body">
            <div style="display:flex;flex-direction:column;gap:8px;">
              <a href="plantilla.php?pagina=ventas" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Nueva
                venta</a>
              <a href="plantilla.php?pagina=clientes" class="btn btn-block btn-default"><i class="fa fa-user-plus"></i>
                Nuevo cliente</a>
              <a href="plantilla.php?pagina=proyectos&accion=nuevo" class="btn btn-block btn-success"><i
                  class="fa fa-briefcase"></i> Nuevo proyecto</a>
              <a href="plantilla.php?pagina=archivos" class="btn btn-block btn-default"><i class="fa fa-upload"></i>
                Subir archivo</a>
              <a href="plantilla.php?pagina=reportes" class="btn btn-block btn-warning"><i
                  class="fa fa-file-export"></i> Exportar reportes</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="box box-widget">
          <div class="box-header with-border">
            <h3 class="box-title">Actividad reciente</h3>
          </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Evento</th>
                  <th>Usuario</th>
                  <th>Detalle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2025-10-01</td>
                  <td>Nueva venta registrada</td>
                  <td>María L.</td>
                  <td>$3,450.00 — Pedido #1001</td>
                </tr>
                <tr>
                  <td>2025-09-30</td>
                  <td>Cliente agregado</td>
                  <td>Carlos P.</td>
                  <td>Empresa: TecnoSol</td>
                </tr>
                <tr>
                  <td>2025-09-29</td>
                  <td>Proyecto actualizado</td>
                  <td>Ana</td>
                  <td>Portal cliente B2B — avance al 88%</td>
                </tr>
                <tr>
                  <td>2025-09-28</td>
                  <td>Archivo subido</td>
                  <td>Victor</td>
                  <td>mockup_portal_home.png</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer">
            <a href="plantilla.php?pagina=ventas" class="btn btn-sm btn-default">Ver todas</a>
            <span class="pull-right text-muted">Últimas 10 acciones</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Tips / Help -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Sugerencias rápidas</h3>
          </div>
          <div class="box-body">
            <ul>
              <li>Revisa diariamente las ventas y genera reportes semanales para análisis.</li>
              <li>Mantén actualizados los proyectos y asigna responsables para cada hito.</li>
              <li>Organiza archivos por carpetas y etiquetas para facilitar búsquedas y versiones.</li>
            </ul>
            <p class="text-muted" style="margin-top:8px;"><strong>Victor Amaya / 745768</strong></p>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
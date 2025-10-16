<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Productos <small>Catálogo y gestión básica</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Productos</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Box: Productos -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Catálogo de productos</h3>

        <div class="box-tools pull-right">
          <div class="btn-group" role="group" aria-label="Acciones">
            <button type="button" class="btn btn-success btn-sm" id="btnNuevoProducto">
              <i class="fa fa-plus"></i> Nuevo producto
            </button>
            <button type="button" class="btn btn-default btn-sm" id="btnExportCSV">
              <i class="fa fa-file-csv"></i> Exportar CSV
            </button>
            <button type="button" class="btn btn-default btn-sm" id="btnExportPDF">
              <i class="fa fa-file-pdf-o"></i> Exportar PDF
            </button>
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="row" style="margin-bottom:12px;">
          <div class="col-sm-4">
            <p class="text-muted">Gestiona el inventario, precios y categorías de tus productos.</p>
          </div>

          <div class="col-sm-4">
            <div class="form-inline">
              <div class="form-group">
                <label for="filtroCategoria">Categoría:</label>
                <select id="filtroCategoria" class="form-control input-sm" style="margin-left:6px;">
                  <option value="">Todas</option>
                  <option>Electrónica</option>
                  <option>Hogar</option>
                  <option>Oficina</option>
                </select>
              </div>
              <div class="form-group" style="margin-left:12px;">
                <label for="filtroStock">Stock:</label>
                <select id="filtroStock" class="form-control input-sm" style="margin-left:6px;">
                  <option value="">Todos</option>
                  <option>En stock</option>
                  <option>Agotado</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="pull-right">
              <div class="input-group" style="max-width:360px;">
                <input type="text" id="buscarProducto" class="form-control input-sm"
                  placeholder="Buscar por nombre o SKU">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" id="btnBuscarProducto"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="tablaProductos">
            <thead>
              <tr>
                <th style="width:60px;">ID</th>
                <th>Nombre</th>
                <th style="width:120px;">SKU</th>
                <th style="width:120px;">Categoría</th>
                <th style="width:120px;">Precio</th>
                <th style="width:80px;">Stock</th>
                <th style="width:100px;">Estado</th>
                <th style="width:140px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ejemplos estáticos; reemplazar por salida dinámica -->
              <tr>
                <td>1</td>
                <td>Audífonos inalámbricos X100</td>
                <td>X100-001</td>
                <td>Electrónica</td>
                <td>$1,250.00</td>
                <td>45</td>
                <td><span class="label label-success">Disponible</span></td>
                <td>
                  <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Borrar</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lampara LED de mesa</td>
                <td>LMP-204</td>
                <td>Hogar</td>
                <td>$420.00</td>
                <td>12</td>
                <td><span class="label label-info">Reabastecer</span></td>
                <td>
                  <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Silla ergonómica OfficePro</td>
                <td>OFF-778</td>
                <td>Oficina</td>
                <td>$2,150.00</td>
                <td>0</td>
                <td><span class="label label-danger">Agotado</span></td>
                <td>
                  <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ver</button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                </td>
              </tr>
              <!-- Fin ejemplos -->
            </tbody>
          </table>
        </div>

        <p class="text-muted" style="margin-top:12px;">
          Usa los controles para filtrar y buscar productos. Los botones de acción permiten ver, editar o eliminar
          registros.
        </p>
        <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        Catálogo de productos — gestión básica
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
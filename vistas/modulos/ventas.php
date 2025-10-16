<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ventas <small>Registro y gestión de pedidos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Ventas</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Box: Ventas -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Registro de ventas</h3>

                <div class="box-tools pull-right">
                    <div class="btn-group" role="group" aria-label="Acciones">
                        <button type="button" class="btn btn-success btn-sm" id="btnNuevaVenta">
                            <i class="fa fa-plus"></i> Nueva venta
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
                    <div class="col-sm-5">
                        <p class="text-muted">Filtra por fecha, estado o método de pago para revisar las ventas
                            registradas.</p>
                        <div class="form-inline" style="margin-top:6px;">
                            <label for="desde">Desde:</label>
                            <input type="date" id="desde" class="form-control input-sm" style="margin:0 10px 0 6px;">
                            <label for="hasta">Hasta:</label>
                            <input type="date" id="hasta" class="form-control input-sm" style="margin:0 10px 0 6px;">
                            <button class="btn btn-primary btn-sm" id="btnFiltrar"><i class="fa fa-filter"></i>
                                Filtrar</button>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-inline" style="margin-top:6px;">
                            <label for="filtroEstado">Estado:</label>
                            <select id="filtroEstado" class="form-control input-sm" style="margin:0 10px;">
                                <option value="">Todos</option>
                                <option value="completado">Completado</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                            <label for="filtroPago">Pago:</label>
                            <select id="filtroPago" class="form-control input-sm" style="margin:0 6px;">
                                <option value="">Todos</option>
                                <option>Tarjeta</option>
                                <option>Efectivo</option>
                                <option>Transferencia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="pull-right" style="margin-top:6px;">
                            <div class="input-group" style="max-width:320px;">
                                <input type="text" id="buscarVenta" class="form-control input-sm"
                                    placeholder="Buscar por cliente o ID">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" id="btnBuscarVenta"><i
                                            class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tablaVentas">
                        <thead>
                            <tr>
                                <th style="width:60px;">ID</th>
                                <th style="width:120px;">Fecha</th>
                                <th>Cliente</th>
                                <th style="width:90px;">Items</th>
                                <th style="width:120px;">Total</th>
                                <th style="width:120px;">Método</th>
                                <th style="width:100px;">Estado</th>
                                <th style="width:140px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplos estáticos; reemplazar por datos dinámicos -->
                            <tr>
                                <td>1001</td>
                                <td>2025-10-01</td>
                                <td>María López</td>
                                <td>3</td>
                                <td>$3,450.00</td>
                                <td>Tarjeta</td>
                                <td><span class="label label-success">Completado</span></td>
                                <td>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-file-text"></i>
                                        Factura</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1002</td>
                                <td>2025-10-01</td>
                                <td>Carlos Pérez</td>
                                <td>1</td>
                                <td>$420.00</td>
                                <td>Efectivo</td>
                                <td><span class="label label-warning">Pendiente</span></td>
                                <td>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i> Marcar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1000</td>
                                <td>2025-09-28</td>
                                <td>Empresa S.A.</td>
                                <td>7</td>
                                <td>$12,150.00</td>
                                <td>Transferencia</td>
                                <td><span class="label label-danger">Cancelado</span></td>
                                <td>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                </td>
                            </tr>
                            <!-- Fin ejemplos -->
                        </tbody>
                    </table>
                </div>

                <p class="text-muted" style="margin-top:12px;">
                    Las acciones permiten ver detalles de la venta, generar factura o actualizar el estado.
                </p>
                <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                Gestión básica de ventas — registro, búsqueda y exportación
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
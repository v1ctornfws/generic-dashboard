<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Reportes <small>Visión general y exportación</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Reportes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Box: Reportes -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Panel de reportes</h3>

                <div class="box-tools pull-right">
                    <div class="btn-group" role="group" aria-label="Acciones">
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
                    <div class="col-sm-6">
                        <p class="text-muted">Selecciona un rango de fechas y filtros para generar reportes resumidos o
                            detallados.</p>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="desde">Desde:</label>
                                <input type="date" id="desde" class="form-control input-sm"
                                    style="margin-left:6px; margin-right:12px;">
                            </div>
                            <div class="form-group">
                                <label for="hasta">Hasta:</label>
                                <input type="date" id="hasta" class="form-control input-sm" style="margin-left:6px;">
                            </div>
                            <button class="btn btn-primary btn-sm" id="btnGenerar" style="margin-left:12px;"><i
                                    class="fa fa-refresh"></i> Generar</button>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="pull-right">
                            <div class="input-group" style="max-width:320px;">
                                <input type="text" id="buscarReporte" class="form-control input-sm"
                                    placeholder="Buscar por descripción o tipo">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" id="btnBuscarReporte"><i
                                            class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tablaReportes">
                        <thead>
                            <tr>
                                <th style="width:80px;">Fecha</th>
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th style="width:120px;">Total</th>
                                <th style="width:100px;">Estado</th>
                                <th style="width:140px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplos estáticos; sustituir por datos dinámicos -->
                            <tr>
                                <td>2025-09-30</td>
                                <td>Ventas</td>
                                <td>Reporte de ventas diarias</td>
                                <td>$12,450.00</td>
                                <td><span class="label label-success">Completado</span></td>
                                <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-download"></i>
                                        Descargar</button>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2025-09-29</td>
                                <td>Clientes</td>
                                <td>Altas de clientes por campaña</td>
                                <td>—</td>
                                <td><span class="label label-warning">En proceso</span></td>
                                <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-download"></i>
                                        Descargar</button>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2025-09-01</td>
                                <td>Inventario</td>
                                <td>Resumen mensual de existencias</td>
                                <td>—</td>
                                <td><span class="label label-default">Programado</span></td>
                                <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-download"></i>
                                        Descargar</button>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                </td>
                            </tr>
                            <!-- Fin ejemplos -->
                        </tbody>
                    </table>
                </div>

                <p class="text-muted" style="margin-top:12px;">
                    Usa los botones de exportación para obtener los reportes en el formato deseado.
                </p>
                <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                Reportes básicos — generación y exportación
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
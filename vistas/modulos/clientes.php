<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clientes <small>Listado y gestión básica</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Box: Clientes -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Directorio de clientes</h3>

                <div class="box-tools pull-right">
                    <div class="btn-group" role="group" aria-label="Acciones">
                        <button type="button" class="btn btn-success btn-sm" id="btnNuevoCliente">
                            <i class="fa fa-user-plus"></i> Nuevo cliente
                        </button>
                    </div>
                </div>
            </div>

            <div class="box-body">
                <div class="row" style="margin-bottom:12px;">
                    <div class="col-sm-6">
                        <p class="text-muted">Aquí puedes ver y gestionar los clientes registrados.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <div class="input-group" style="max-width:320px;">
                                <input type="text" id="buscarCliente" class="form-control input-sm"
                                    placeholder="Buscar por nombre o email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" id="btnBuscar"><i
                                            class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tablaClientes">
                        <thead>
                            <tr>
                                <th style="width:60px;">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Empresa</th>
                                <th style="width:140px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplos estáticos; aquí iría la salida dinámica desde la base de datos -->
                            <tr>
                                <td>1</td>
                                <td>María López</td>
                                <td>maria.lopez@example.com</td>
                                <td>+52 55 1234 5678</td>
                                <td>Acme S.A.</td>
                                <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ver</button>
                                    <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Carlos Pérez</td>
                                <td>carlos.perez@example.com</td>
                                <td>+52 81 8765 4321</td>
                                <td>TecnoSol</td>
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
                    Mantén actualizada la información de contacto y empresa para facilitar la comunicación.
                </p>
                <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                Listado básico de clientes
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include 'controladores/conexion.php';

$sql = "SELECT * FROM clientes";
$resultado = $conexion->query($sql);

if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}
?>
<link rel="stylesheet" href="controladores/estados_.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Clientes <small>Listado y gestión básica</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="plantilla.php?pagina=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>

    <section class="content">
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
                                <th>Nombre Empresa</th>
                                <th>Nombre Contacto</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Descripción</th>
                                <th style="width:100px;">Estado</th>
                                <th style="width:140px;">Acciones</th>
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
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre_empresa']; ?></td>
                                    <td><?php echo $row['nombre_contacto']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td>
                                        <span class="<?php echo $dotClass; ?>" title="<?php echo $estadoTexto; ?>"
                                            aria-label="<?php echo $estadoTexto; ?>"></span>
                                        <small
                                            style="margin-left:8px; vertical-align:middle;"><?php echo $estadoTexto; ?></small>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ver</button>
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
                    Mantén actualizada la información de contacto y empresa para facilitar la comunicación.
                </p>
                <p class="text-muted"><strong>Victor Amaya / 745768</strong></p>
            </div>
            <div class="box-footer">
                Listado básico de clientes
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modalCrearCliente" tabindex="-1" role="dialog" aria-labelledby="modalCrearClienteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formCrearCliente" action="controladores/crear_cliente.php" method="post" autocomplete="off">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCrearClienteLabel">Nuevo Cliente</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="empresa">Nombre de la Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" required>
                    </div>
                    <div class="form-group">
                        <label for="contacto">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="contacto" name="contacto" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección de la Empresa</label>
                        <textarea class="form-control" id="direccion" name="direccion" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción de la Empresa</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div id="formCrearClienteFeedback" class="text-danger" style="display:none;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                </div>
            </form>
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
            $('#btnNuevoCliente').attr({
                'data-toggle': 'modal',
                'data-target': '#modalCrearCliente'
            });

            $('#formCrearCliente').on('submit', function (e) {
                e.preventDefault();

                var empresa = $('#empresa').val().trim();
                var contacto = $('#contacto').val().trim();
                var correo = $('#correo').val().trim();
                var direccion = $('#direccion').val().trim();
                var descripcion = $('#descripcion').val().trim();
                var feedback = $('#formCrearClienteFeedback');

                feedback.hide().text('');

                if (!empresa || !contacto || !correo || !direccion || !descripcion) {
                    feedback.text('Todos los campos son obligatorios.').show();
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: 'controladores/crear_cliente.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            feedback.text(response.message || 'Error al crear el cliente').show();
                        }
                    },
                    error: function () {
                        feedback.text('Error de conexión al servidor').show();
                    }
                });
            });
        });
    });
</script>
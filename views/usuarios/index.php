<div class="container container-fluid">
    <!-- Breadcrumb -->
    <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a id="criterio" href="#">Sistema</a></li>
            <li class="breadcrumb-item active" id="indicador" aria-current="page">Usuarios</li>
        </ol>
    </div>
    <!-- End Breadcrumb -->

    <!-- Lista de documentos -->
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="float-start text-light">Usuarios</h5>
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Usuario
            </button>
        </div>
        <div class="card-body">
            <input id="actioneliminar" type="hidden" value="usuarios/delete/">
            <table id="tbLista" class="table table-stripped table-hover table-responsive">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">Apellidos y Nombres</th>
                        <th class="text-center" scope="col">Usuarios</th>
                        <th class="text-center" scope="col">Proceso</th>
                        <th class="text-center" scope="col">Estado</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $row) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $row->idusuario; ?></th>
                            <td><?php echo $row->nombres; ?></td>
                            <td class="text-center"><?php echo $row->usuario; ?></td>
                            <td class="text-center"><?php echo $row->proceso; ?></td>
                            <td class="text-center"><?php echo ($row->estado == 1) ? '<span class="badge bg-primary">ACTIVO</span>' : '<span class="badge bg-secondary">DESACTIVADO</span>'; ?></td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-danger" onclick="" title="Eliminar usuario"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-success" onclick="" title="Cambiar estado del usuario"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Lista de documentos -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir documento al sistema</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formUsuario" action="usuarios/insert/" method="post">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input id="nombres" name="nombres" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="idtipousuario" class="form-label">Proceso</label>
                            <select id="idtipousuario" name="idtipousuario" class="form-select">
                                <option value="">-- Seleccione tipo de Usuario --</option>
                                <?php foreach ($tipousuarios as $row) : ?>
                                    <option value="<?php echo Main::encryption($row->idtipousuario); ?>"><?php echo $row->proceso; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input id="usuario" name="usuario" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa-sharp fa-solid fa-upload"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
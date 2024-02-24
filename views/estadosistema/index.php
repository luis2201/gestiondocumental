.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Sistema</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Estado del Sistema</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Estado del Sistema</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="afinidad/delete/">
      <input id="actionview" type="hidden" value="afinidad/view/">
      <table class="table table-stripped table-hover table-responsive">
      <thead class="table-primary">
        <tr>
          <th class="text-center" scope="col">#</th>
          <th class="text-center" scope="col">Configuración</th>
          <th class="text-center" scope="col">Estado</th>
          <th class="text-center" scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">1</th>
          <td>Estado del Sistema</td>
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php ?>
              <button id="btnEstado" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i></button>
              <?php  ?>
            </div>
            <td class="text-center"></td>
          </td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
  <!-- End Lista de documentos -->
</div>
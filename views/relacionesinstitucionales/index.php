<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Organización</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Planificación y Desarrollo</a></li>
        <li class="breadcrumb-item active" id="evidencia" aria-current="page">Relaciones Interinstitucionales para el Desarrollo</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Relaciones Interinstitucionales para el Desarrollo</h5>
      <button class="btn btn-outline-light btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-file-arrow-up"></i> Subir documento
      </button>
    </div>
    <div class="card-body">
      <table id="tbLista" class="table table-stripped table-hover table-responsive">
      <thead class="table-primary">
        <tr>
          <th class="text-center" scope="col">#</th>
          <th class="text-center" scope="col">Documento</th>
          <th class="text-center" scope="col">Fecha</th>
          <th class="text-center" scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $i = 1; 
          foreach($documentos as $row): 
        ?>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td><?php echo $row->documento; ?></td>
          <td class="text-center"><?php echo $row->fecha; ?></td>
          <td class="text-center">
            <a href="<?php echo DIR; ?>pdf.php?document=<?php echo $row->iddocumento; ?>" target="_blank"><i class="fa-solid fa-eye"></i></a>
            <a href="<?php echo DIR; ?>pdf.php?document=<?php echo $row->iddocumento; ?>" target="_blank"><i class="fa-solid fa-eye"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
    <div class="card-footer text-center bg-info">      
      <?php if($_SESSION['tipousuario_sisgec'] == 'Evaluador'){ ?> 
        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo Main::encryption($_SESSION['idusuario_sisgec']); ?>">        
        <input type="hidden" id="rutainsert" value="relacionesinstitucionales/calificacion/">
        <input type="hidden" id="rutaview" value="relacionesinstitucionales/viewcalificacion/">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="calificacion1" name="calificacion" value="1.00">
          <label class="form-check-label" for="satisfactorio">Satisfactorio (1.00)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="calificacion2" name="calificacion" value="0.70">
          <label class="form-check-label" for="cuasisatisfactorio">Cuasi Satisfactorio (0.70)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="calificacion3" name="calificacion" value="0.35">
          <label class="form-check-label" for="pocosatisfactorio">Poco satisfactorio (0.35)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="calificacion4" name="calificacion" value="0.00">
          <label class="form-check-label" for="deficiente">Deficiente (0.00)</label>
        </div>
      <?php } ?>
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
      <form id="form" action="estrategicaoperativa/insert/">
        <div class="modal-body">
          <div class="mb-3">
            <label for="documento" class="form-label">Seleccione el documento al sistema</label>
            <input id="documento" name="documento[]" type="file" class="form-control" accept="application/pdf" multiple>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary"><i class="fa-sharp fa-solid fa-upload"></i> Subir</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Profesores</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Selección y Formación Previa</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Selección de Profesores</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Selección de Profesores</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="seleccionprofesores/delete/">
      <input id="actionview" type="hidden" value="seleccionprofesores/view/">
      <table id="tbLista" class="table table-stripped table-hover table-responsive">
      <thead class="table-primary">
        <tr>
          <th class="text-center" scope="col">#</th>
          <th class="text-center" scope="col">Documento</th>
          <th class="text-center" scope="col"></th>
          <th class="text-center" scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">1</th>
          <td id="1">Documentos relacionados con el desarrollo de los procesos de selección de profesores no titulares o concursos de méritos y oposición para la designación de profesores titulares (carpetas de candidatos, actas de reuniones, videos o grabaciones de entrevistas y clases demostrativas, documentos con los resultados, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captados a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Documentos relacionados con el desarrollo de los procesos de selección de profesores no titulares o concursos de méritos y oposición para la designación de profesores titulares (carpetas de candidatos, actas de reuniones, videos o grabaciones de entrevistas y clases demostrativas, documentos con los resultados, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captados a través del aplicativo SIIES y visita in situ)';
                $evidencias = Model::evidencias($evidencia);
                foreach($evidencias as $row):   
              ?>                           
                <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
              <?php endforeach; ?>
            </div>
          </td>
          <td class="text-center">
              <button type="button" id="<?php echo Main::encryption($row->evidencia); ?>" class="btn btn-danger btn-sm" onclick="eliminar(this.id)"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <?php } ?>
            <!-- Para el evaluador -->
            <?php if($_SESSION['tipousuario_sisgec']=='Evaluador') {           
              $evidencia = 'Documentos relacionados con el desarrollo de los procesos de selección de profesores no titulares o concursos de méritos y oposición para la designación de profesores titulares (carpetas de candidatos, actas de reuniones, videos o grabaciones de entrevistas y clases demostrativas, documentos con los resultados, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captados a través del aplicativo SIIES y visita in situ)';
              $evidencias = Model::evidencias($evidencia);
              foreach($evidencias as $row):   
            ?>                           
              <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
            <?php endforeach; ?> 
            <?php } ?>
            <!-- Fin Para el evaluador -->
            </td>
        </tr>
        <tr>
          <th scope="row" class="text-center">2</th>
          <td id="2">Normativa interna, aprobada y vigente, enmarcada en las normas nacionales, para la selección de profesores (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa interna, aprobada y vigente, enmarcada en las normas nacionales, para la selección de profesores (captada a través del aplicativo SIIES)';
                $evidencias = Model::evidencias($evidencia);
                foreach($evidencias as $row):   
              ?>                           
                <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
              <?php endforeach; ?>
            </div>
          </td>
          <td class="text-center">
              <button type="button" id="<?php echo Main::encryption($row->evidencia); ?>" class="btn btn-danger btn-sm" onclick="eliminar(this.id)"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <?php } ?>
            <!-- Para el evaluador -->
            <?php if($_SESSION['tipousuario_sisgec']=='Evaluador') {           
              $evidencia = 'Normativa interna, aprobada y vigente, enmarcada en las normas nacionales, para la selección de profesores (captada a través del aplicativo SIIES)';
              $evidencias = Model::evidencias($evidencia);
              foreach($evidencias as $row):   
            ?>                           
              <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
            <?php endforeach; ?> 
            <?php } ?>
            <!-- Fin Para el evaluador -->
            </td>
        </tr>
        <tr>
          <th scope="row" class="text-center">3</th>
          <td id="3">Evidencias de la divulgación pública de los procesos de selección de profesores no titulares o la convocatoria a concursos de méritos y oposición para la designación de profesores titulares (convocatoria, aviso en medios de prensa, web institucional, comunicaciones a los candidatos, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de la divulgación pública de los procesos de selección de profesores no titulares o la convocatoria a concursos de méritos y oposición para la designación de profesores titulares (convocatoria, aviso en medios de prensa, web institucional, comunicaciones a los candidatos, etc.) (captadas a través del aplicativo SIIES)';
                $evidencias = Model::evidencias($evidencia);
                foreach($evidencias as $row):   
              ?>                           
                <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
              <?php endforeach; ?>
            </div>
          </td>
          <td class="text-center">
              <button type="button" id="<?php echo Main::encryption($row->evidencia); ?>" class="btn btn-danger btn-sm" onclick="eliminar(this.id)"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <?php } ?>
            <!-- Para el evaluador -->
            <?php if($_SESSION['tipousuario_sisgec']=='Evaluador') {           
              $evidencia = 'Evidencias de la divulgación pública de los procesos de selección de profesores no titulares o la convocatoria a concursos de méritos y oposición para la designación de profesores titulares (convocatoria, aviso en medios de prensa, web institucional, comunicaciones a los candidatos, etc.) (captadas a través del aplicativo SIIES)';
              $evidencias = Model::evidencias($evidencia);
              foreach($evidencias as $row):   
            ?>                           
              <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
            <?php endforeach; ?> 
            <?php } ?>
            <!-- Fin Para el evaluador -->
            </td>
        </tr>
      </tbody>
      </table>
    </div>
    <div class="card-footer text-center bg-info">      
      <?php if($_SESSION['tipousuario_sisgec'] == 'Evaluador'){ ?> 
        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo Main::encryption($_SESSION['idusuario_sisgec']); ?>">        
        <input type="hidden" id="rutainsert" value="seleccionprofesores/calificacion/">
        <input type="hidden" id="rutaview" value="seleccionprofesores/viewcalificacion/">
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
      <form id="form" action="seleccionprofesores/insert/">
        <div class="modal-body">
          <div class="mb-3">
            <label id="evidencia" for="documento" class="form-label">Seleccione el documento al sistema</label>
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
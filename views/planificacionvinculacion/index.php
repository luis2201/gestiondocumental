.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Vinculación con la Sociedad</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Planificación y ejecución de la vinculación</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Planificación y Ejecución de la Vinculación con la Sociedad</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Planificación y Ejecución de la Vinculación con la Sociedad</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="planificacionvinculacion/delete/">
      <input id="actionview" type="hidden" value="planificacionvinculacion/view/">
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
          <td id="1">Plan estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de vinculación con la sociedad, incluido el diagnóstico participativo que la sustenta (captado a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Plan estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de vinculación con la sociedad, incluido el diagnóstico participativo que la sustenta (captado a través del aplicativo SIIES)';
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
              $evidencia = 'Plan estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de vinculación con la sociedad, incluido el diagnóstico participativo que la sustenta (captado a través del aplicativo SIIES)';
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
          <td id="2">Planes operativos anuales (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Planes operativos anuales (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Planes operativos anuales (captados a través del aplicativo SIIES)';
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
          <td id="3">Documentos de los proyectos de vinculación con la sociedad ejecutados o en ejecución durante el período de evaluación. (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Documentos de los proyectos de vinculación con la sociedad ejecutados o en ejecución durante el período de evaluación. (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Documentos de los proyectos de vinculación con la sociedad ejecutados o en ejecución durante el período de evaluación. (captados a través del aplicativo SIIES)';
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
          <th scope="row" class="text-center">4</th>
          <td id="4">Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de vinculación con la sociedad, especialmente del cumplimiento de sus objetivos, y de la participación de los estudiantes en estos. (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de vinculación con la sociedad, especialmente del cumplimiento de sus objetivos, y de la participación de los estudiantes en estos. (captadas a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de vinculación con la sociedad, especialmente del cumplimiento de sus objetivos, y de la participación de los estudiantes en estos. (captadas a través del aplicativo SIIES y visita in situ)';
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
          <th scope="row" class="text-center">5</th>
          <td id="5">Lista certificada de los estudiantes por modalidad de estudio, carrera, semestre y jornada (matutina, vespertina y nocturna), matriculados en cada período académico del periodo de evaluación (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Lista certificada de los estudiantes por modalidad de estudio, carrera, semestre y jornada (matutina, vespertina y nocturna), matriculados en cada período académico del periodo de evaluación (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Lista certificada de los estudiantes por modalidad de estudio, carrera, semestre y jornada (matutina, vespertina y nocturna), matriculados en cada período académico del periodo de evaluación (captada a través del aplicativo SIIES)';
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
          <th scope="row" class="text-center">6</th>
          <td id="6">Planes de aprendizaje de los estudiantes participantes en los proyectos con su evaluación. (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Planes de aprendizaje de los estudiantes participantes en los proyectos con su evaluación. (visita in situ)';
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
              $evidencia = 'Planes de aprendizaje de los estudiantes participantes en los proyectos con su evaluación. (visita in situ)';
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
          <th scope="row" class="text-center">7</th>
          <td id="7">Entrevistas a estudiantes y profesores involucrados en programas y proyectos de vinculación con la sociedad (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Entrevistas a estudiantes y profesores involucrados en programas y proyectos de vinculación con la sociedad (visita in situ)';
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
              $evidencia = 'Entrevistas a estudiantes y profesores involucrados en programas y proyectos de vinculación con la sociedad (visita in situ)';
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
          <th scope="row" class="text-center">8</th>
          <td id="8">Normativa interna, aprobada y vigente, de vinculación con la sociedad (captada a través del aplicativo SIIES)</td> 
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Normativa interna, aprobada y vigente, de vinculación con la sociedad (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa interna, aprobada y vigente, de vinculación con la sociedad (captada a través del aplicativo SIIES)';
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
          <th scope="row" class="text-center">9</th>
          <td id="9">Evidencias de que tanto la planificación, como los resultados de los proyectos de vinculación con la sociedad han sido difundidos y debatidos en la comunidad académica y se han construido y evaluado con la participación de los beneficiarios (web institucional, informes, material audiovisual explícito, actas de reuniones, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Vinculación con la Sociedad') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Evidencias de que tanto la planificación, como los resultados de los proyectos de vinculación con la sociedad han sido difundidos y debatidos en la comunidad académica y se han construido y evaluado con la participación de los beneficiarios (web institucional, informes, material audiovisual explícito, actas de reuniones, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Evidencias de que tanto la planificación, como los resultados de los proyectos de vinculación con la sociedad han sido difundidos y debatidos en la comunidad académica y se han construido y evaluado con la participación de los beneficiarios (web institucional, informes, material audiovisual explícito, actas de reuniones, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)';
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
        <input type="hidden" id="rutainsert" value="planificacionvinculacion/calificacion/">
        <input type="hidden" id="rutaview" value="planificacionvinculacion/viewcalificacion/">
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
      <form id="form" action="planificacionvinculacion/insert/">
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
<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Organización</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Planificación y Desarrollo</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Relaciones Interinstitucionales para el Desarrollo</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Relaciones Interinstitucionales para el Desarrollo</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="relacionesinterinstitucionales/delete/">
      <input id="actionview" type="hidden" value="relacionesinterinstitucionales/view/">
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
          <td id="1">Plan Estratégico de Desarrollo Institucional y Plan o planes operativos anuales correspondientes (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { 
                $evidencia = 'Plan Estratégico de Desarrollo Institucional y Plan o planes operativos anuales correspondientes (captados a través del aplicativo SIIES)';
                $evidencias = Model::evidencias($evidencia);
                if(count($evidencias)==0){
                  ?>
                <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              <?php }                                     
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
              $evidencia = 'Plan Estratégico de Desarrollo Institucional y Plan o planes operativos anuales correspondientes (captados a través del aplicativo SIIES)';
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
          <td id="2">Planificación de cada una de las acciones de relaciones interinstitucionales, incluidas la planificación de actividades de las redes en las que participa el instituto (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { 
                $evidencia = 'Planificación de cada una de las acciones de relaciones interinstitucionales, incluidas la planificación de actividades de las redes en las que participa el instituto (captados a través del aplicativo SIIES)';
                $evidencias = Model::evidencias($evidencia);
                if(count($evidencias)==0){
                  ?>
                <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              <?php }                                     
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
              $evidencia = 'Planificación de cada una de las acciones de relaciones interinstitucionales, incluidas la planificación de actividades de las redes en las que participa el instituto (captados a través del aplicativo SIIES)';
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
          <td id="3">Sustentos de las necesidades institucionales a las que responde la planificación de la actividad de relaciones interinstitucionales, que deben estar en el diagnóstico del PEDI, eventualmente complementado con otros análisis. Debe constar el sustento de la elección de las contrapartes, en el caso de las relaciones bilaterales, de las acciones y de la idoneidad de los participantes por la institución (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Sustentos de las necesidades institucionales a las que responde la planificación de la actividad de relaciones interinstitucionales, que deben estar en el diagnóstico del PEDI, eventualmente complementado con otros análisis. Debe constar el sustento de la elección de las contrapartes, en el caso de las relaciones bilaterales, de las acciones y de la idoneidad de los participantes por la institución (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Sustentos de las necesidades institucionales a las que responde la planificación de la actividad de relaciones interinstitucionales, que deben estar en el diagnóstico del PEDI, eventualmente complementado con otros análisis. Debe constar el sustento de la elección de las contrapartes, en el caso de las relaciones bilaterales, de las acciones y de la idoneidad de los participantes por la institución (captados a través del aplicativo SIIES)';
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
          <td id="4">Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)';
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
          <td id="5">Evidencias de la ejecución y el resultado de las acciones de relaciones interinstitucionales (informes institucionales, informes personales de los participantes y de la contraparte, actas de encuentros de la red, testimonios de participantes institucionales y de la contraparte, productos de diferente naturaleza generados en las acciones, evidencias del uso de los elementos de infraestructura y equipos especializados, evidencia de las innovaciones introducidas, etc.) (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { 
                $evidencia = 'Evidencias de la ejecución y el resultado de las acciones de relaciones interinstitucionales (informes institucionales, informes personales de los participantes y de la contraparte, actas de encuentros de la red, testimonios de participantes institucionales y de la contraparte, productos de diferente naturaleza generados en las acciones, evidencias del uso de los elementos de infraestructura y equipos especializados, evidencia de las innovaciones introducidas, etc.) (captadas a través del aplicativo SIIES y visita in situ)';
                $evidencias = Model::evidencias($evidencia);
                if(count($evidencias)==0){
              ?>
                <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              <?php }                                    
                  foreach($evidencias as $row):   
                ?>                           
                  <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
                <?php endforeach; ?>
            </div>
            <td class="text-center">
              <button type="button" id="<?php echo Main::encryption($row->evidencia); ?>" class="btn btn-danger btn-sm" onclick="eliminar(this.id)"><i class="fa fa-trash" aria-hidden="true"></i></button>
              <?php } ?>
              <!-- Para el evaluador -->
              <?php if($_SESSION['tipousuario_sisgec']=='Evaluador') {           
                $evidencia = 'Evidencias de la ejecución y el resultado de las acciones de relaciones interinstitucionales (informes institucionales, informes personales de los participantes y de la contraparte, actas de encuentros de la red, testimonios de participantes institucionales y de la contraparte, productos de diferente naturaleza generados en las acciones, evidencias del uso de los elementos de infraestructura y equipos especializados, evidencia de las innovaciones introducidas, etc.) (captadas a través del aplicativo SIIES y visita in situ)';
                $evidencias = Model::evidencias($evidencia);
                foreach($evidencias as $row):   
                ?>                           
                  <button type="button" id="<?php echo $row->iddocumento; ?>" class="btn btn-warning" onclick="view(this.id);"><i class="fa-solid fa-eye"></i></button>
                <?php endforeach; ?> 
              <?php } ?>
              <!-- Fin Para el evaluador -->
            </td>
          </td>
        </tr>
        <tr>
          <th scope="row" class="text-center">6</th>
          <td id="6">Lista certificada de los profesores y estudiantes que participaron en cada acción de relaciones interinstitucionales de cualquier naturaleza (captada a través del aplicativo SIIES).</td>          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Lista certificada de los profesores y estudiantes que participaron en cada acción de relaciones interinstitucionales de cualquier naturaleza (captada a través del aplicativo SIIES).';
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
                $evidencia = 'Lista certificada de los profesores y estudiantes que participaron en cada acción de relaciones interinstitucionales de cualquier naturaleza (captada a través del aplicativo SIIES).';
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
          <td id="7">Normativa interna, aprobada y vigente, para el desarrollo de las relaciones interinstitucionales (captada a través del aplicativo SIIES)</td> 
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa interna, aprobada y vigente, para el desarrollo de las relaciones interinstitucionales (captada a través del aplicativo SIIES)';
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
                $evidencia = 'Normativa interna, aprobada y vigente, para el desarrollo de las relaciones interinstitucionales (captada a través del aplicativo SIIES)';
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
          <td id="8">Lista certificada de estudiantes presenciales que no desarrollan actividad laboral remunerada (captada a través del aplicativo SIIES).</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Lista certificada de estudiantes presenciales que no desarrollan actividad laboral remunerada (captada a través del aplicativo SIIES).';
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
              $evidencia = 'Lista certificada de estudiantes presenciales que no desarrollan actividad laboral remunerada (captada a través del aplicativo SIIES).';
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
          <td id="9">Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center" style="width:500px;>
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Instrumentos que formalizan las relaciones interinstitucionales (captados a través del aplicativo SIIES)';
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
        <input type="hidden" id="rutainsert" value="relacionesinterinstitucionales/calificacion/">
        <input type="hidden" id="rutaview" value="relacionesinterinstitucionales/viewcalificacion/">
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
      <form id="form" action="relacionesinterinstitucionales/insert/">
        <div class="modal-body">
          <div class="mb-3">
            <label id="evidencia" for="documento" class="form-label"></label>
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
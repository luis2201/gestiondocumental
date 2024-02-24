.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">I-D e Innovación</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">I+D y Publicaciones científicas y técnicas</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Investigación y Desarrollo</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Investigación y Desarrollo</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="investigaciondesarrollo/delete/">
      <input id="actionview" type="hidden" value="investigaciondesarrollo/view/">
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
          <td id="1">Plan Estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de I+D (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Plan Estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de I+D (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Plan Estratégico de Desarrollo Institucional (PEDI) y documentos complementarios que haya generado el instituto sobre la planificación de I+D (captados a través del aplicativo SIIES)';
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
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
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
          <td id="3">Documentos de los proyectos de I+D ejecutados o en ejecución durante el período de evaluación (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Documentos de los proyectos de I+D ejecutados o en ejecución durante el período de evaluación (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Documentos de los proyectos de I+D ejecutados o en ejecución durante el período de evaluación (captados a través del aplicativo SIIES)';
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
          <td id="4">Documentos de salida (informes institucionales oficiales, publicaciones técnicas y científicas generadas a partir de los resultados del trabajo, trabajos presentados en eventos científicos o tesis académicas) de los proyectos de I+D ejecutados (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Documentos de salida (informes institucionales oficiales, publicaciones técnicas y científicas generadas a partir de los resultados del trabajo, trabajos presentados en eventos científicos o tesis académicas) de los proyectos de I+D ejecutados (captados a través del aplicativo SIIES)';
                  $evidencias = Model::evidencias($evidencia);
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
              $evidencia = 'Documentos de salida (informes institucionales oficiales, publicaciones técnicas y científicas generadas a partir de los resultados del trabajo, trabajos presentados en eventos científicos o tesis académicas) de los proyectos de I+D ejecutados (captados a través del aplicativo SIIES)';
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
          <td id="5">Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de I+D y dela participación de los estudiantes en estos (actas, informes, testimonios, etc.) (captadas a través del aplicativo SIIES) (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de I+D y dela participación de los estudiantes en estos (actas, informes, testimonios, etc.) (captadas a través del aplicativo SIIES) (visita in situ)';
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
              $evidencia = 'Evidencias del seguimiento, control y evaluación de la ejecución de los proyectos de I+D y dela participación de los estudiantes en estos (actas, informes, testimonios, etc.) (captadas a través del aplicativo SIIES) (visita in situ)';
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
          <td id="6">Normativa interna sobre I+D (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Normativa interna sobre I+D (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa interna sobre I+D (captada a través del aplicativo SIIES)';
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
          <td id="7">Evidencias del análisis en la comunidad académica del instituto de las propuestas de la planificación de I+D (líneas y programas) (actas de reuniones, testimonios, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES) (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Evidencias del análisis en la comunidad académica del instituto de las propuestas de la planificación de I+D (líneas y programas) (actas de reuniones, testimonios, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES) (visita in situ)';
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
              $evidencia = 'Evidencias del análisis en la comunidad académica del instituto de las propuestas de la planificación de I+D (líneas y programas) (actas de reuniones, testimonios, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES) (visita in situ)';
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
          <td id="8">Entrevistas a responsables de líneas, programas y proyectos de I+D (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Entrevistas a responsables de líneas, programas y proyectos de I+D (visita in situ)';
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
              $evidencia = 'Entrevistas a responsables de líneas, programas y proyectos de I+D (visita in situ)';
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
          <td id="9">Evidencias del análisis en la comunidad académica del instituto o de la carrera de los proyectos de I+D y de los resultados de su ejecución (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Evidencias del análisis en la comunidad académica del instituto o de la carrera de los proyectos de I+D y de los resultados de su ejecución (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias del análisis en la comunidad académica del instituto o de la carrera de los proyectos de I+D y de los resultados de su ejecución (captadas a través del aplicativo SIIES)';
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
          <th scope="row" class="text-center">10</th>
          <td id="10">Web institucional (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(10);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Web institucional (visita in situ)';
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
              $evidencia = 'Web institucional (visita in situ)';
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
          <th scope="row" class="text-center">11</th>
          <td id="11">Visita a la biblioteca (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(11);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Visita a la biblioteca (visita in situ)';
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
              $evidencia = 'Visita a la biblioteca (visita in situ)';
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
          <th scope="row" class="text-center">12</th>
          <td id="12">Planes de aprendizaje de los estudiantes participantes en los proyectos de I+D con su evaluación (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(12);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Planes de aprendizaje de los estudiantes participantes en los proyectos de I+D con su evaluación (visita in situ)';
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
              $evidencia = 'Planes de aprendizaje de los estudiantes participantes en los proyectos de I+D con su evaluación (visita in situ)';
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
          <th scope="row" class="text-center">13</th>
          <td id="13">Entrevistas a estudiantes participantes en proyectos de I+D (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='I-D e Innovación') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(13);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                  $evidencia = 'Entrevistas a estudiantes participantes en proyectos de I+D (visita in situ)';
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
              $evidencia = 'Entrevistas a estudiantes participantes en proyectos de I+D (visita in situ)';
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
        <input type="hidden" id="rutainsert" value="investigaciondesarrollo/calificacion/">
        <input type="hidden" id="rutaview" value="investigaciondesarrollo/viewcalificacion/">
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
      <form id="form" action="investigaciondesarrollo/insert/">
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
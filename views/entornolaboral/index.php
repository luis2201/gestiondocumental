.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Docencia</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Formación Práctica</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Formación Práctica en el Entorno Laboral Real</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Formación Práctica en el Entorno Laboral Real</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="entornolaboral/delete/">
      <input id="actionview" type="hidden" value="entornolaboral/view/">
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
          <td id="1">Documentos formales de los acuerdos suscritos con las entidades formadoras, que deben ser convenios en el caso de la MFD, ya sea con entidades formadoras y, si corresponde, con las cámaras de producción o comercio (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Documentos formales de los acuerdos suscritos con las entidades formadoras, que deben ser convenios en el caso de la MFD, ya sea con entidades formadoras y, si corresponde, con las cámaras de producción o comercio (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Documentos formales de los acuerdos suscritos con las entidades formadoras, que deben ser convenios en el caso de la MFD, ya sea con entidades formadoras y, si corresponde, con las cámaras de producción o comercio (captados a través del aplicativo SIIES)';
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
          <td id="2">Plan de Aprendizaje Práctico y de Rotación (PAPR) de los estudiantes (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Plan de Aprendizaje Práctico y de Rotación (PAPR) de los estudiantes (visita in situ)';
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
              $evidencia = 'Plan de Aprendizaje Práctico y de Rotación (PAPR) de los estudiantes (visita in situ)';
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
          <td id="3">Evidencias del seguimiento y control a los estudiantes en los períodos de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ).</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias del seguimiento y control a los estudiantes en los períodos de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ).';
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
              $evidencia = 'Evidencias del seguimiento y control a los estudiantes en los períodos de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ).';
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
          <td id="4">Documentación relacionada con la evaluación de los estudiantes en la formación práctica en el entorno laboral real (evaluación del periodo de práctica, defensa de informes, defensa de Proyectos empresariales (MFD), examen intermedio (MFD), examen final (MFD), etc. En el caso de los exámenes intermedio y final (MFD) presentar la documentación de los exámenes correspondientes a la última convocatoria en cada caso, aunque sea anterior al período de evaluación (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Documentación relacionada con la evaluación de los estudiantes en la formación práctica en el entorno laboral real (evaluación del periodo de práctica, defensa de informes, defensa de Proyectos empresariales (MFD), examen intermedio (MFD), examen final (MFD), etc. En el caso de los exámenes intermedio y final (MFD) presentar la documentación de los exámenes correspondientes a la última convocatoria en cada caso, aunque sea anterior al período de evaluación (visita in situ)';
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
              $evidencia = 'Documentación relacionada con la evaluación de los estudiantes en la formación práctica en el entorno laboral real (evaluación del periodo de práctica, defensa de informes, defensa de Proyectos empresariales (MFD), examen intermedio (MFD), examen final (MFD), etc. En el caso de los exámenes intermedio y final (MFD) presentar la documentación de los exámenes correspondientes a la última convocatoria en cada caso, aunque sea anterior al período de evaluación (visita in situ)';
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
          <td id="5">Entrevistas a estudiantes, tutores académicos, tutores de entidades formadoras y directores/coordinadores de carrera (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Entrevistas a estudiantes, tutores académicos, tutores de entidades formadoras y directores/coordinadores de carrera (visita in situ)';
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
              $evidencia = 'Entrevistas a estudiantes, tutores académicos, tutores de entidades formadoras y directores/coordinadores de carrera (visita in situ)';
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
          <td id="6">Documentos elaborados por los estudiantes (informes de prácticas, proyectos empresariales (MFD), etc.) (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>              
              <?php                                     
                $evidencia = 'Documentos elaborados por los estudiantes (informes de prácticas, proyectos empresariales (MFD), etc.) (visita in situ)';
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
              $evidencia = 'Documentos elaborados por los estudiantes (informes de prácticas, proyectos empresariales (MFD), etc.) (visita in situ)';
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
          <td id="7">Actas de entrega a los estudiantes de las orientaciones sobre seguridad y de los medios de protección correspondientes (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Actas de entrega a los estudiantes de las orientaciones sobre seguridad y de los medios de protección correspondientes (visita in situ)';
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
              $evidencia = 'Actas de entrega a los estudiantes de las orientaciones sobre seguridad y de los medios de protección correspondientes (visita in situ)';
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
          <td id="8">Normativa interna del sistema de formación práctica en el entorno laboral real (MO en el caso de la MFD) (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa interna del sistema de formación práctica en el entorno laboral real (MO en el caso de la MFD) (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa interna del sistema de formación práctica en el entorno laboral real (MO en el caso de la MFD) (captada a través del aplicativo SIIES)';
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
          <td id="9">Documentación de las entidades formadoras según lo indicado en la Descripción (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Documentación de las entidades formadoras según lo indicado en la Descripción (visita in situ)';
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
              $evidencia = 'Documentación de las entidades formadoras según lo indicado en la Descripción (visita in situ)';
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
          <td id="10">Certificados de aprobación por tutores empresariales del Curso de Formación de Tutores en Modalidad de Formación Dual y documentos que avalen la interacción del instituto con las entidades formadoras, a efectos de que los tutores de la entidad formadora sigan el citado curso. Evidencias de la capacitación a los tutores académicos (captados a través de aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(10);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Certificados de aprobación por tutores empresariales del Curso de Formación de Tutores en Modalidad de Formación Dual y documentos que avalen la interacción del instituto con las entidades formadoras, a efectos de que los tutores de la entidad formadora sigan el citado curso. Evidencias de la capacitación a los tutores académicos (captados a través de aplicativo SIIES)';
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
              $evidencia = 'Certificados de aprobación por tutores empresariales del Curso de Formación de Tutores en Modalidad de Formación Dual y documentos que avalen la interacción del instituto con las entidades formadoras, a efectos de que los tutores de la entidad formadora sigan el citado curso. Evidencias de la capacitación a los tutores académicos (captados a través de aplicativo SIIES)';
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
          <td id="11">Evidencias del seguimiento, control y evaluación por el instituto del proceso de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través de aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(11);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias del seguimiento, control y evaluación por el instituto del proceso de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través de aplicativo SIIES)';
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
              $evidencia = 'Evidencias del seguimiento, control y evaluación por el instituto del proceso de formación práctica en el entorno laboral real (informes, actas, entrevistas, etc.) (captadas a través de aplicativo SIIES)';
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
          <td id="12">Bitácoras de los estudiantes en formación práctica en el entorno laboral real (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(12);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Bitácoras de los estudiantes en formación práctica en el entorno laboral real (visita in situ)';
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
              $evidencia = 'Bitácoras de los estudiantes en formación práctica en el entorno laboral real (visita in situ)';
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
        <input type="hidden" id="rutainsert" value="entornolaboral/calificacion/">
        <input type="hidden" id="rutaview" value="entornolaboral/viewcalificacion/">
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
      <form id="form" action="entornolaboral/insert/">
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
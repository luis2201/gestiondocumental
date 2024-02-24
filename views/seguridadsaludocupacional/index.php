<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Infraestructura</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Infraestructura Básica</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Seguridad y Salud Ocupacional</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Seguridad y Salud Ocupacional</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="seguridadsaludocupacional/delete/">
      <input id="actionview" type="hidden" value="seguridadsaludocupacional/view/"> 
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
          <th scope="row">1</th>
          <td id="1">Normativa interna de seguridad y salud laboral y plan de emergencias aprobados y vigentes (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa interna de seguridad y salud laboral y plan de emergencias aprobados y vigentes (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa interna de seguridad y salud laboral y plan de emergencias aprobados y vigentes (captados a través del aplicativo SIIES)';
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
          <th scope="row">2</th>
          <td id="2">Matriz de riesgos (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Matriz de riesgos (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Matriz de riesgos (captada a través del aplicativo SIIES)';
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
          <th scope="row">3</th>
          <td id="3">Evidencias sobre las capacitaciones realizadas con la comunidad educativa sobre riesgos laborales, emergencias y desastres (planificación, registros de asistencia, presentaciones, fotos, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias sobre las capacitaciones realizadas con la comunidad educativa sobre riesgos laborales, emergencias y desastres (planificación, registros de asistencia, presentaciones, fotos, etc.) (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias sobre las capacitaciones realizadas con la comunidad educativa sobre riesgos laborales, emergencias y desastres (planificación, registros de asistencia, presentaciones, fotos, etc.) (captadas a través del aplicativo SIIES)';
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
          <th scope="row">4</th>
          <td id="4">Evidencias de que los miembros de la institución conocen los riesgos a los que están expuestos, cómo actuar frente a ellos, así como sus deberes y responsabilidades en materia de seguridad y salud ocupacional (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de que los miembros de la institución conocen los riesgos a los que están expuestos, cómo actuar frente a ellos, así como sus deberes y responsabilidades en materia de seguridad y salud ocupacional (visita in situ)';
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
              $evidencia = 'Evidencias de que los miembros de la institución conocen los riesgos a los que están expuestos, cómo actuar frente a ellos, así como sus deberes y responsabilidades en materia de seguridad y salud ocupacional (visita in situ)';
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
          <th scope="row">5</th>
          <td id="5">Evidencias de las medidas de prevención adoptadas y de los recursos disponibles para hacer frente a emergencias y desastres (personal capacitado, instalaciones, equipamiento, insumos, entre otros) (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de las medidas de prevención adoptadas y de los recursos disponibles para hacer frente a emergencias y desastres (personal capacitado, instalaciones, equipamiento, insumos, entre otros) (visita in situ)';
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
              $evidencia = 'Evidencias de las medidas de prevención adoptadas y de los recursos disponibles para hacer frente a emergencias y desastres (personal capacitado, instalaciones, equipamiento, insumos, entre otros) (visita in situ)';
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
          <th scope="row">6</th>
          <td id="6">Evidencias de actividades de preparación para hacer frente a emergencias y desastres (planificación, registros de asistencia, videos de los simulacros, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de actividades de preparación para hacer frente a emergencias y desastres (planificación, registros de asistencia, videos de los simulacros, etc.) (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias de actividades de preparación para hacer frente a emergencias y desastres (planificación, registros de asistencia, videos de los simulacros, etc.) (captadas a través del aplicativo SIIES)';
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
          <th scope="row">7</th>
          <td id="7">Botiquín de primeros auxilios, enfermería o servicio médico, o el convenio correspondiente para enfermería y servicio médico (visita in situ) (captado a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Botiquín de primeros auxilios, enfermería o servicio médico, o el convenio correspondiente para enfermería y servicio médico (visita in situ) (captado a través del aplicativo SIIES)';
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
              $evidencia = 'Botiquín de primeros auxilios, enfermería o servicio médico, o el convenio correspondiente para enfermería y servicio médico (visita in situ) (captado a través del aplicativo SIIES)';
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
          <th scope="row">8</th>
          <td id="8">Si existiera, proceso de producción de alimentos y otros productos para consumo interno y/o externo (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Si existiera, proceso de producción de alimentos y otros productos para consumo interno y/o externo (visita in situ)';
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
              $evidencia = 'Si existiera, proceso de producción de alimentos y otros productos para consumo interno y/o externo (visita in situ)';
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
          <th scope="row">9</th>
          <td id="9">Registros de inspecciones de seguridad (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Registros de inspecciones de seguridad (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Registros de inspecciones de seguridad (captados a través del aplicativo SIIES)';
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
          <th scope="row">10</th>
          <td id="10">Evidencias de que el instituto ha creado condiciones en sus espacios para reducir la posibilidad de contagio de enfermedades trasmisibles por vía respiratoria o alimentaria (por ejemplo, disponibilidad adecuada de lavamanos con jabón, higiene de los alimentos en la cafetería, etc.) y hace la labor educativa necesaria al respecto (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(10);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de que el instituto ha creado condiciones en sus espacios para reducir la posibilidad de contagio de enfermedades trasmisibles por vía respiratoria o alimentaria (por ejemplo, disponibilidad adecuada de lavamanos con jabón, higiene de los alimentos en la cafetería, etc.) y hace la labor educativa necesaria al respecto (visita in situ)';
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
              $evidencia = 'Evidencias de que el instituto ha creado condiciones en sus espacios para reducir la posibilidad de contagio de enfermedades trasmisibles por vía respiratoria o alimentaria (por ejemplo, disponibilidad adecuada de lavamanos con jabón, higiene de los alimentos en la cafetería, etc.) y hace la labor educativa necesaria al respecto (visita in situ)';
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
          <th scope="row">11</th>
          <td id="11">Evidencias de que el instituto ha creado las condiciones necesarias en sus espacios para promover un estilo de vida saludable entre los miembros de la comunidad educativa (áreas de ejercicios, frutas y verduras frescas en la cafetería, espacios libres de humo, etc.) y hace la labor educativa necesaria al respecto (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Infraestructura') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(11);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de que el instituto ha creado las condiciones necesarias en sus espacios para promover un estilo de vida saludable entre los miembros de la comunidad educativa (áreas de ejercicios, frutas y verduras frescas en la cafetería, espacios libres de humo, etc.) y hace la labor educativa necesaria al respecto (visita in situ)';
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
              $evidencia = 'Evidencias de que el instituto ha creado las condiciones necesarias en sus espacios para promover un estilo de vida saludable entre los miembros de la comunidad educativa (áreas de ejercicios, frutas y verduras frescas en la cafetería, espacios libres de humo, etc.) y hace la labor educativa necesaria al respecto (visita in situ)';
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
        <input type="hidden" id="rutainsert" value="seguridadsaludocupacional/calificacion/">
        <input type="hidden" id="rutaview" value="seguridadsaludocupacional/viewcalificacion/">
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
      <form id="form" action="seguridadsaludocupacional/insert/">
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
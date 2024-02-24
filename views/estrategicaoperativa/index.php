<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Organización</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Planificación y Desarrollo</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Planificación Estratégica y Operativa</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Planificación Estratégica y Operativa</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="estrategicaoperativa/delete/">
      <input id="actionview" type="hidden" value="estrategicaoperativa/view/">
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
          <td id="1">Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ';
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
              $evidencia = 'Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ';
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
          <td id="2">PEDI aprobado y vigente durante el periodo de evaluación (captado a través del aplicativo SIIES).</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'PEDI aprobado y vigente durante el periodo de evaluación (captado a través del aplicativo SIIES).';
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
              $evidencia = 'PEDI aprobado y vigente durante el periodo de evaluación (captado a través del aplicativo SIIES).';
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
          <td id="3">El o los POA correspondientes al período de evaluación (captado a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'El o los POA correspondientes al período de evaluación (captado a través del aplicativo SIIES)';
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
              $evidencia = 'El o los POA correspondientes al período de evaluación (captado a través del aplicativo SIIES)';
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
          <td id="4">Evidencias del control y evaluación del cumplimento del POA (actas o informes de las acciones de control con sus resultados, informes de evaluación, actas de reuniones, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias del control y evaluación del cumplimento del POA (actas o informes de las acciones de control con sus resultados, informes de evaluación, actas de reuniones, etc.) (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias del control y evaluación del cumplimento del POA (actas o informes de las acciones de control con sus resultados, informes de evaluación, actas de reuniones, etc.) (captadas a través del aplicativo SIIES)';
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
          <td id="5">Normativa interna sobre el sistema de planificación (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa interna sobre el sistema de planificación (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa interna sobre el sistema de planificación (captada a través del aplicativo SIIES)';
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
          <th scope="row">6</th>
          <td id="6">Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ).</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ).';
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
              $evidencia = 'Evidencias de la construcción y/o actualización de la planificación estratégica, incluido el diagnóstico, y de la participación en ese proceso de actores relevantes del entorno y de representantes de las dependencias institucionales y otros actores institucionales relevantes (actas de encuentros, audios de entrevistas, videos, estudios con sus referencias, documentos con los aportes de los actores, encuestas, convocatorias, etc.). Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ).';
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
          <td id="7">Evidencias de modificaciones de la planificación (PEDI y/o POA) a efectos de su actualización, (documento del proponente con la sustentación de la propuesta, acta de su discusión, documento de autorización, etc.) (captado a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de modificaciones de la planificación (PEDI y/o POA) a efectos de su actualización, (documento del proponente con la sustentación de la propuesta, acta de su discusión, documento de autorización, etc.) (captado a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias de modificaciones de la planificación (PEDI y/o POA) a efectos de su actualización, (documento del proponente con la sustentación de la propuesta, acta de su discusión, documento de autorización, etc.) (captado a través del aplicativo SIIES)';
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
          <th scope="row">8</th>
          <td id="8">Entrevistas al responsable institucional encargado del sistema de planificación y a los responsables de áreas (directores/coordinadores de carrera, responsables por funciones sustantivas, etc.) (visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Entrevistas al responsable institucional encargado del sistema de planificación y a los responsables de áreas (directores/coordinadores de carrera, responsables por funciones sustantivas, etc.) (visita in situ)';
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
              $evidencia = 'Entrevistas al responsable institucional encargado del sistema de planificación y a los responsables de áreas (directores/coordinadores de carrera, responsables por funciones sustantivas, etc.) (visita in situ)';
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
          <th scope="row">9</th>
          <td id="9">Evidencias de las acciones de divulgación de los aspectos referidos al sistema de planificación y del conocimiento de este por parte de los miembros de la comunidad educativa (web institucional, información gráfica, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Organización') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(9);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de las acciones de divulgación de los aspectos referidos al sistema de planificación y del conocimiento de este por parte de los miembros de la comunidad educativa (web institucional, información gráfica, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Evidencias de las acciones de divulgación de los aspectos referidos al sistema de planificación y del conocimiento de este por parte de los miembros de la comunidad educativa (web institucional, información gráfica, entrevistas, etc.) (captadas a través del aplicativo SIIES y visita in situ)';
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
        <input type="hidden" id="rutainsert" value="estrategicaoperativa/calificacion/">
        <input type="hidden" id="rutaview" value="estrategicaoperativa/viewcalificacion/">
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
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-text="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Subir documento al sistema</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form" action="estrategicaoperativa/insert/">
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
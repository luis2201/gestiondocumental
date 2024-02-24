.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Docencia</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Formación Académica</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Relación con los Graduados</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Relación con los Graduados</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="relaciongraduados/delete/">
      <input id="actionview" type="hidden" value="relaciongraduados/view/">
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
          <td id="1">Base de datos de los graduados en la que consta información general, localización, datos laborales y estudios posteriores de al menos las últimas tres cohortes concluidas antes del inicio de la evaluación (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Base de datos de los graduados en la que consta información general, localización, datos laborales y estudios posteriores de al menos las últimas tres cohortes concluidas antes del inicio de la evaluación (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Base de datos de los graduados en la que consta información general, localización, datos laborales y estudios posteriores de al menos las últimas tres cohortes concluidas antes del inicio de la evaluación (captada a través del aplicativo SIIES)';
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
          <td id="2">Instrumentos aplicados con la información captada de los graduados y empleadores. (Actas dereuniones suscritas, encuestas llenadas, etc.) (visita in situ)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Instrumentos aplicados con la información captada de los graduados y empleadores. (Actas dereuniones suscritas, encuestas llenadas, etc.) (visita in situ)';
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
              $evidencia = 'Instrumentos aplicados con la información captada de los graduados y empleadores. (Actas dereuniones suscritas, encuestas llenadas, etc.) (visita in situ)';
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
          <td id="3">Instrumentos que se utilizan para obtener información de los graduados y empleadores. (formatos de actas de reuniones, encuestas, formularios, etc.) (captados a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Instrumentos que se utilizan para obtener información de los graduados y empleadores. (formatos de actas de reuniones, encuestas, formularios, etc.) (captados a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Instrumentos que se utilizan para obtener información de los graduados y empleadores. (formatos de actas de reuniones, encuestas, formularios, etc.) (captados a través del aplicativo SIIES y visita in situ)';
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
          <td id="4">Evidencias de que la información obtenida de graduados y empleadores ha sido procesada, analizada y utilizada para mejorar el diseño curricular y el desarrollo del proceso de formación (informes, actas de reuniones, comunicación a los interesados de los cambios adoptados, entrevistas a actores, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de que la información obtenida de graduados y empleadores ha sido procesada, analizada y utilizada para mejorar el diseño curricular y el desarrollo del proceso de formación (informes, actas de reuniones, comunicación a los interesados de los cambios adoptados, entrevistas a actores, etc.) (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias de que la información obtenida de graduados y empleadores ha sido procesada, analizada y utilizada para mejorar el diseño curricular y el desarrollo del proceso de formación (informes, actas de reuniones, comunicación a los interesados de los cambios adoptados, entrevistas a actores, etc.) (captadas a través del aplicativo SIIES)';
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
          <td id="5">Evidencias de las acciones realizadas para contribuir a la actualización de conocimientos, el dominio de nuevas tecnologías, la especialización en determinados aspectos de la profesión, la generación de emprendimientos, el desarrollo empresarial y, en general, al desarrollo profesional de los graduados (planificación y certificados de cursos de formación continua, programas de posgrado creados por la institución, etc.) (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de las acciones realizadas para contribuir a la actualización de conocimientos, el dominio de nuevas tecnologías, la especialización en determinados aspectos de la profesión, la generación de emprendimientos, el desarrollo empresarial y, en general, al desarrollo profesional de los graduados (planificación y certificados de cursos de formación continua, programas de posgrado creados por la institución, etc.) (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias de las acciones realizadas para contribuir a la actualización de conocimientos, el dominio de nuevas tecnologías, la especialización en determinados aspectos de la profesión, la generación de emprendimientos, el desarrollo empresarial y, en general, al desarrollo profesional de los graduados (planificación y certificados de cursos de formación continua, programas de posgrado creados por la institución, etc.) (captadas a través del aplicativo SIIES)';
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
          <td id="6">Normativa institucional interna aprobada y vigente del seguimiento y relación con los graduados (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(6);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Normativa institucional interna aprobada y vigente del seguimiento y relación con los graduados (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Normativa institucional interna aprobada y vigente del seguimiento y relación con los graduados (captada a través del aplicativo SIIES)';
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
          <td id="7">Evidencias de los esfuerzos realizados por la institución para facilitar la ubicación laboral de los graduados (material audiovisual explícito, web institucional, correos electrónicos, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(7);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de los esfuerzos realizados por la institución para facilitar la ubicación laboral de los graduados (material audiovisual explícito, web institucional, correos electrónicos, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Evidencias de los esfuerzos realizados por la institución para facilitar la ubicación laboral de los graduados (material audiovisual explícito, web institucional, correos electrónicos, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES)';
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
          <td id="8">Evidencias de la participación de los graduados en actividades académicas (certificados de participación) y no académicas (documentos de constitución de asociación de graduados, actas de reuniones, etc.) y de la difusión que se hace de sus logros (publicaciones impresas o digitales, reconocimientos, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(8);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Evidencias de la participación de los graduados en actividades académicas (certificados de participación) y no académicas (documentos de constitución de asociación de graduados, actas de reuniones, etc.) y de la difusión que se hace de sus logros (publicaciones impresas o digitales, reconocimientos, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Evidencias de la participación de los graduados en actividades académicas (certificados de participación) y no académicas (documentos de constitución de asociación de graduados, actas de reuniones, etc.) y de la difusión que se hace de sus logros (publicaciones impresas o digitales, reconocimientos, material audiovisual explícito, etc.) Los registros en audio y video deben cumplir con lo establecido en el Art. 178 del COIP (captadas a través del aplicativo SIIES y visita in situ)';
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
        <input type="hidden" id="rutainsert" value="relaciongraduados/calificacion/">
        <input type="hidden" id="rutaview" value="relaciongraduados/viewcalificacion/">
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
      <form id="form" action="relaciongraduados/insert/">
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

<?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>.<div class="container container-fluid">
    <!-- Breadcrumb -->
<?php } ?>
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Docencia</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Formación Académica</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Publicaciones Docentes</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Publicaciones Docentes</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="planificacionesdocentes/delete/">
      <input id="actionview" type="hidden" value="planificacionesdocentes/view/">
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
          <td id="1">Versión digital en formato PDF de la publicación ya editorializada, según los requisitos indicados en la Descripción. Si no se dispusiera de versiones digitales, escanear la versión impresa y subirla. En los casos de documentos sin versión digital y que cuenten con un elevado número de páginas (más de 30) se revisará el documento impreso durante la visita in situ, siempre en versiones editorializadas (captadas a través del aplicativo SIIES y visita in situ)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>              
                <?php                                     
                  $evidencia = 'Versión digital en formato PDF de la publicación ya editorializada, según los requisitos indicados en la Descripción. Si no se dispusiera de versiones digitales, escanear la versión impresa y subirla. En los casos de documentos sin versión digital y que cuenten con un elevado número de páginas (más de 30) se revisará el documento impreso durante la visita in situ, siempre en versiones editorializadas (captadas a través del aplicativo SIIES y visita in situ)';
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
              $evidencia = 'Versión digital en formato PDF de la publicación ya editorializada, según los requisitos indicados en la Descripción. Si no se dispusiera de versiones digitales, escanear la versión impresa y subirla. En los casos de documentos sin versión digital y que cuenten con un elevado número de páginas (más de 30) se revisará el documento impreso durante la visita in situ, siempre en versiones editorializadas (captadas a través del aplicativo SIIES y visita in situ)';
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
          <td id="2">Certificación institucional, sobre cada publicación docente, en la que se indique el intervalo de fechas aproximado (mes y año al menos) en el que se elaboró la publicación (captadas a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Certificación institucional, sobre cada publicación docente, en la que se indique el intervalo de fechas aproximado (mes y año al menos) en el que se elaboró la publicación (captadas a través del aplicativo SIIES)';
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
              $evidencia = 'Certificación institucional, sobre cada publicación docente, en la que se indique el intervalo de fechas aproximado (mes y año al menos) en el que se elaboró la publicación (captadas a través del aplicativo SIIES)';
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
          <td id="3">Contratos de los profesores que pertenecieron a la institución durante el periodo de evaluación estándar y contratos de los profesores que son autores de publicaciones docentes que ya no laboran en la institución, a efecto de probar que el profesor estaba contratado en el instituto cuando se produjo la obra (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Contratos de los profesores que pertenecieron a la institución durante el periodo de evaluación estándar y contratos de los profesores que son autores de publicaciones docentes que ya no laboran en la institución, a efecto de probar que el profesor estaba contratado en el instituto cuando se produjo la obra (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Contratos de los profesores que pertenecieron a la institución durante el periodo de evaluación estándar y contratos de los profesores que son autores de publicaciones docentes que ya no laboran en la institución, a efecto de probar que el profesor estaba contratado en el instituto cuando se produjo la obra (captados a través del aplicativo SIIES)';
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
          <td id="4">Documentos que sustentan el apoyo institucional en el caso de las publicaciones en que no es evidente, en los créditos de la obra, la pertenencia de esta al instituto, o a los institutos que colaboraron en su elaboración. Estos sustentos pueden ser facturas explícitas, a nombre de la institución, referidas al pago por la autoría, edición, impresión, etc., o certificación, con los atributos de autenticidad habituales, firmada por la autoridad del ISTT y el autor (es) de la 111 publicación, en la que se declara el periodo en que se generó la publicación y se describe el apoyo concreto que brindó la institución a la misma (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(4);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Documentos que sustentan el apoyo institucional en el caso de las publicaciones en que no es evidente, en los créditos de la obra, la pertenencia de esta al instituto, o a los institutos que colaboraron en su elaboración. Estos sustentos pueden ser facturas explícitas, a nombre de la institución, referidas al pago por la autoría, edición, impresión, etc., o certificación, con los atributos de autenticidad habituales, firmada por la autoridad del ISTT y el autor (es) de la 111 publicación, en la que se declara el periodo en que se generó la publicación y se describe el apoyo concreto que brindó la institución a la misma (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Documentos que sustentan el apoyo institucional en el caso de las publicaciones en que no es evidente, en los créditos de la obra, la pertenencia de esta al instituto, o a los institutos que colaboraron en su elaboración. Estos sustentos pueden ser facturas explícitas, a nombre de la institución, referidas al pago por la autoría, edición, impresión, etc., o certificación, con los atributos de autenticidad habituales, firmada por la autoridad del ISTT y el autor (es) de la 111 publicación, en la que se declara el periodo en que se generó la publicación y se describe el apoyo concreto que brindó la institución a la misma (captados a través del aplicativo SIIES)';
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
          <td id="5">Convenio, certificación interinstitucional o equivalente, sobre la existencia, composición, distribución de tareas, etc. de los colectivos interinstitucionales de autores, en los casos que corresponda (captados a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Docencia') { ?>
                <button type="button" class="btn btn-primary" onclick="modal(5);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
                <?php                                     
                  $evidencia = 'Convenio, certificación interinstitucional o equivalente, sobre la existencia, composición, distribución de tareas, etc. de los colectivos interinstitucionales de autores, en los casos que corresponda (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Convenio, certificación interinstitucional o equivalente, sobre la existencia, composición, distribución de tareas, etc. de los colectivos interinstitucionales de autores, en los casos que corresponda (captados a través del aplicativo SIIES)';
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
        <input type="hidden" id="rutainsert" value="planificacionesdocentes/calificacion/">
        <input type="hidden" id="rutaview" value="planificacionesdocentes/viewcalificacion/">
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
      <form id="form" action="planificacionesdocentes/insert/">
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
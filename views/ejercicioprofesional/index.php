<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Profesores</a></li>
        <li class="breadcrumb-item"><a id="subcriterio" href="#">Selección y Formación Previa</a></li>
        <li class="breadcrumb-item active" id="indicador" aria-current="page">Ejercicio Profesional Práctico de Profesores MT y TP de Contenidos Profesionales</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Ejercicio Profesional Práctico de Profesores MT y TP de Contenidos Profesionales</h5>
    </div>
    <div class="card-body">
      <input id="actioneliminar" type="hidden" value="ejercicioprofesional/delete/">
      <input id="actionview" type="hidden" value="ejercicioprofesional/view/">
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
          <td id="1">Lista certificada de los profesores de contenidos profesionales en que se indique de cada uno el tiempo de dedicación y la actividad que justifica su condición de profesor de contenidos profesionales (asignaturas que dicta, labor que desarrolla en la unidad de integración curricular, etc.) (captada a través del aplicativo SIIES)</td>
          
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(1);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Lista certificada de los profesores de contenidos profesionales en que se indique de cada uno el tiempo de dedicación y la actividad que justifica su condición de profesor de contenidos profesionales (asignaturas que dicta, labor que desarrolla en la unidad de integración curricular, etc.) (captada a través del aplicativo SIIES)';
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
              $evidencia = 'Lista certificada de los profesores de contenidos profesionales en que se indique de cada uno el tiempo de dedicación y la actividad que justifica su condición de profesor de contenidos profesionales (asignaturas que dicta, labor que desarrolla en la unidad de integración curricular, etc.) (captada a través del aplicativo SIIES)';
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
          <td id="2">Certificados de actividad laboral para acreditar ejercicio profesional práctico, que deben tener la siguiente información y características: (captados a través del aplicativo SIIES)</td>
          <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(2);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'Certificados de actividad laboral para acreditar ejercicio profesional práctico, que deben tener la siguiente información y características: (captados a través del aplicativo SIIES)';
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
              $evidencia = 'Certificados de actividad laboral para acreditar ejercicio profesional práctico, que deben tener la siguiente información y características: (captados a través del aplicativo SIIES)';
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
          <td id="3">En el caso de profesores cuyo ejercicio profesional se ha desarrollado permanentemente o por períodos en condición de contratación por servicios profesionales (sin relación de dependencia), pueden obrar como evidencias del ejercicio profesional práctico el contrato correspondiente a cada servicio prestado, acompañado de la factura del pago por el mismo o el informe final del trabajo realizado con el recibido del contratante. Los contratos deben reunir los requisitos ya indicados para este tipo de documento, especialmente la descripción de las tareas objeto del mismo y las fechas que permitan determinar la duración del período de ejecución (captados a través del aplicativo SIIES). Asimismo, en el caso de ejercicio profesional práctico realizado en una empresa que es o fue propiedad del profesor, se debe presentar una autocertificación, acompañada de la copia del RUC de la empresa</td>
         <td class="text-center">
            <div class="col" role="group" aria-label="Basic example">
              <?php if($_SESSION['tipousuario_sisgec']=='Profesores') { ?>
              <button type="button" class="btn btn-primary" onclick="modal(3);"><i class="fa-solid fa-file-arrow-up"></i></button>
              
              <?php                                     
                $evidencia = 'En el caso de profesores cuyo ejercicio profesional se ha desarrollado permanentemente o por períodos en condición de contratación por servicios profesionales (sin relación de dependencia), pueden obrar como evidencias del ejercicio profesional práctico el contrato correspondiente a cada servicio prestado, acompañado de la factura del pago por el mismo o el informe final del trabajo realizado con el recibido del contratante. Los contratos deben reunir los requisitos ya indicados para este tipo de documento, especialmente la descripción de las tareas objeto del mismo y las fechas que permitan determinar la duración del período de ejecución (captados a través del aplicativo SIIES). Asimismo, en el caso de ejercicio profesional práctico realizado en una empresa que es o fue propiedad del profesor, se debe presentar una autocertificación, acompañada de la copia del RUC de la empresa';
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
              $evidencia = 'En el caso de profesores cuyo ejercicio profesional se ha desarrollado permanentemente o por períodos en condición de contratación por servicios profesionales (sin relación de dependencia), pueden obrar como evidencias del ejercicio profesional práctico el contrato correspondiente a cada servicio prestado, acompañado de la factura del pago por el mismo o el informe final del trabajo realizado con el recibido del contratante. Los contratos deben reunir los requisitos ya indicados para este tipo de documento, especialmente la descripción de las tareas objeto del mismo y las fechas que permitan determinar la duración del período de ejecución (captados a través del aplicativo SIIES). Asimismo, en el caso de ejercicio profesional práctico realizado en una empresa que es o fue propiedad del profesor, se debe presentar una autocertificación, acompañada de la copia del RUC de la empresa';
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
        <input type="hidden" id="rutainsert" value="ejercicioprofesional/calificacion/">
        <input type="hidden" id="rutaview" value="ejercicioprofesional/viewcalificacion/">
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
      <form id="form" action="ejercicioprofesional/insert/">
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
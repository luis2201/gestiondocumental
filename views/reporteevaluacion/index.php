.<div class="container container-fluid">
  <!-- Breadcrumb -->
  <div class="card mt-3 shadow-lg p-3 mb-5 bg-body rounded">
      <ol class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a id="criterio" href="#">Evaluador</a></li>
        <li class="breadcrumb-item">Informe del Evaluador</li>
      </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Lista de documentos -->
  <div class="card">
    <div class="card-header bg-info">
      <h5 class="float-start text-light">Informe del Evaluador</h5>
    </div>
    <div class="card-body">
    <?php foreach($reportes as $row): ?>
      <form id="frmInforme" action="reporteevaluacion/save" method="post">
        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo Main::encryption($_SESSION['idusuario_sisgec']) ?>">
        <div class="row" text-center>
          <div class="col">
            <h6>INFORME DE EVALUACIÓN EXTERNA</h6>
            <h5>INSTITUTO SUPERIOR TECNOLÓGICO PORTOVIEJO</h5>
            <h6>2023</h6>
          </div>          
        </div>
        <div class="row" style="border-top:1px solid black; border-bottom:1px solid black">
          <div class="col">
            <p style="font-weight:bold">Comité de Evaluación Externa:</p>
            <p><b>Coordinador: </b>Olga Susana Párraga</p>          
            <p><b>Evaluador/a: </b><?php echo $_SESSION['nombres_sisgec'] ?></p>
          </div>          
        </div>        
        <div class="row mt-2">
          <p style="font-weight:bold">Presentación:</p>
          <div class="col">
            <label style="font-weight:bold" for="procesoElaboracion">Proceso de eleaboración del informe</label>
            <textarea name="procesoElaboracion" id="procesoElaboracion" class="form-control" cols="30" rows="10"><?php echo $row->procesoElaboracion; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="metodologiaValoracion">Metodología de valoración</label>
            <textarea name="metodologiaValoracion" id="metodologiaValoracion" class="form-control" cols="30" rows="10"><?php echo $row->metodologiaValoracion; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="anexosInforme">Anexos del informe</label>
            <textarea name="anexosInforme" id="anexosInforme" class="form-control" cols="30" rows="5"><?php echo $row->anexosInforme; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="caracterObservaciones">Carácter de las observaciones de las UEP</label>
            <textarea name="caracterObservaciones" id="caracterObservaciones" class="form-control" cols="30" rows="5"><?php echo $row->caracterObservaciones; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="informesEvaluacion">Informes de evaluación sin fines de acreditación</label>
            <textarea name="informesEvaluacion" id="informesEvaluacion" class="form-control" cols="30" rows="5"><?php echo $row->informesEvaluacion; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="introduccion">Introducción</label>
            <textarea name="introduccion" id="introduccion" class="form-control" cols="30" rows="10"><?php echo $row->introduccion; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="calidadFuente">Calidad Fuente Información</label>
            <textarea name="calidadFuente" id="calidadFuente" class="form-control" cols="30" rows="10"><?php echo $row->calidadFuente; ?></textarea>
          </div>
        </div>
        <!-- Organización -->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 1</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio1" name="tipoCriterio1" class="form-control" value="<?php echo $row->tipoCriterio1; ?>"></td>
                  <td><input type="text" id="ejeCriterio1" name="ejeCriterio1" class="form-control" value="<?php echo $row->ejeCriterio1; ?>"></td>
                  <td><input type="text" id="dimensionCriterio1" name="dimensionCriterio1" class="form-control" value="<?php echo $row->dimensionCriterio1; ?>"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio1" name="criterio1" class="form-control" cols="30" rows="2"><?php echo $row->criterio1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 1.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio1_1" name="subcriterio1_1" class="form-control" cols="30" rows="4"><?php echo $row->subcriterio1_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 1.2</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio1_2" name="subcriterio1_2" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio1_2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table" table-bordered>
              <thead>
                <tr>
                  <th colspan="7">ESCALA VALORACIÓN DEL CRITERIO 1</th>
                </tr>
                <tr>
                  <th class="text-center">Elementos</th>
                  <th class="text-center">Componentes</th>
                  <th class="text-center">Cumplimiento Satisfactorio</th>
                  <th class="text-center">Cumplimiento Cuasi Satisfactorio</th>
                  <th class="text-center">Cumplimiento Poco Satisfactorio</th>
                  <th class="text-center">Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 1.1 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom: 1px solid grey;">1.1</td>
                  <td style="text-align:center;">1.1.1 <input type="hidden" id="calSubcriterio1_1_1" name="calSubcriterio1_1_1" value="<?php echo $row->calSubcriterio1_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c111c1" name="c111" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c111c2" name="c111" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c111c3" name="c111" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c111c4" name="c111" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_1_1==1)?'checked':'';?>></td>
                </tr>                
                <tr>
                  <td style="text-align:center;">1.1.2 <input type="hidden" id="calSubcriterio1_1_2" name="calSubcriterio1_1_2" value="<?php echo $row->calSubcriterio1_1_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c112c1" name="c112" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_1_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c112c2" name="c112" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_1_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c112c3" name="c112" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_1_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c112c4" name="c112" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_1_2==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">1.1.3 <input type="hidden" id="calSubcriterio1_1_3" name="calSubcriterio1_1_3" value="<?php echo $row->calSubcriterio1_1_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c113c1" name="c113" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_1_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c113c2" name="c113" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_1_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c113c3" name="c113" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_1_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c113c4" name="c113" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_1_3==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom:1px solid grey;">
                  <td style="text-align:center;">1.1.4 <input type="hidden" id="calSubcriterio1_1_4" name="calSubcriterio1_1_4" value="<?php echo $row->calSubcriterio1_1_4;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c114c1" name="c114" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_1_4==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c114c2" name="c114" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_1_4==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c114c3" name="c114" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_1_4==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c114c4" name="c114" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_1_4==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 1.1 -->
                <!-- Subcriterio 1.2 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom:1px solid grey;">1.2</td>
                  <td style="text-align:center;">1.2.1 <input type="hidden" id="calSubcriterio1_2_1" name="calSubcriterio1_2_1" value="<?php echo $row->calSubcriterio1_2_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c121c1" name="c121" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_2_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c121c2" name="c121" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_2_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c121c3" name="c121" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_2_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c121c4" name="c121" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_2_1==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">1.2.2 <input type="hidden" id="calSubcriterio1_2_2" name="calSubcriterio1_2_2" value="<?php echo $row->calSubcriterio1_2_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c122c1" name="c122" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_2_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c122c2" name="c122" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_2_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c122c3" name="c122" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_2_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c122c4" name="c122" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_2_2==1)?'checked':'';?>></td>
                </tr>                
                <tr style="border-bottom:1px solid grey;">
                  <td style="text-align:center;">1.2.3 <input type="hidden" id="calSubcriterio1_2_3" name="calSubcriterio1_2_3" value="<?php echo $row->calSubcriterio1_2_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c123c1" name="c123" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio1_2_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c123c2" name="c123" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio1_2_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c123c3" name="c123" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio1_2_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c123c4" name="c123" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio1_2_3==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 1.2 -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for=argumentacionS1_1>1.1. Planificación y Desarrollo</label>
            <textarea name=argumentacionS1_1 id=argumentacionS1_1 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS1_1; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for=argumentacionS1_2>1.2. Gestión Social</label>
            <textarea name=argumentacionS1_2 id=argumentacionS1_2 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS1_2; ?></textarea>
          </div>
        </div>
        <!-- Fin Organización -->
        <!-- Infraestructura 2 -->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 2</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio2" name="tipoCriterio2" class="form-control"></td>
                  <td><input type="text" id="ejeCriterio2" name="ejeCriterio2" class="form-control"></td>
                  <td><input type="text" id="dimensionCriterio2" name="dimensionCriterio2" class="form-control"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio2" name="criterio2" class="form-control" cols="30" rows="2"><?php echo $row->criterio2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 2.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio2_1" name="subcriterio2_1" class="form-control" cols="30" rows="4"><?php echo $row->subcriterio2_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table" table-bordered>
              <thead>
                <tr>
                  <th colspan=7>ESCALA VALORACIÓN DEL CRITERIO 2</th>
                </tr>
                <tr>
                  <th>Elementos</th>
                  <th>Componentes</th>
                  <th>Cumplimiento Satisfactorio</th>
                  <th>Cumplimiento Cuasi Satisfactorio</th>
                  <th>Cumplimiento Poco Satisfactorio</th>
                  <th>Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 2.1 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom: 1px solid grey;">2.1</td>
                  <td style="text-align:center;">2.1.1 <input type="hidden" id="calSubcriterio2_1_1" name="calSubcriterio2_1_1" value="<?php echo $row->calSubcriterio2_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c211c1" name="c211" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio2_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c211c2" name="c211" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio2_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c211c3" name="c211" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio2_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c211c4" name="c211" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio2_1_1==1)?'checked':'';?>></td>
                </tr>                 
                <tr>
                  <td style="text-align:center;">2.1.2 <input type="hidden" id="calSubcriterio2_1_2" name="calSubcriterio2_1_2" value="<?php echo $row->calSubcriterio2_1_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c212c1" name="c212" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio2_1_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c212c2" name="c212" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio2_1_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c212c3" name="c212" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio2_1_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c212c4" name="c212" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio2_1_2==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">2.1.3 <input type="hidden" id="calSubcriterio2_1_3" name="calSubcriterio2_1_3" value="<?php echo $row->calSubcriterio2_1_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c213c1" name="c213" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio2_1_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c213c2" name="c213" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio2_1_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c213c3" name="c213" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio2_1_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c213c4" name="c213" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio2_1_3==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid grey;">
                  <td style="text-align:center;">2.1.4 <input type="hidden" id="calSubcriterio2_1_4" name="calSubcriterio2_1_4" value="<?php echo $row->calSubcriterio2_1_4;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c214c1" name="c214" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio2_1_4==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c214c2" name="c214" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio2_1_4==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c214c3" name="c214" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio2_1_4==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c214c4" name="c214" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio2_1_4==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 2.1 -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for=argumentacionS2_1>2.1. Infraestructura Básica</label>
            <textarea name=argumentacionS2_1 id=argumentacionS2_1 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS2_1; ?></textarea>
          </div>
        </div>
        <!-- Fin Infraestructura 2 -->
        <!-- Profesores 3-->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 3</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio3" name="tipoCriterio3" class="form-control"></td>
                  <td><input type="text" id="ejeCriterio3" name="ejeCriterio3" class="form-control"></td>
                  <td><input type="text" id="dimensionCriterio3" name="dimensionCriterio3" class="form-control"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio3" name="criterio3" class="form-control" cols="30" rows="2"><?php echo $row->criterio3; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 3.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio3_1" name="subcriterio3_1" class="form-control" cols="30" rows="4"><?php echo $row->subcriterio3_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 3.2</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio3_2" name="subcriterio3_2" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio3_2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 3.3</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio3_3" name="subcriterio3_3" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio3_3; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table" table-bordered>
              <thead>
                <tr>
                  <th colspan=7>ESCALA VALORACIÓN DEL CRITERIO 3</th>
                </tr>
                <tr>
                  <th>Elementos</th>
                  <th>Componentes</th>
                  <th>Cumplimiento Satisfactorio</th>
                  <th>Cumplimiento Cuasi Satisfactorio</th>
                  <th>Cumplimiento Poco Satisfactorio</th>
                  <th>Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 3.1 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">3.1</td>
                  <td style="text-align:center;">3.1.1 <input type="hidden" id="calSubcriterio3_1_1" name="calSubcriterio3_1_1" value="<?php echo $row->calSubcriterio3_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c311c1" name="c311" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c311c2" name="c311" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c311c3" name="c311" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c311c4" name="c311" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_1_1==1)?'checked':'';?>></td>
                </tr>                
                <tr>
                <td style="text-align:center;">3.1.2 <input type="hidden" id="calSubcriterio3_1_2" name="calSubcriterio3_1_2" value="<?php echo $row->calSubcriterio3_1_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c312c1" name="c312" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_1_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c312c2" name="c312" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_1_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c312c3" name="c312" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_1_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c312c4" name="c312" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_1_2==1)?'checked':'';?>></td>
                </tr>
                <tr>
                <td style="text-align:center;">3.1.3 <input type="hidden" id="calSubcriterio3_1_3" name="calSubcriterio3_1_3" value="<?php echo $row->calSubcriterio3_1_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c313c1" name="c313" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_1_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c313c2" name="c313" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_1_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c313c3" name="c313" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_1_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c313c4" name="c313" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_1_3==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">3.1.4 <input type="hidden" id="calSubcriterio3_1_4" name="calSubcriterio3_1_4" value="<?php echo $row->calSubcriterio3_1_4;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c314c1" name="c314" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_1_4==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c314c2" name="c314" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_1_4==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c314c3" name="c314" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_1_4==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c314c4" name="c314" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_1_4==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 3.1 -->
                <!-- Subcriterio 3.2 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">3.2</td>
                  <td style="text-align:center;">3.2.1 <input id="calSubcriterio3_2_1" name="calSubcriterio3_2_1" type="hidden" value="<?php echo $row->calSubcriterio3_2_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c321c1" name="c321" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_2_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c321c2" name="c321" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_2_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c321c3" name="c321" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_2_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c321c4" name="c321" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_2_1==1)?'checked':'';?>></td>
                </tr>                
                <tr>
                  <td style="text-align:center;">3.2.2 <input id="calSubcriterio3_2_2" name="calSubcriterio3_2_2" type="hidden" value="<?php echo $row->calSubcriterio3_2_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c322c1" name="c322" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_2_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c322c2" name="c322" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_2_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c322c3" name="c322" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_2_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c322c4" name="c322" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_2_2==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">3.2.3 <input id="calSubcriterio3_2_3" name="calSubcriterio3_2_3" type="hidden" value="<?php echo $row->calSubcriterio3_2_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c323c1" name="c323" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_2_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c323c2" name="c323" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_2_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c323c3" name="c323" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_2_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c323c4" name="c323" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_2_3==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">3.2.4 <input id="calSubcriterio3_2_4" name="calSubcriterio3_2_4" type="hidden" value="<?php echo $row->calSubcriterio3_2_4;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c324c1" name="c324" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_2_4==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c324c2" name="c324" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_2_4==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c324c3" name="c324" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_2_4==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c324c4" name="c324" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_2_4==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 3.2 -->
                <!-- Subcriterio 3.3 -->
                <tr>                  
                  <td rowspan="4" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">3.3</td>
                  <td style="text-align:center;">3.3.1 <input id="calSubcriterio3_3_1" name="calSubcriterio3_3_1" type="hidden" value="<?php echo $row->calSubcriterio3_3_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c331c1" name="c331" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_3_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c331c2" name="c331" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_3_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c331c3" name="c331" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_3_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c331c4" name="c331" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_3_1==1)?'checked':'';?>></td>
                </tr>                
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">3.3.2 <input id="calSubcriterio3_3_2" name="calSubcriterio3_3_2" type="hidden" value="<?php echo $row->calSubcriterio3_3_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c332c1" name="c332" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio3_3_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c332c2" name="c332" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio3_3_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c332c3" name="c332" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio3_3_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c332c4" name="c332" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio3_3_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 3.3 -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for="argumentacionS3_1">3.1. Selección y Formación Previa</label>
            <textarea name="argumentacionS3_1" id="argumentacionS3_1" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS3_1; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="argumentacionS3_2">3.2. Organización y Desarrollo</label>
            <textarea name="argumentacionS3_2" id="argumentacionS3_2" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS3_2; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="argumentacionS3_3">3.3. Remuneraciones</label>
            <textarea name="argumentacionS3_3" id="argumentacionS3_3" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS3_3; ?></textarea>
          </div>
        </div>
        <!-- Fin Profesores 3 -->
        <!-- Profesores 4 -->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 4</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio4" name="tipoCriterio4" class="form-control"></td>
                  <td><input type="text" id="ejeCriterio4" name="ejeCriterio4" class="form-control"></td>
                  <td><input type="text" id="dimensionCriterio4" name="dimensionCriterio4" class="form-control"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio4" name="criterio4" class="form-control" cols="30" rows="2"><?php echo $row->criterio4; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 4.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio4_1" name="subcriterio4_1" class="form-control" cols="30" rows=4><?php echo $row->subcriterio4_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 4.2</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio4_2" name="subcriterio4_2" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio4_2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 4.3</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio4_3" name="subcriterio4_3" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio4_3; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 4.4</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio4_4" name="subcriterio4_4" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio4_4; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 4.5</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio4_5" name="subcriterio4_5" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio4_5; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="7">ESCALA VALORACIÓN DEL CRITERIO 4</th>
                </tr>
                <tr>
                  <th>Elementos</th>
                  <th>Componentes</th>
                  <th>Cumplimiento Satisfactorio</th>
                  <th>Cumplimiento Cuasi Satisfactorio</th>
                  <th>Cumplimiento Poco Satisfactorio</th>
                  <th>Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 4.1 -->
                <tr>                  
                  <td rowspan="9" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">4.1</td>
                  <td style="text-align:center;">4.1.1 <input type="hidden" id="calSubcriterio4_1_1" name="calSubcriterio4_1_1" value="<?php echo $row->calSubcriterio4_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c411c1" name="c411" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c411c2" name="c411" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c411c3" name="c411" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c411c4" name="c411" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_1==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.2 <input type="hidden" id="calSubcriterio4_1_2" name="calSubcriterio4_1_2" value="<?php echo $row->calSubcriterio4_1_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c412c1" name="c412" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c412c2" name="c412" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c412c3" name="c412" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c412c4" name="c412" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_2==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.3 <input type="hidden" id="calSubcriterio4_1_3" name="calSubcriterio4_1_3" value="<?php echo $row->calSubcriterio4_1_3;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c413c1" name="c413" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_3==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c413c2" name="c413" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_3==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c413c3" name="c413" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_3==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c413c4" name="c413" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_3==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.4 <input type="hidden" id="calSubcriterio4_1_4" name="calSubcriterio4_1_4" value="<?php echo $row->calSubcriterio4_1_4;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c414c1" name="c414" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_4==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c414c2" name="c414" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_4==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c414c3" name="c414" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_4==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c414c4" name="c414" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_4==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.5 <input type="hidden" id="calSubcriterio4_1_5" name="calSubcriterio4_1_5" value="<?php echo $row->calSubcriterio4_1_5;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c415c1" name="c415" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_5==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c415c2" name="c415" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_5==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c415c3" name="c415" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_5==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c415c4" name="c415" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_5==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.6 <input type="hidden" id="calSubcriterio4_1_6" name="calSubcriterio4_1_6" value="<?php echo $row->calSubcriterio4_1_6;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c416c1" name="c416" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_6==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c416c2" name="c416" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_6==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c416c3" name="c416" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_6==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c416c4" name="c416" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_6==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.7 <input type="hidden" id="calSubcriterio4_1_7" name="calSubcriterio4_1_7" value="<?php echo $row->calSubcriterio4_1_7;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c417c1" name="c417" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_7==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c417c2" name="c417" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_7==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c417c3" name="c417" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_7==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c417c4" name="c417" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_7==1)?'checked':'';?>></td>
                </tr>
                <tr>
                  <td style="text-align:center;">4.1.8 <input type="hidden" id="calSubcriterio4_1_8" name="calSubcriterio4_1_8" value="<?php echo $row->calSubcriterio4_1_8;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c418c1" name="c418" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_8==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c418c2" name="c418" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_8==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c418c3" name="c418" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_8==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c418c4" name="c418" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_8==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">4.1.9 <input type="hidden" id="calSubcriterio4_1_9" name="calSubcriterio4_1_9" value="<?php echo $row->calSubcriterio4_1_9;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c419c1" name="c419" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_1_9==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c419c2" name="c419" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_1_9==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c419c3" name="c419" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_1_9==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c419c4" name="c419" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_1_9==1)?'checked':'';?>></td>
                </tr>                   
                <!-- Fin Subcriterio 4.1 -->
                <!-- Subcriterio 4.2 -->
                <tr>                  
                  <td rowspan="2" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">4.2</td>
                  <td style="text-align:center;">4.2.1 <input type="hidden" id="calSubcriterio4_2_1" name="calSubcriterio4_2_1" value="<?php echo $row->calSubcriterio4_2_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c421c1" name="c421" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_2_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c421c2" name="c421" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_2_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c421c3" name="c421" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_2_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c421c4" name="c421" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_2_1==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">4.2.2 <input type="hidden" id="calSubcriterio4_2_2" name="calSubcriterio4_2_2" value="<?php echo $row->calSubcriterio4_2_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c422c1" name="c422" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_2_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c422c2" name="c422" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_2_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c422c3" name="c422" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_2_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c422c4" name="c422" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_2_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 4.2 -->
                <!-- Subcriterio 4.3 -->
                <tr>                  
                  <td rowspan="2" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">4.3</td>
                  <td style="text-align:center;">4.3.1 <input type="hidden" id="calSubcriterio4_3_1" name="calSubcriterio4_3_1" value="<?php echo $row->calSubcriterio4_3_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c431c1" name="c431" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_3_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c431c2" name="c431" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_3_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c431c3" name="c431" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_3_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c431c4" name="c431" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_3_1==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">4.3.2 <input type="hidden" id="calSubcriterio4_3_2" name="calSubcriterio4_3_2" value="<?php echo $row->calSubcriterio4_3_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c432c1" name="c432" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_3_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c432c2" name="c432" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_3_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c432c3" name="c432" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_3_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c432c4" name="c432" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_3_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 4.3 -->
                <!-- Subcriterio 4.4 -->
                <tr>                  
                  <td rowspan="2" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">4.4</td>
                  <td style="text-align:center;">4.4.1 <input type="hidden" id="calSubcriterio4_4_1" name="calSubcriterio4_4_1" value="<?php echo $row->calSubcriterio4_4_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c441c1" name="c441" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_4_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c441c2" name="c441" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_4_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c441c3" name="c441" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_4_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c441c4" name="c441" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_4_1==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">4.4.2 <input type="hidden" id="calSubcriterio4_4_2" name="calSubcriterio4_4_2" value="<?php echo $row->calSubcriterio4_4_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c442c1" name="c442" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_4_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c442c2" name="c442" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_4_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c442c3" name="c442" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_4_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c442c4" name="c442" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_4_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 4.4 -->
                <!-- Subcriterio 4.5 -->
                <tr>                  
                  <td rowspan="2" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">4.5</td>
                  <td style="text-align:center;">4.5.1 <input type="hidden" id="calSubcriterio4_5_1" name="calSubcriterio4_5_1" value="<?php echo $row->calSubcriterio4_5_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c451c1" name="c451" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_5_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c451c2" name="c451" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_5_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c451c3" name="c451" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_5_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c451c4" name="c451" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_5_1==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">4.5.2 <input type="hidden" id="calSubcriterio4_5_2" name="calSubcriterio4_5_2" value="<?php echo $row->calSubcriterio4_5_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c452c1" name="c452" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio4_5_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c452c2" name="c452" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio4_5_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c452c3" name="c452" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio4_5_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c452c4" name="c452" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio4_5_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 4.5 -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for="argumentacionS4_1">4.1. Selección y Formación Previa</label>
            <textarea name="argumentacionS4_1" id="argumentacionS4_1" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS4_1; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="argumentacionS4_2">4.2. Organización y Desarrollo</label>
            <textarea name="argumentacionS4_2" id="argumentacionS4_2" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS4_2; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for=argumentacionS4_3>4.3. Remuneraciones</label>
            <textarea name=argumentacionS4_3 id=argumentacionS4_3 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS4_3; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for=argumentacionS4_4>4.4. Formación Prácica</label>
            <textarea name=argumentacionS4_4 id=argumentacionS4_4 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS4_4; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for=argumentacionS4_5>4.5. Biblioteca</label>
            <textarea name=argumentacionS4_5 id=argumentacionS4_5 class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS4_5; ?></textarea>
          </div>
        </div>
        <!-- Fin Profesores 4 -->
        <!-- I-D e Innovación 5 -->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 5</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio5" name="tipoCriterio5" class="form-control" value="<?php echo $row->tipoCriterio5; ?>"></td>
                  <td><input type="text" id="ejeCriterio5" name="ejeCriterio5" class="form-control" value="<?php echo $row->ejeCriterio5; ?>"></td>
                  <td><input type="text" id="dimensionCriterio5" name="dimensionCriterio5" class="form-control" value="<?php echo $row->dimensionCriterio5; ?>"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio5" name="criterio5" class="form-control" cols="30" rows="2"><?php echo $row->criterio5; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 5.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio5_1" name="subcriterio5_1" class="form-control" cols="30" rows="4"><?php echo $row->subcriterio5_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 5.2</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio5_2" name="subcriterio5_2" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio5_2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="7">ESCALA VALORACIÓN DEL CRITERIO 5</th>
                </tr>
                <tr>
                  <th>Elementos</th>
                  <th>Componentes</th>
                  <th>Cumplimiento Satisfactorio</th>
                  <th>Cumplimiento Cuasi Satisfactorio</th>
                  <th>Cumplimiento Poco Satisfactorio</th>
                  <th>Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 5.1 -->
                <tr>                  
                  <td rowspan="2" style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">5.1</td>
                  <td style="text-align:center;">5.1.1 <input type="hidden" id="calSubcriterio5_1_1" name="calSubcriterio5_1_1" value="<?php echo $row->calSubcriterio5_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c511c1" name="c511" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio5_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c511c2" name="c511" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio5_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c511c3" name="c511" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio5_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c511c4" name="c511" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio5_1_1==1)?'checked':'';?>></td>
                </tr>
                <tr style="border-bottom: 1px solid gray">
                  <td style="text-align:center;">5.1.2 <input type="hidden" id="calSubcriterio5_1_2" name="calSubcriterio5_1_2" value="<?php echo $row->calSubcriterio5_1_2;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c512c1" name="c512" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio5_1_2==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c512c2" name="c512" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio5_1_2==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c512c3" name="c512" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio5_1_2==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c512c4" name="c512" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio5_1_2==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 5.1 -->
                <!-- Subcriterio 5.2 -->
                <tr style="border-bottom: 1px solid gray">                  
                  <td style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">5.2</td>
                  <td style="text-align:center;">5.2.1 <input type="hidden" id="calSubcriterio5_2_1" name="calSubcriterio5_2_1" value="<?php echo $row->calSubcriterio5_2_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c521c1" name="c521" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio5_2_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c521c2" name="c521" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio5_2_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c521c3" name="c521" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio5_2_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c521c4" name="c521" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio5_2_1==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 5.2-->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for="argumentacionS5_1">5.1. I+D y Publicaciones científicas y técnicas</label>
            <textarea name="argumentacionS5_1" id="argumentacionS5_1" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS5_1; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="argumentacionS5_2">5.2. Organización y Desarrollo</label>
            <textarea name="argumentacionS5_2" id="argumentacionS5_2" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS5_2; ?></textarea>
          </div>
        </div>
        <!-- Fin I-D e Innovación 5 -->
        <!-- Vinculación con la Sociedad 6 -->
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-primary text-light text-center">
                  <th colspan="3">Criterio 6</th>
                </tr>
                <tr class="bg-secondary text-light text-center">
                  <th>Tipo</th>
                  <th>Eje</th>
                  <th>Dimensión</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" id="tipoCriterio6" name="tipoCriterio6" class="form-control" value="<?php echo $row->tipoCriterio6; ?>"></td>
                  <td><input type="text" id="ejeCriterio6" name="ejeCriterio6" class="form-control" value="<?php echo $row->ejeCriterio6; ?>"></td>
                  <td><input type="text" id="dimensionCriterio6" name="dimensionCriterio6" class="form-control" value="<?php echo $row->dimensionCriterio6; ?>"></td>                  
                </tr>
                <tr>
                  <td colspan="3"><textarea type="text" id="criterio6" name="criterio6" class="form-control" cols="30" rows="2"><?php echo $row->criterio6; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 6.1</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio6_1" name="subcriterio6_1" class="form-control" cols="30" rows="4"><?php echo $row->subcriterio6_1; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-collapse mt-3">
              <thead>
                <tr class="bg-secondary text-light text-center">
                  <th>Elemento Fundamental 6.2</th>
                </tr>                
              </thead>
              <tbody>                
                <tr>
                  <td><textarea type="text" id="subcriterio6_2" name="subcriterio6_2" class="form-control" cols="30" rows="3"><?php echo $row->subcriterio6_2; ?></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="7">ESCALA VALORACIÓN DEL CRITERIO 6</th>
                </tr>
                <tr>
                  <th>Elementos</th>
                  <th>Componentes</th>
                  <th>Cumplimiento Satisfactorio</th>
                  <th>Cumplimiento Cuasi Satisfactorio</th>
                  <th>Cumplimiento Poco Satisfactorio</th>
                  <th>Cumplimiento Deficiente</th>
                </tr>
              </thead>
              <tbody>
                <!-- Subcriterio 6.1 -->
                <tr style="border-bottom: 1px solid gray">
                  <td style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">6.1</td>
                  <td style="text-align:center;">6.1.1 <input type="hidden" id="calSubcriterio6_1_1" name="calSubcriterio6_1_1" value="<?php echo $row->calSubcriterio6_1_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c611c1" name="c611" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio6_1_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c611c2" name="c611" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio6_1_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c611c3" name="c611" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio6_1_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c611c4" name="c611" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio6_1_1==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 6.1 -->
                <!-- Subcriterio 6.2 -->
                <tr style="border-bottom: 1px solid gray">                  
                  <td style="vertical-align:middle; text-align:center; border-bottom: 1px solid gray">6.2</td>
                  <td style="text-align:center;">6.2.1 <input type="hidden" id="calSubcriterio6_2_1" name="calSubcriterio6_2_1" value="<?php echo $row->calSubcriterio6_2_1;?>"></td>
                  <td style="text-align:center;"><input type="radio" id="c621c1" name="c621" class="form-radio-input"  value="4" <?php echo ($row->calSubcriterio6_2_1==4)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c621c2" name="c621" class="form-radio-input"  value="3" <?php echo ($row->calSubcriterio6_2_1==3)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c621c3" name="c621" class="form-radio-input"  value="2" <?php echo ($row->calSubcriterio6_2_1==2)?'checked':'';?>></td>
                  <td style="text-align:center;"><input type="radio" id="c621c4" name="c621" class="form-radio-input"  value="1" <?php echo ($row->calSubcriterio6_2_1==1)?'checked':'';?>></td>
                </tr>
                <!-- Fin Subcriterio 6.2-->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Argumentación: </p>
            <label style="font-weight:bold" for="argumentacionS6_1">6.1. Planificación y ejecución de la vinculación</label>
            <textarea name="argumentacionS6_1" id="argumentacionS6_1" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS6_1; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="argumentacionS6_2">6.2. Presencia en la Comunidad</label>
            <textarea name="argumentacionS6_2" id="argumentacionS6_2" class="form-control" cols="30" rows="5"><?php echo $row->argumentacionS6_2; ?></textarea>
          </div>
        </div>
        <!-- Vinculación con la Sociedad 6 -->
        <!-- Recomendación General -->
        <div class="row">
          <div class="col">
            <label style="font-weight:bold" for="recomendacionGeneral">Recomendación General</label> 
            <textarea name="recomendacionGeneral" id="recomendacionGeneral" class="form-control" cols="30" rows="10"><?php echo $row->recomendacion_general; ?></textarea>
          </div>
        </div>
        <!-- Fin Recomendación General -->
        <div class="row mt-3">
          <div class="col">
            <button type="submit" class="btn btn-primary">Guardar Informe de Evaluación</button>
            <?php if(count($reportes)>0){ ?>
              <a href="reporteevaluacionpdf/<?php echo $_SESSION['idusuario_sisgec'];?>" class="btn btn-success" target="_blank">Imprimir Informe de Evaluación</a>
            <?php } ?>
          </div>
        </div>
      </form>
    <?php endforeach; ?>
    </div>
  </div>
  <!-- End Lista de documentos -->
</div>


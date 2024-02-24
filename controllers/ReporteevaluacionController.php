<?php

    class ReporteevaluacionController
    {
        public function index()
        {
            $idusuario = $_SESSION['idusuario_sisgec'];

            $sql = "CALL sp_reporteevaluacion_idusuario(?);";
            $param = array(
                $idusuario
            );

            $reportes = Reporteevaluacion::selectIdUsuario($sql, $param);

            view('reporteevaluacion.index', ["reportes" => $reportes]);
        }

        public function save()
        {
            $idusuario = $_POST['idusuario'];
            $idusuario = Main::decryption($idusuario);

            $procesoElaboracion = $_POST['procesoElaboracion'];
            $metodologiaValoracion = $_POST['metodologiaValoracion'];
            $anexosInforme = $_POST['anexosInforme'];
            $caracterObservaciones = $_POST['caracterObservaciones'];
            $informesEvaluacion = $_POST['informesEvaluacion'];
            $introduccion = $_POST['introduccion'];
            $calidadFuente = $_POST['calidadFuente'];
            //Criterio 1
            $tipoCriterio1 = $_POST['tipoCriterio1'];
            $ejeCriterio1 = $_POST['ejeCriterio1'];
            $dimensionCriterio1 = $_POST['dimensionCriterio1'];
            $criterio1 = $_POST['criterio1'];
            $subcriterio1_1 = $_POST['subcriterio1_1'];
            $subcriterio1_2 = $_POST['subcriterio1_2'];
            $calSubcriterio1_1_1 = ($_POST['calSubcriterio1_1_1']=='')?0:$_POST['calSubcriterio1_1_1'];
            $calSubcriterio1_1_2 = ($_POST['calSubcriterio1_1_2']=='')?0:$_POST['calSubcriterio1_1_2'];
            $calSubcriterio1_1_3 = ($_POST['calSubcriterio1_1_3']=='')?0:$_POST['calSubcriterio1_1_3'];
            $calSubcriterio1_1_4 = ($_POST['calSubcriterio1_1_4']=='')?0:$_POST['calSubcriterio1_1_4'];
            $calSubcriterio1_2_1 = ($_POST['calSubcriterio1_2_1']=='')?0:$_POST['calSubcriterio1_2_1'];
            $calSubcriterio1_2_2 = ($_POST['calSubcriterio1_2_2']=='')?0:$_POST['calSubcriterio1_2_2'];
            $calSubcriterio1_2_3 = ($_POST['calSubcriterio1_2_3']=='')?0:$_POST['calSubcriterio1_2_3'];
            $argumentacionS1_1 = $_POST['argumentacionS1_1'];
            $argumentacionS1_2 = $_POST['argumentacionS1_2'];
            //Criterio 2
            $tipoCriterio2 = $_POST['tipoCriterio2'];
            $ejeCriterio2 = $_POST['ejeCriterio2'];
            $dimensionCriterio2 = $_POST['dimensionCriterio2'];
            $criterio2 = $_POST['criterio2'];
            $subcriterio2_1 = $_POST['subcriterio2_1'];
            $calSubcriterio2_1_1 = ($_POST['calSubcriterio2_1_1']=='')?0:$_POST['calSubcriterio2_1_1'];
            $calSubcriterio2_1_2 = ($_POST['calSubcriterio2_1_2']=='')?0:$_POST['calSubcriterio2_1_2'];
            $calSubcriterio2_1_3 = ($_POST['calSubcriterio2_1_3']=='')?0:$_POST['calSubcriterio2_1_3'];
            $calSubcriterio2_1_4 = ($_POST['calSubcriterio2_1_4']=='')?0:$_POST['calSubcriterio2_1_4'];
            $argumentacionS2_1 = $_POST['argumentacionS2_1'];
            //Criterio 3
            $tipoCriterio3 = $_POST['tipoCriterio3'];
            $ejeCriterio3 = $_POST['ejeCriterio3'];
            $dimensionCriterio3 = $_POST['dimensionCriterio3'];
            $criterio3 = $_POST['criterio3'];
            $subcriterio3_1 = $_POST['subcriterio3_1'];
            $subcriterio3_2 = $_POST['subcriterio3_2'];
            $subcriterio3_3 = $_POST['subcriterio3_3'];
            $calSubcriterio3_1_1 = ($_POST['calSubcriterio3_1_1']=='')?0:$_POST['calSubcriterio3_1_1'];
            $calSubcriterio3_1_2 = ($_POST['calSubcriterio3_1_2']=='')?0:$_POST['calSubcriterio3_1_2'];
            $calSubcriterio3_1_3 = ($_POST['calSubcriterio3_1_3']=='')?0:$_POST['calSubcriterio3_1_3'];
            $calSubcriterio3_1_4 = ($_POST['calSubcriterio3_1_4']=='')?0:$_POST['calSubcriterio3_1_4'];
            $calSubcriterio3_2_1 = ($_POST['calSubcriterio3_2_1']=='')?0:$_POST['calSubcriterio3_2_1'];
            $calSubcriterio3_2_2 = ($_POST['calSubcriterio3_2_2']=='')?0:$_POST['calSubcriterio3_2_2'];
            $calSubcriterio3_2_3 = ($_POST['calSubcriterio3_2_3']=='')?0:$_POST['calSubcriterio3_2_3'];
            $calSubcriterio3_2_4 = ($_POST['calSubcriterio3_2_4']=='')?0:$_POST['calSubcriterio3_2_4'];
            $calSubcriterio3_3_1 = ($_POST['calSubcriterio3_3_1']=='')?0:$_POST['calSubcriterio3_3_1'];
            $calSubcriterio3_3_2 = ($_POST['calSubcriterio3_3_2']=='')?0:$_POST['calSubcriterio3_3_2'];
            $argumentacionS3_1 = $_POST['argumentacionS3_1'];
            $argumentacionS3_2 = $_POST['argumentacionS3_2'];
            $argumentacionS3_3 = $_POST['argumentacionS3_3'];
            //Criterio 4
            $tipoCriterio4 = $_POST['tipoCriterio4'];
            $ejeCriterio4 = $_POST['ejeCriterio4'];
            $dimensionCriterio4 = $_POST['dimensionCriterio4'];
            $criterio4 = $_POST['criterio4'];
            $subcriterio4_1 = $_POST['subcriterio4_1'];
            $subcriterio4_2 = $_POST['subcriterio4_2'];
            $subcriterio4_3 = $_POST['subcriterio4_3'];
            $subcriterio4_4 = $_POST['subcriterio4_4'];
            $subcriterio4_5 = $_POST['subcriterio4_5'];
            $calSubcriterio4_1_1 = ($_POST['calSubcriterio4_1_1']=='')?0:$_POST['calSubcriterio4_1_1'];
            $calSubcriterio4_1_2 = ($_POST['calSubcriterio4_1_2']=='')?0:$_POST['calSubcriterio4_1_2'];
            $calSubcriterio4_1_3 = ($_POST['calSubcriterio4_1_3']=='')?0:$_POST['calSubcriterio4_1_3'];
            $calSubcriterio4_1_4 = ($_POST['calSubcriterio4_1_4']=='')?0:$_POST['calSubcriterio4_1_4'];
            $calSubcriterio4_1_5 = ($_POST['calSubcriterio4_1_5']=='')?0:$_POST['calSubcriterio4_1_5'];
            $calSubcriterio4_1_6 = ($_POST['calSubcriterio4_1_6']=='')?0:$_POST['calSubcriterio4_1_6'];
            $calSubcriterio4_1_7 = ($_POST['calSubcriterio4_1_7']=='')?0:$_POST['calSubcriterio4_1_7'];
            $calSubcriterio4_1_8 = ($_POST['calSubcriterio4_1_8']=='')?0:$_POST['calSubcriterio4_1_8'];
            $calSubcriterio4_1_9 = ($_POST['calSubcriterio4_1_9']=='')?0:$_POST['calSubcriterio4_1_9'];
            $calSubcriterio4_2_1 = ($_POST['calSubcriterio4_2_1']=='')?0:$_POST['calSubcriterio4_2_1'];
            $calSubcriterio4_2_2 = ($_POST['calSubcriterio4_2_2']=='')?0:$_POST['calSubcriterio4_2_2'];
            $calSubcriterio4_3_1 = ($_POST['calSubcriterio4_3_1']=='')?0:$_POST['calSubcriterio4_3_1'];
            $calSubcriterio4_3_2 = ($_POST['calSubcriterio4_3_2']=='')?0:$_POST['calSubcriterio4_3_2'];
            $calSubcriterio4_4_1 = ($_POST['calSubcriterio4_4_1']=='')?0:$_POST['calSubcriterio4_4_1'];
            $calSubcriterio4_4_2 = ($_POST['calSubcriterio4_4_2']=='')?0:$_POST['calSubcriterio4_4_2'];
            $calSubcriterio4_5_1 = ($_POST['calSubcriterio4_5_1']=='')?0:$_POST['calSubcriterio4_5_1'];
            $calSubcriterio4_5_2 = ($_POST['calSubcriterio4_5_2']=='')?0:$_POST['calSubcriterio4_5_2'];
            $argumentacionS4_1 = $_POST['argumentacionS4_1'];
            $argumentacionS4_2 = $_POST['argumentacionS4_2'];
            $argumentacionS4_3 = $_POST['argumentacionS4_3'];
            $argumentacionS4_4 = $_POST['argumentacionS4_4'];
            $argumentacionS4_5 = $_POST['argumentacionS4_5'];
            //Criterio 5
            $tipoCriterio5 = $_POST['tipoCriterio5'];
            $ejeCriterio5 = $_POST['ejeCriterio5'];
            $dimensionCriterio5 = $_POST['dimensionCriterio5'];
            $criterio5 = $_POST['criterio5'];
            $subcriterio5_1 = $_POST['subcriterio5_1'];
            $subcriterio5_2 = $_POST['subcriterio5_2'];
            $calSubcriterio5_1_1 = ($_POST['calSubcriterio5_1_1']=='')?0:$_POST['calSubcriterio5_1_1'];
            $calSubcriterio5_1_2 = ($_POST['calSubcriterio5_1_2']=='')?0:$_POST['calSubcriterio5_1_2'];
            $calSubcriterio5_2_1 = ($_POST['calSubcriterio5_2_1']=='')?0:$_POST['calSubcriterio5_2_1'];
            $argumentacionS5_1 = $_POST['argumentacionS5_1'];
            $argumentacionS5_2 = $_POST['argumentacionS5_2'];
            //Criterio 6
            $tipoCriterio6 = $_POST['tipoCriterio6'];
            $ejeCriterio6 = $_POST['ejeCriterio6'];
            $dimensionCriterio6 = $_POST['dimensionCriterio6'];
            $criterio6 = $_POST['criterio6'];
            $subcriterio6_1 = $_POST['subcriterio6_1'];
            $subcriterio6_2 = $_POST['subcriterio6_2'];
            $calSubcriterio6_1_1 = ($_POST['calSubcriterio6_1_1']=='')?0:$_POST['calSubcriterio6_1_1'];
            $calSubcriterio6_2_1 = ($_POST['calSubcriterio6_2_1']=='')?0:$_POST['calSubcriterio6_2_1'];
            $argumentacionS6_1 = $_POST['argumentacionS6_1'];
            $argumentacionS6_2 = $_POST['argumentacionS6_2'];
            //Recomendación General
            $recomendacionGeneral = $_POST['recomendacionGeneral'];

            $sql = "call sp_reporteevaluacion_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

            $param = array(
                $idusuario,
                $procesoElaboracion,
                $metodologiaValoracion,
                $anexosInforme,
                $caracterObservaciones,
                $informesEvaluacion,
                $introduccion,
                $calidadFuente,
                $tipoCriterio1,
                $ejeCriterio1,
                $dimensionCriterio1,
                $criterio1,
                $subcriterio1_1,
                $subcriterio1_2,
                $calSubcriterio1_1_1,
                $calSubcriterio1_1_2,
                $calSubcriterio1_1_3,
                $calSubcriterio1_1_4,
                $calSubcriterio1_2_1,
                $calSubcriterio1_2_2,
                $calSubcriterio1_2_3,
                $argumentacionS1_1,
                $argumentacionS1_2,
                $tipoCriterio2,
                $ejeCriterio2,
                $dimensionCriterio2,
                $criterio2,
                $subcriterio2_1,
                $calSubcriterio2_1_1,
                $calSubcriterio2_1_2,
                $calSubcriterio2_1_3,
                $calSubcriterio2_1_4,
                $argumentacionS2_1,
                $tipoCriterio3,
                $ejeCriterio3,
                $dimensionCriterio3,
                $criterio3,
                $subcriterio3_1,
                $subcriterio3_2,
                $subcriterio3_3,
                $calSubcriterio3_1_1,
                $calSubcriterio3_1_2,
                $calSubcriterio3_1_3,
                $calSubcriterio3_1_4,
                $calSubcriterio3_2_1,
                $calSubcriterio3_2_2,
                $calSubcriterio3_2_3,
                $calSubcriterio3_2_4,
                $calSubcriterio3_3_1,
                $calSubcriterio3_3_2,
                $argumentacionS3_1,
                $argumentacionS3_2,
                $argumentacionS3_3,
                $tipoCriterio4,
                $ejeCriterio4,
                $dimensionCriterio4,
                $criterio4,
                $subcriterio4_1,
                $subcriterio4_2,
                $subcriterio4_3,
                $subcriterio4_4,
                $subcriterio4_5,
                $calSubcriterio4_1_1,
                $calSubcriterio4_1_2,
                $calSubcriterio4_1_3,
                $calSubcriterio4_1_4,
                $calSubcriterio4_1_5,
                $calSubcriterio4_1_6,
                $calSubcriterio4_1_7,
                $calSubcriterio4_1_8,
                $calSubcriterio4_1_9,
                $calSubcriterio4_2_1,
                $calSubcriterio4_2_2,
                $calSubcriterio4_3_1,
                $calSubcriterio4_3_2,
                $calSubcriterio4_4_1,
                $calSubcriterio4_4_2,
                $calSubcriterio4_5_1,
                $calSubcriterio4_5_2,
                $argumentacionS4_1,
                $argumentacionS4_2,
                $argumentacionS4_3,
                $argumentacionS4_4,
                $argumentacionS4_5,
                $tipoCriterio5,
                $ejeCriterio5,
                $dimensionCriterio5,
                $criterio5,
                $subcriterio5_1,
                $subcriterio5_2,
                $calSubcriterio5_1_1,
                $calSubcriterio5_1_2,
                $calSubcriterio5_2_1,
                $argumentacionS5_1,
                $argumentacionS5_2,
                $tipoCriterio6,
                $ejeCriterio6,
                $dimensionCriterio6,
                $criterio6,
                $subcriterio6_1,
                $subcriterio6_2,
                $calSubcriterio6_1_1,
                $calSubcriterio6_2_1,
                $argumentacionS6_1,
                $argumentacionS6_2,
                $recomendacionGeneral
            );

            $resp = Reporteevaluacion::insert($sql, $param);

            echo json_encode($resp);
        }
    }

?>
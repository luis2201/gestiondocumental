<?php

    class ReporteevaluacionpdfController
    {
        public function index()
        {
            $idusuario = $_SESSION['idusuario_sisgec'];

            $sql = "CALL sp_reporteevaluacion_idusuario(?);";
            $param = array(
                $idusuario
            );

            $reportes = Reporteevaluacion::selectIdUsuario($sql, $param);

            view('reporteevaluacionpdf.index', ["reportes" => $reportes]);
        }
    }
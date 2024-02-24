<?php

  class FormacionposgradoController
  {

    public function index()
    {
      view('formacionposgrado.index', []);
    }

    public function insert()
    {      
      $documento = $_FILES['documento']['name'];
      $path      = DOC;
      $newnamedoc = strtotime("now")+1;
      $extension  = pathinfo($documento, PATHINFO_EXTENSION);
      
      $iddocumento  = $newnamedoc;
      $criterio = Main::limpiar_cadena($_POST['criterio']);
      $subcriterio = Main::limpiar_cadena($_POST['subcriterio']);
      $indicador = Main::limpiar_cadena($_POST['indicador']);
      $evidencia = Main::limpiar_cadena($_POST['evidencia']);

      move_uploaded_file($_FILES['documento']['tmp_name'], $path . $iddocumento.'.'.$extension);

      $sql = "CALL sp_documento_insert(?,?,?,?,?);";
      $param = array(
        $iddocumento,
        $criterio,
        $subcriterio,
        $indicador,
        $evidencia
      );

      $result = Model::insert($sql, $param);

      echo json_encode($result);
    }

    public function calificacion()
    {
      $data = json_decode(file_get_contents("php://input"));

      $criterio = Main::limpiar_cadena($data->criterio);
      $subcriterio = Main::limpiar_cadena($data->subcriterio);
      $indicador = Main::limpiar_cadena($data->indicador);      
      $calificacion = Main::limpiar_cadena($data->calificacion);
      $idusuario = Main::limpiar_cadena($data->idusuario);

      $idusuario = Main::decryption($idusuario);
            
      $sql = "CALL sp_evaluacion_insert(?,?,?,?,?);";
      $param = array(        
        $criterio,
        $subcriterio,
        $indicador,
        $calificacion,
        $idusuario
      );

      $result = Model::insert($sql, $param);      

      echo json_encode($resul);
    }

    public function viewcalificacion()
    {
      $data = json_decode(file_get_contents("php://input"));

      $criterio = Main::limpiar_cadena($data->criterio);
      $subcriterio = Main::limpiar_cadena($data->subcriterio);
      $indicador = Main::limpiar_cadena($data->indicador);            
            
      $sql = "SELECT * FROM tb_evaluacion WHERE criterio = ? AND subcriterio = ? AND indicador = ?;";
      $param = array(        
        $criterio,
        $subcriterio,
        $indicador
      );

      $result = Model::view($sql, $param);  
      
      echo json_encode($result);
    }
    
    public function view()
    {
      $data = json_decode(file_get_contents('php://input'));
      $sql = "CALL sp_documento_view(?)";
      $param = array(
        $data->evidencia
      );

      $result = Model::view($sql, $param);

      echo json_encode($result);
    }

    public function delete($iddocumento)
    {      
      $sql = "CALL sp_documento_delete(?)";
      $param = array(
        $iddocumento
      );

      $result = Model::delete($sql, $param);

      echo json_encode($result);
    }
  }

?>
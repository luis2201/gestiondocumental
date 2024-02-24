<?php

  class ProgramaestudioController
  {

    public function index()
    {
      view('programaestudio.index', []);
    }

    public function insert()
    {      
      $path = DOC;

      // Limpiar y preparar los datos
      $criterio    = Main::limpiar_cadena($_POST['criterio']);
      $subcriterio = Main::limpiar_cadena($_POST['subcriterio']);
      $indicador   = Main::limpiar_cadena($_POST['indicador']);
      $evidencia   = Main::limpiar_cadena($_POST['evidencia']);

      // Array para almacenar los resultados
      $results = [];

      for ($i = 0; $i < count($_FILES['documento']['name']); $i++) {
        $documento = $_FILES['documento']['name'][$i];
        $newnamedoc = strtotime("now") + $i + 1; // Asegurarse que cada nombre sea único
        $extension  = pathinfo($documento, PATHINFO_EXTENSION);
      
        $iddocumento = $newnamedoc;   
        
        //Mover cada archivo a la carpeta destino
        if (move_uploaded_file($_FILES['documento']['tmp_name'][$i], $path . $iddocumento . '.' . $extension)) {            
            // Crear la consulta SQL
            $sql = "CALL sp_documento_insert(?,?,?,?,?);";            
            $param = array(
              $iddocumento,
              $criterio,
              $subcriterio,
              $indicador,
              $evidencia
            );            
            
            //Insertar los datos en la base de datos
          $result = Model::insert($sql, $param);                 
        array_push($results, $result);
        }                      
      }

      //Enviar todos los resultados como respuesta
      echo json_encode($results);

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

    public function delete()
    { 
      $data = json_decode(file_get_contents('php://input'));
      $criterio = Main::decryption($data->criterio);

      $sql = "CALL sp_documento_delete(?)";
      $param = array(
        $criterio  
      );

      $result = Model::delete($sql, $param);

      echo json_encode($result);
    }
  }

?>
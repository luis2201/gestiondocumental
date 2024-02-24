<?php

  class Model extends DB
  {

    public static function login($sql, $param)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = $sql;
      $stm = $pdo->prepare($query);
      $stm->execute($param);
      $row = $stm->fetchAll(PDO::FETCH_OBJ);
      
      return $row;
    }

    public static function selectAll($sql, $param)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = $sql;
      $stm = $pdo->prepare($query);
      $stm->execute($param);
      $row = $stm->fetchAll(PDO::FETCH_OBJ);
      
      return $row;
    }

    public static function insert($sql, $param)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = $sql;
      $stm = $pdo->prepare($query);
      $stm->execute($param);		
    }

    public static function view($sql, $param)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = $sql;
      $stm = $pdo->prepare($query);
      $stm->execute($param);		
      $row = $stm->fetchAll(PDO::FETCH_OBJ);
      
      return $row;
    }

    public static function delete($sql, $param)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = $sql;
      $stm = $pdo->prepare($query);
      $stm->execute($param);		
    }

    public static function evidencias($evidencia)
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = "SELECT * FROM tb_documento WHERE evidencia = :evidencia AND periodo = 3";
      $stm = $pdo->prepare($query);
      $stm->execute([":evidencia" => $evidencia]);		
      $row = $stm->fetchAll(PDO::FETCH_OBJ);
      
      return $row;
    }
  }

?>
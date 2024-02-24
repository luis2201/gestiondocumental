<?php

  class Tipousuario extends DB
  {

    public static function selectAll()
    {
      $pdo = new DB();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      $query = "SELECT * FROM tb_tipousuario";
      $stm = $pdo->prepare($query);
      $stm->execute();
      $row = $stm->fetchAll(PDO::FETCH_OBJ);
      
      return $row;
    }

  }

?>
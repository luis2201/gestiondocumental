<?php

    class Reporteevaluacion extends DB
    {
        public static function selectIdUsuario($sql, $param)
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
            return $stm->execute($param);		
        }
    }

?>
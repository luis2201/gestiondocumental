<?php

    class Usuarios extends DB
    {
        public static function selectAll()
        {
            $pdo = new DB();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");
            $query = "call sp_usuario_select_all();";
            $stm = $pdo->prepare($query);
            $stm->execute();
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
    }

?>
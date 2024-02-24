<?php

    class UsuariosController
    {
        public function index()
        {
            $usuarios = Usuarios::selectAll();
            $tipousuarios = Tipousuario::selectAll();

            view("usuarios.index", ["usuarios" => $usuarios, "tipousuarios" => $tipousuarios]);
        }

        public function insert()
        {
            $nombres = Main::limpiar_cadena($_POST['nombres']);
            $idtipousuario = Main::limpiar_cadena($_POST['idtipousuario']);
            $idtipousuario = Main::decryption($idtipousuario);
            $usuario = Main::limpiar_cadena($_POST['usuario']);
            $contrasena = Main::encryption($usuario);

            $sql = "call sp_usuario_insert(?,?,?,?);";
            $param = array(
                $nombres,
                $idtipousuario,
                $usuario, 
                $contrasena
            );

            $resp = Usuarios::insert($sql, $param);

            echo json_encode($resp);
        }
    }

?>
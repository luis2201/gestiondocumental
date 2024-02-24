<?php

    class LoginController
    {
        public function index()
        {
            $tipousuarios = Tipousuario::selectAll();

            view('login.index', ["tipousuarios" => $tipousuarios]);
        }

        public function validate()
        {
            $idtipousuario = Main::limpiar_cadena($_POST['idtipousuario']);
            $usuario = Main::limpiar_cadena($_POST['usuario']);
            $contrasena = Main::limpiar_cadena($_POST['contrasena']);

            //$idtipousuario = Main::decryption($idtipousuario);
            $contrasena = Main::encryption($contrasena);

            $sql = "CALL sp_usuario_login(?,?,?);";
            $param = array(
                $usuario,
                $contrasena,
                $idtipousuario
            );

            $result = Model::login($sql, $param);
            
            if (!empty($result)) {
                foreach($result as $row){
                    $_SESSION['idusuario_sisgec'] = $row->idusuario;
                    $_SESSION['nombres_sisgec'] = $row->nombres;
                    $_SESSION['usuario_sisgec'] = $row->usuario;
                    $_SESSION['tipousuario_sisgec'] = $row->proceso;
                }
            } 

            echo json_encode($result);

        }
    }
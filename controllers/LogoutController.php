<?php

    class LogoutController
    {
        public function index()
        {
            session_destroy();
            session_unset();

            $tipousuarios = Tipousuario::selectAll();

            view('login.index', ["tipousuarios" => $tipousuarios]);
        }
    }

?>
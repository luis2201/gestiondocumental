<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISGEC - Sistema para la Gestión de Calidad</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- JQueryCOnfirm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form id="form">
                        <div class="text-center">
                            <p class="lead fw-normal mb-0 me-3"><strong>SISGEC - Sistema para la Gestión de Calidad</strong></p>
                        </div>
        
                        <div class="divider d-flex align-items-center my-4">
                            
                        </div>

                        <!-- Tipo de Usuario -->
                        <div class="mb-4">
                            <label class="form-label" for="idtipousuario">Tipo de Usuario</label>
                            <select name="idtipousuario" id="idtipousuario" class="form-select">
                                <option value="">-- Seleccione tipo de usuario --</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Evaluador">Evaluador</option>
                                <option value="Evaluador">Evaluador Externo</option>
                                <option value="Autoridades">Autoridades</option>
                                <option value="Responsable de Procesos">Responsable de Procesos</option>
                                <!-- <?php foreach($tipousuarios as $row): ?>
                                    <option value="<?php echo Main::encryption($row->idtipousuario); ?>"><?php echo $row->tipousuario; ?></option>
                                <?php endforeach; ?> -->
                            </select>
                        </div>

                        <!-- Usuario input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Ingrese un nombre de usuario" />
                            <label class="form-label" for="usuario">Usuario</label>
                        </div>

                        <!-- Contraseña input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="contrasena" name="contrasena" class="form-control form-control-lg" placeholder="Ingrese su contraseña" />
                            <label class="form-label" for="contrasena" name="contrasena">Contraseña</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © ITSUP 2022. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- JQueryConfirm -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Site -->
<script src="<?php echo DIR; ?>functions/login.js"></script>
</html>
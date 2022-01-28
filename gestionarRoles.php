<?PHP
session_start();
include "lib/funciones.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menú principal</title>
    <!--        <link rel="stylesheet" href="css/style.css">-->
    <script src="js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('img/fondo.jpg'); overflow-x: hidden; background-repeat: no-repeat; background-size: cover;">
    <?php
    if (isset($_SESSION["usuarioActual"]) && in_array("Administrador", $_SESSION["listaRoles[]"])) {
    ?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="menuPrincipal.php">DronAir
                        <a class="navbar-brand" href="menuPrincipal.php">
                            <img src="img/dronLogo.png" alt="" width="70px">
                        </a></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="menuPrincipal.php">Inicio <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg></a>
                            </li>
                            <?PHP
                            if (isset($_SESSION["listaRoles[]"])) {
                                if (in_array("Agricultor", $_SESSION["listaRoles[]"])) {
                            ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gestionarParcelas.php">Gestionar parcelas <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map">
                                                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                                <line x1="8" y1="2" x2="8" y2="18"></line>
                                                <line x1="16" y1="6" x2="16" y2="22"></line>
                                            </svg></a>
                                    </li>
                                <?PHP
                                }
                            }
                            if (isset($_SESSION["listaRoles[]"])) {
                                if (in_array("Piloto", $_SESSION["listaRoles[]"])) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gestionarDrones.php">Gestionar drones <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command">
                                                <path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                                            </svg></a>
                                    </li>
                                <?PHP
                                }
                            }

                            if (isset($_SESSION["listaRoles[]"])) {
                                if (in_array("Administrador", $_SESSION["listaRoles[]"])) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="gestionarRoles.php">Gestionar roles <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
                                                <line x1="4" y1="21" x2="4" y2="14"></line>
                                                <line x1="4" y1="10" x2="4" y2="3"></line>
                                                <line x1="12" y1="21" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12" y2="3"></line>
                                                <line x1="20" y1="21" x2="20" y2="16"></line>
                                                <line x1="20" y1="12" x2="20" y2="3"></line>
                                                <line x1="1" y1="14" x2="7" y2="14"></line>
                                                <line x1="9" y1="8" x2="15" y2="8"></line>
                                                <line x1="17" y1="16" x2="23" y2="16"></line>
                                            </svg></a>
                                    </li>
                                <?PHP
                                }
                            }

                            if (isset($_SESSION["listaRoles[]"])) {
                                if (in_array("Piloto", $_SESSION["listaRoles[]"]) || in_array("Agricultor", $_SESSION["listaRoles[]"])) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gestionarTrabajos.php">Gestionar trabajos <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg></a>
                                    </li>
                            <?PHP
                                }
                            }
                            ?>

                        </ul>
                        <section>
                            <a class="nav-link" href="index.php?cerrarSesion=true" style="text-align: center; color: white;">Cerrar sesion <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg></a>
                        </section>
                    </div>
                </div>
            </nav>
        </header>
        <?PHP
        if (isset($_REQUEST["cambiarDatos"])) {
            modificarDatosUsuario($_REQUEST["idCambiar"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["dni"], $_REQUEST["email"], $_REQUEST["contraseña"]);
        }
        if (isset($_REQUEST["anadirRol"])) {
        ?>
            <section class="col-12 col-xl-12 bg-light  d-flex p-4 flex-column justify-content-center align-items-center rounded">
                <?PHP
                $rolesNR = array();
                $rolesNR = obtenerRoles();
                ?>
                <h3 class="text-center">Añadir rol</h3>

                <form action="gestionarRoles.php" class="">
                    <select name="añadirRolSelect">
                        <?php
                        for ($i = 0; $i < count($rolesNR); $i++) {
                            print "<option value=\"$rolesNR[$i]\">$rolesNR[$i]</option>\n";
                        }
                        ?>
                    </select>
                    <input type="hidden" name="id" value="<?= $_REQUEST["idUsuario"] ?>">
                    <input type="submit" name="añadirRol" value="Añadir">
                </form>
            </section>
        <?PHP
        }
        if (isset($_REQUEST["gestionarUsuario"])) {
        ?>
            <section class="col-12 col-xl-12 bg-light  d-flex p-4 flex-column justify-content-center align-items-center rounded">
                <form action="gestionarRoles.php" method="post" class="d-flex flex-column justify-content-center align-items-center rounded">
                    <section class="campos">
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Apellido" name="apellido">
                        <input type="text" placeholder="DNI" name="dni">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Contraseña" name="contraseña">
                        <input type="hidden" name="idCambiar" value="<?= $_REQUEST["idUsuario"] ?>">
                    </section>
                    <input type="submit" value="Cambiar datos" name="cambiarDatos" class="btn btn-primary m-1" style="width: 100%;">
                </form>
                <p>Deja el campo vacío para no cambiarlo.</p>
            </section>
        <?PHP
        }

        if (isset($_REQUEST["añadirRol"])) {
            $idRol = obtenerIdRol($_REQUEST["añadirRolSelect"]);
            otorgarRol($idRol, $_REQUEST["id"]);
        } else if (isset($_REQUEST["borrarRol"])) {
            $idRol = obtenerIdRol($_REQUEST["borrarRolSelect"]);
            borrarRol($idRol, $_REQUEST["id"]);
        }
        ?>
        <main class="row">
            <?PHP
            if (!isset($_SESSION["listaRoles[]"])) {
            ?>
                <section class="container col-12 col-xl-6 d-flex" style="background-color: white; margin-top: 30vh;">
                    <p style="text-align: center; margin: auto; padding: 5vw;">Aun no tiene roles, espere a que un administrador le de un rol o <a href="mailto: gillerav01@educantabria.es"> contacte con un administrador.</a></p>
                </section>
            <?PHP
            } else {
                $usuariosTabla = obtenerUsuarios();
            ?>
                <section class="container col-12 col-xl-12 bg-dark">
                    <?PHP
                    if (isset($_REQUEST["gestionarRoles"])) {
                        print " <h3 class=\"text-center text-white\"> Gestionando roles del usuario de ID " . $_REQUEST["idUsuario"] . "</h3>";
                    ?>
                        <section class="container col-12 col-xl-10 d-flex justify-content-evenly">
                            <?PHP
                            $rolesDelUsuario = obtenerRolesArray($_REQUEST["idUsuario"]);
                            $rolesNR = array();
                            $rolesNR = obtenerRolesNoRepetidos(obtenerRolesArray($_REQUEST["idUsuario"]));
                            if (count($rolesNR) > 0) {
                            ?>
                                <section class="col-12 col-xl-5 bg-white d-flex flex-column justify-content-center align-items-center rounded">
                                    <h3 class="text-center">Añadir rol</h3>

                                    <form action="gestionarRoles.php" class="">
                                        <select name="añadirRolSelect">
                                            <?php
                                            for ($i = 0; $i < count($rolesNR); $i++) {
                                                print "<option value=\"$rolesNR[$i]\">$rolesNR[$i]</option>\n";
                                            }
                                            ?>
                                        </select>
                                        <input type="hidden" name="id" value="<?= $_REQUEST["idUsuario"] ?>">
                                        <input type="submit" name="añadirRol" value="Añadir">
                                    </form>
                                </section>
                            <?PHP
                            }
                            $rolesR = array();
                            $rolesR = obtenerRolesRepetidos(obtenerRolesArray($_REQUEST["idUsuario"]));
                            if (count($rolesR)) {

                            ?>
                                <section class="col-12 col-xl-5 bg-light  d-flex flex-column justify-content-center align-items-center rounded">
                                    <h3 class="text-center">Eliminar rol</h3>
                                    <?PHP

                                    ?>
                                    <form action="gestionarRoles.php" class="">
                                        <select name="borrarRolSelect">
                                            <?php
                                            for ($i = 0; $i < count($rolesR); $i++) {
                                                print "<option value=\"$rolesR[$i]\">$rolesR[$i]</option>\n";
                                            }
                                            ?>
                                        </select>
                                        <input type="hidden" name="id" value="<?= $_REQUEST["idUsuario"] ?>">
                                        <input type="submit" name="borrarRol" value="Borrar">
                                    </form>
                                </section>
                            <?PHP
                            }
                            ?>
                        </section>
                    <?PHP
                    } else if (isset($_REQUEST["gestionarUsuario"])) {
                        print "<h3 class=\"text-center text-white\"> Gestionando usuario con ID " . $_REQUEST["idUsuario"] . "</h3>";
                    }
                    ?>
                </section>
                <section class="container col-12 col-xl-4 bg-dark">
                    <table class="table table-dark table-hover">
                        <h1 class="text-center text-white">Usuarios sin roles</h1>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombre</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            for ($i = 0; $i < count($usuariosTabla); $i++) {
                            ?>
                                <tr>
                                    <?PHP
                                    if (obtenerRolesTexto($usuariosTabla[$i][0]) == "") {
                                    ?>
                                        <th scope="row"><?= $usuariosTabla[$i][0] ?></th>
                                        <td><?= $usuariosTabla[$i][3] ?></td>
                                        <td><?= $usuariosTabla[$i][1] ?> <?= $usuariosTabla[$i][2] ?></td>
                                        <td><a href="gestionarRoles.php?idUsuario=<?= $usuariosTabla[$i][0] ?>&anadirRol=true" class="btn btn-danger">Añadir roles al usuario</a></td>
                                    <?PHP
                                    }
                                    ?>
                                <tr>
                                <?PHP
                            }
                                ?>
                        </tbody>
                    </table>
                </section>
                <section class="container col-12 col-xl-8 bg-dark">
                    <h1 class="text-center text-white">Gestion de usuarios</h1>
                    <table class="table table-dark table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Roles</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            for ($i = 0; $i < count($usuariosTabla); $i++) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $usuariosTabla[$i][0] ?></th>
                                    <td><?= $usuariosTabla[$i][3] ?></td>
                                    <td><?= $usuariosTabla[$i][1] ?> <?= $usuariosTabla[$i][2] ?></td>
                                    <td><a href="mailto:<?= $usuariosTabla[$i][4] ?>" class="label" style="color: #ffffff;"><?= $usuariosTabla[$i][4] ?></a></td>
                                    <td><?PHP
                                        if (obtenerRolesTexto($usuariosTabla[$i][0]) != "") {
                                            print obtenerRolesTexto($usuariosTabla[$i][0]);
                                        } else {
                                            print "<p style=\"color: red;\">El usuario no tiene roles</p>";
                                        }
                                        ?></td>
                                    <td><?PHP
                                        if (obtenerRolesTexto($usuariosTabla[$i][0]) == "") {
                                        ?>
                                            <a href="gestionarRoles.php?idUsuario=<?= $usuariosTabla[$i][0] ?>&anadirRol=true" class="btn btn-danger">Gestionar roles</a>
                                        <?PHP
                                        } else {
                                        ?>
                                            <a href="gestionarRoles.php?idUsuario=<?= $usuariosTabla[$i][0] ?>&gestionarRoles=true" class="btn btn-primary">Gestionar roles</a>
                                        <?PHP
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="gestionarRoles.php?idUsuario=<?= $usuariosTabla[$i][0] ?>&gestionarUsuario=true" class="btn btn-primary">Gestionar datos</a>
                                    </td>
                                <tr>
                                <?PHP
                            }
                                ?>
                        </tbody>
                    </table>
                </section>
            <?PHP
            }
            ?>
        </main>
        <footer class="text-center text-lg-start text-white" style="background-color: #28242c; width: 100%; margin-top: auto; ">
            <hr class="mb-4" />
            <section class="mb-4 text-center">
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/guillermo.illera/" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/itsguillermo97/" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/gillerav/" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Gillerav01" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg></a>
            </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 - 2022 Copyright:
                <a class="text-white" href="https://www.instagram.com/itsguillermo97/">Guillermo Illera</a>
            </div>
        </footer>
    <?PHP
    } else {
        print "<p> No tienes permisos para acceder. Por favor, <a href=\"index.php\"> inicia sesion </a> </p>";
    }
    ?>
</body>

</html>
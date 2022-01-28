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
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>

<body style="background-image: url('img/fondo.jpg'); overflow-x: hidden; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <?php
    if (isset($_SESSION["usuarioActual"])) {
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
                                        <a class="nav-link" href="gestionarRoles.php">Gestionar roles <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
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
                                        <a class="nav-link active" href="gestionarTrabajos.php">Gestionar trabajos <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
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
        <main class="row d-flex">
            <?PHP
            if (!isset($_SESSION["listaRoles[]"])) {
            ?>
                <section class="container col-12 col-xl-12 d-flex" style="background-color: white; margin-top: 30vh;">
                    <p style="text-align: center; margin: auto; padding: 5vw;">Aun no tiene roles, espere a que un administrador le de un rol o <a href="mailto: gillerav01@educantabria.es"> contacte con un administrador.</a></p>
                </section>
                <?PHP
            } else {
                if (in_array("Piloto", $_SESSION["listaRoles[]"])) {
                    if (isset($_REQUEST["registrarTrabajo"])) {
                        registrarTrabajo($_REQUEST["parcela"], $_REQUEST["piloto"], $_REQUEST["tipo"], $_SESSION["usuarioActual"][0]);
                    }
                ?>
                    <?PHP
                    if (isset($_REQUEST["submit"])){
                        realizarTrabajo($_REQUEST["hidden"], $_REQUEST["elegirDron"]);
                    }
                    if (isset($_REQUEST["realizarTrabajo"])) {
                    ?>
                        <section class="container col-12 col-xl-8 d-flex flex-column p-1 rounded" style="background-color: white; margin-top: 5vh; margin-bottom: 2vh">
                            <h2 style="text-align: center;">Realizar trabajo</h2>
                            <form name="gestionarTrabajos" id="gestionarTrabajos" action="gestionarTrabajos.php" method="GET" class="d-flex flex-column">
                                <label for="elegirDron" class="align-self-center">Elige un dron para realizar la tarea: </label>
                                <select name="elegirDron" id="elegirDron">
                                <?PHP
                                    $elegirDron = verDrones($_SESSION["usuarioActual"][0]);
                                    for ($i = 0; $i < count($elegirDron); $i++) {
                                    ?>
                                        <option value="<?= $elegirDron[$i][0] ?>"><?= $elegirDron[$i][2] ?>, <?= $elegirDron[$i][3] ?></option>
                                    <?PHP
                                    }
                                    ?>
                                </select>
                                <input type="hidden" name="hidden" value="<?=$_REQUEST["idTrabajo"]?>">
                                <input type="submit" name="submit" value="enviarTrabajo" class="btn btn-primary" style="margin-top: 1vh;">
                            </form>
                        </section>
                    <?PHP
                    }
                    ?>
                    <section class="container col-12 col-xl-6 d-flex p-1 flex-column rounded" style="background-color: white; margin-top: 10vh; margin-bottom: 5vh">
                        <h2 style="text-align: center">Gestionar trabajos</h2>
                        <section class="container col-12 col-xl-10 d-flex flex-column p-1" style="background-color: white; margin-top: 10vh; margin-bottom: 5vh">
                            <h3>Registrar un trabajo</h3>
                            <form action="gestionarTrabajos.php" method="POST" class="d-flex flex-column">
                                <label for="parcela">Parcela: </label>
                                <select id="parcela" name="parcela">
                                    <?PHP
                                    $parcelas = obtenerParcelas($_SESSION["usuarioActual"][0]);
                                    for ($i = 0; $i < count($parcelas); $i++) {
                                    ?>
                                        <option value="<?= $parcelas[$i][0] ?>"><?= $parcelas[$i][1] ?></option>
                                    <?PHP
                                    }
                                    ?>
                                </select>
                                <label for="piloto">Piloto: </label>
                                <select id="piloto" name="piloto">
                                    <?PHP
                                    $pilotos = seleccionarPilotos();
                                    for ($i = 0; $i < count($pilotos); $i++) {
                                    ?>
                                        <option value="<?= $pilotos[$i][0] ?>"><?= $pilotos[$i][1] ?> <?= $pilotos[$i][2] ?></option>
                                    <?PHP
                                    }
                                    ?>
                                </select>
                                <label for="tipo">Tipo de tarea: </label>
                                <select name="tipo" id="tipo">
                                    <option value="abonado">Abonado</option>
                                    <option value="fumigacion">Fumigacion</option>
                                </select>
                                <input type="submit" value="Registrar trabajo" name="registrarTrabajo" class="btn btn-primary" style="margin-top: 4vh;">
                            </form>
                        </section>
                        <section class="container col-12 col-xl-10 d-flex flex-column p-1 rounded" style="background-color: white; margin-top: 10vh; margin-bottom: 10vh">
                            <?PHP
                            if (isset($_REQUEST["borrarTrabajo"])) {
                                borrarTrabajo($_SESSION["usuarioActual"][0], $_REQUEST["idTrabajo"]);
                            }
                            ?>
                            <h3>Borrar trabajo</h3>
                            <?PHP
                            $trabajosBorrar = verTrabajosPendientes($_SESSION["usuarioActual"][0]);
                            if (@count($trabajosBorrar) == 0) {
                            ?>
                                <p>No hay trabajos disponibles.</p>
                            <?PHP
                            } else {

                            ?>
                                <table class="table table-dark table-hover" style="width: 100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre parcela</th>
                                            <th scope="col">Tipo tarea</th>
                                            <th scope="col">Fecha de registro</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
                                        for ($i = 0; $i < count($trabajosBorrar); $i++) {
                                        ?>
                                            <tr>
                                                <td><?= obtenerInformacionParcela($trabajosBorrar[$i][1])[1] ?></td>
                                                <td><?= $trabajosBorrar[$i][5] ?></td>
                                                <td><?= $trabajosBorrar[$i][6] ?></td>
                                                <td><a href="gestionarTrabajos.php?idTrabajo=<?= $trabajosBorrar[$i][0] ?>&borrarTrabajo=true" class="btn btn-danger">Borrar trabajo</a></td>
                                            <tr>
                                            <?PHP
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            <?PHP
                            }
                            ?>
                        </section>
                    </section>
                <?php
                }
                ?>
                <section class="container col-12 col-xl-5 d-flex flex-column p-1" style="background-color: white; margin-top: 10vh; margin-bottom: 5vh">
                    <h2 style="text-align: center">Historial de trabajos</h2>
                    <?php
                    if (in_array("Piloto", $_SESSION["listaRoles[]"])) {
                    ?>
                        <section class="container col-12 col-xl-12 d-flex flex-column p-1">
                            <h3>Trabajos pendientes</h3>
                            <?php
                            $trabajosDisponibles = verTrabajosDisponibles($_SESSION["usuarioActual"][0]);
                            if (@count($trabajosDisponibles) > 0) {
                            ?>
                                <table class="table table-dark table-hover" style="width: 100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre parcela</th>
                                            <th scope="col">Tipo tarea</th>
                                            <th scope="col">Fecha de registro</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
                                        for ($i = 0; $i < count($trabajosDisponibles); $i++) {
                                        ?>
                                            <tr>
                                                <td><?= obtenerInformacionParcela($trabajosDisponibles[$i][1])[1] ?></td>
                                                <td><?= $trabajosDisponibles[$i][5] ?></td>
                                                <td><?= $trabajosDisponibles[$i][6] ?></td>
                                                <td><a href="gestionarTrabajos.php?idTrabajo=<?= $trabajosDisponibles[$i][0] ?>&realizarTrabajo=true" class="btn btn-primary">Realizar trabajo</a></td>
                                            <tr>
                                            <?PHP
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            <?PHP
                            } else {
                                print "No hay trabajos pendientes...";
                            }
                            ?>
                        </section>
                        <section class="container col-12 col-xl-12 d-flex flex-column p-1">
                            <h3>Trabajos realizados</h3>
                            <?php
                            $trabajosRealizados = verTrabajosRealizados($_SESSION["usuarioActual"][0]);
                            if (@count($trabajosRealizados) > 0) {
                            ?>
                                <table class="table table-dark table-hover" style="width: 100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre parcela</th>
                                            <th scope="col">Tipo tarea</th>
                                            <th scope="col">Fecha de registro</th>
                                            <th scope="col">Fecha de realizacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
                                        for ($i = 0; $i < count($trabajosRealizados); $i++) {
                                        ?>
                                            <tr>
                                                <td><?= obtenerInformacionParcela($trabajosRealizados[$i][1])[1] ?></td>
                                                <td><?= $trabajosRealizados[$i][5] ?></td>
                                                <td><?= $trabajosRealizados[$i][6] ?></td>
                                                <td><?= $trabajosRealizados[$i][7] ?></td>
                                            <tr>
                                            <?PHP
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            <?PHP
                            } else {
                                print "No hay trabajos realizados...";
                            }
                            ?>
                        </section>
                    <?PHP
                    }
                    if (in_array("Agricultor", $_SESSION["listaRoles[]"])) {
                    ?>
                        <section class="container col-12 col-xl-12 d-flex flex-column p-1">
                            <h3>Trabajos en proceso </h3>
                            <?php
                            $trabajosPendientes = verTrabajosPendientes($_SESSION["usuarioActual"][0]);
                            if (@count($trabajosPendientes) > 0) {
                            ?>
                                <table class="table table-dark table-hover" style="width: 100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre parcela</th>
                                            <th scope="col">Tipo tarea</th>
                                            <th scope="col">Fecha de registro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
                                        for ($i = 0; $i < count($trabajosPendientes); $i++) {
                                        ?>
                                            <tr>
                                                <td><?= obtenerInformacionParcela($trabajosPendientes[$i][1])[1] ?></td>
                                                <td><?= $trabajosPendientes[$i][5] ?></td>
                                                <td><?= $trabajosPendientes[$i][6] ?></td>
                                            <tr>
                                            <?PHP
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            <?PHP
                            } else {
                                print "No hay trabajos en proceso de ser realizados.";
                            }
                            ?>
                        </section>
                    <?PHP
                    }
                    if (in_array("Agricultor", $_SESSION["listaRoles[]"])) {
                    ?>
                        <section class="container col-12 col-xl-12 d-flex flex-column p-1">
                            <h3>Trabajos finalizados </h3>
                            <?php
                            $trabajosFinalizados = verTrabajosTerminados($_SESSION["usuarioActual"][0]);
                            if (@count($trabajosFinalizados) > 0) {
                            ?>
                                <table class="table table-dark table-hover" style="width: 100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre parcela</th>
                                            <th scope="col">Tipo tarea</th>
                                            <th scope="col">Fecha de registro</th>
                                            <th scope="col">Fecha de realizacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
                                        for ($i = 0; $i < count($trabajosFinalizados); $i++) {
                                        ?>
                                            <tr>
                                                <td><?= obtenerInformacionParcela($trabajosFinalizados[$i][1])[1] ?></td>
                                                <td><?= $trabajosFinalizados[$i][5] ?></td>
                                                <td><?= $trabajosFinalizados[$i][6] ?></td>
                                                <td><?= $trabajosFinalizados[$i][7] ?></td>
                                            <tr>
                                            <?PHP
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            <?PHP
                            } else {
                                print "No hay trabajos finalizados, de momento.";
                            }
                            ?>
                        </section>
                    <?PHP
                    }
                    ?>
                </section>
            <?PHP
            }
            ?>
        </main>
        <footer class="text-center text-lg-start text-white" style="background-color: #28242c; width: 100%;">
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
        print "<section class=\"container col-12 col-xl-12 d-flex flex-column p-5\" style=\"text-align: center; margin-top:40vh; background-color:rgba(255, 255, 255, 0.8); font-size: 30px;\"> <p> No tienes permisos para acceder. Por favor, <a href=\"index.php\"> inicia sesion </a> </p></section>";
    }
    ?>
</body>

</html>
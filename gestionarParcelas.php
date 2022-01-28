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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="d-flex flex-column" style="background-image: url('img/fondo.jpg'); overflow-x: hidden; background-repeat: no-repeat; background-size: cover;">
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
                                        <a class="nav-link active" href="gestionarParcelas.php">Gestionar parcelas <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map">
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
        <main class="row d-flex justify-content-around">
            <?PHP
            if (!isset($_SESSION["listaRoles[]"])) {
            ?>
                <section class="container col-12 col-xl-6 d-flex" style="background-color: white; margin-top: 30vh;">
                    <p style="text-align: center; margin: auto; padding: 5vw;">Aun no tiene roles, espere a que un administrador le de un rol o <a href="mailto: gillerav01@educantabria.es"> contacte con un administrador.</a></p>
                </section>
            <?PHP
            } else {
                if (isset($_REQUEST["registrarParcela"])) {
                    $dir_subida = 'gml/';
                    if (!file_exists($dir_subida . $_FILES['archivoGML']['name'])) {
                        $fichero_subido = $dir_subida . basename($_FILES['archivoGML']['name']);
                        if (move_uploaded_file($_FILES['archivoGML']['tmp_name'], $fichero_subido)) {
                            registrarParcela(substr($fichero_subido, 4), $_REQUEST["nombreParcela"], $_SESSION["usuarioActual"][0]);
                        }
                    } else {
                        $date = date_create();
                        $fichero_subido = $dir_subida . basename(date_timestamp_get($date) . '_' . $_FILES['archivoGML']['name']);
                        if (move_uploaded_file($_FILES['archivoGML']['tmp_name'], $fichero_subido)) {
                            registrarParcela(substr($fichero_subido, 4), $_REQUEST["nombreParcela"], $_SESSION["usuarioActual"][0]);
                        }
                    }
                }
            ?>
                <section class="col-12 col-xl-10 bg-light d-flex p-1 flex-column justify-content-center rounded mt-2 p-2 text-center">
                    <h2>Ver parcelas</h2>
                </section>
                <section class="col-12 col-xl-5 bg-light d-flex p-1 flex-column justify-content-center rounded mt-2 mb-2 p-2 text-center">
                    <h2>Registrar parcelas</h2>
                    <form enctype="multipart/form-data" action="gestionarParcelas.php" method="POST" class="d-flex flex-column align-items-center justify-content-center gap-5">
                        <label for="archivoGML">Añade tu archivo .gml: </label><input type="file" name="archivoGML" id="archivoGML" accept=".gml">
                        <label for="nombreParcela">Nombre <input type="text" name="nombreParcela" id="nombreParcela">
                            <input type="submit" name="registrarParcela" value="Registrar parcela" class="btn btn-primary">
                    </form>
                </section>
                <section class="col-12 col-xl-5 bg-light d-flex p-1 flex-column justify-content-center rounded mb-2 mt-xl-2 p-2 text-center">
                    <h2>Borrar parcelas</h2>
                    <?PHP
                    if (isset($_REQUEST["borrarParcela"])) {
                        borrarParcela($_SESSION["usuarioActual"][0], $_REQUEST["idParcela"]);
                    }
                    $parcelasBorrar = obtenerParcelas($_SESSION["usuarioActual"][0]);
                    if (@count($parcelasBorrar) > 0 || $parcelasBorrar != null) {
                    ?>
                        <table class="table table-white table-hover" style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre parcela</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Ubicada en</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?PHP
                                for ($i = 0; $i < count($parcelasBorrar); $i++) {
                                ?>
                                    <tr>
                                        <td><?= $parcelasBorrar[$i][0] ?></td>
                                        <td><?= $parcelasBorrar[$i][1] ?></td>
                                        <td><?= $parcelasBorrar[$i][2] ?></td>
                                        <td><?= devolverProvincia($parcelasBorrar[$i][5]) ?></td>
                                        <td><a href="gestionarParcelas.php?idParcela=<?= $parcelasBorrar[$i][0] ?>&borrarParcela=true" class="btn btn-danger">Borrar parcela</a></td>
                                    <tr>
                                    <?PHP
                                }
                                    ?>
                            </tbody>
                        </table>
                    <?PHP
                    } else if (@count($parcelasBorrar) == 0){
                    ?>
                        <p>No hay parcelas registradas. </p>
                </section>
            <?PHP
                    } else if ($parcelasBorrar == null){
                        ?>
                        <script>
                            alert("La parcela que has intentado borrar, tiene trabajos asignados.")
                        </script>
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
        print "<p> No tienes permisos para acceder. Por favor, <a href=\"index.php\"> inicia sesion </a> </p>";
    }
    ?>
</body>

</html>
<?PHP
session_start();
include "lib/funciones.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/main.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body class="principal">
        <?PHP
        if (@$_REQUEST["cerrarSesion"]) {
            session_destroy();
        }
        if (isset($_REQUEST["inSesion"])) {
            $conexion = conectar();
            if (verificado($_REQUEST["login"], $_REQUEST["pwd"])) {
                header("Location: menuPrincipal.php");
            } else {
                header("Location: index.php");
            }
        } else if (isset($_REQUEST["registrarse"])) {
            header("Location: registro.php");
        } else {
            ?>
            <form action="index.php" method="post" class="formularioLogueo" autocomplete="off">
                <h1>Gestion de drones y parcelas</h1>
                <input type="text" placeholder="Introduzca su DNI o Correo" id="campoNombre" name="login" class="campoNombre campoTexto">
                <input type="password" placeholder="Introduzca su contraseña" name="pwd" id="pwd" class="campoContraseña campoTexto">
                <section class="botones">
                    <input type="submit" value="Iniciar sesion" name="inSesion" id="iniciarSesion" class="boton">
                    <input type="submit" value="Registrarse" name="registrarse" class="boton">
                </section>
                <section id="errores" class="errores"></section>
            </form>
            <?PHP
        }
        ?>
    </body>
</html>

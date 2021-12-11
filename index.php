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
    <body>
        <?PHP
        if (isset($_REQUEST["inSesion"])) {
            $conexion = conectar();
            if (verificado($_REQUEST["login"], $_REQUEST["pwd"])){
                print "cierto";
            }
        } else if (isset($_REQUEST["registrarse"])) {
            header("Location: registro.php");
        } else {
            ?>
            <form action="index.php" method="post">
                <h1>Gestion de drones y parcelas</h1>
                <input type="text" placeholder="Introduzca su DNI o Correo" name="login">
                <input type="password" placeholder="Introduzca su contraseña" name="pwd">
                <section class="botones">
                    <input type="submit" value="Iniciar sesion" name="inSesion">
                    <input type="submit" value="Registrarse" name="registrarse">
                </section>
            </form>
            <?PHP
        }
        ?>
    </body>
</html>

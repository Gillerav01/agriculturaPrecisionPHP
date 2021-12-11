<?PHP
session_start();
include "lib/funciones.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/main.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body>
        <?PHP
        if (isset($_REQUEST["cancelar"])) {
            header("Location: index.php");
        } else {
            if (isset($_REQUEST["registrarse"])) {
                $conexion = conectar();
                $nombre = $_REQUEST["nombre"];
                $apellido = $_REQUEST["apellido"];
                $dni = $_REQUEST["dni"];
                $pwd = $_REQUEST["pwdConfirmada"];
                $correo = $_REQUEST["email"];
                $DNIs = "SELECT dni FROM `agricultores`";
                $consulta = mysqli_query($conexion, $DNIs) or die("Fallo en la consulta");
                $instruccion = "INSERT INTO `agricultores` (`id`, `nombre`, `apellido`, `dni`, `password`, `email`) VALUES (NULL, \"$nombre\", \"$apellido\", \"$dni\", \"$pwd\", \"$correo\");";
                print "<section class=\"resultado\"> \n";
                $consulta = mysqli_query($conexion, $instruccion) or die("<p> El DNI o el correo ya están registrados. Por favor, <a href=\"index.php\"> Inicia sesion en tu cuenta <a></p>");
//                print " <h3> Cuenta creada correctamente. Redirigiendo a la pagina de inicio.</h3></section>";
//                sleep(3);
                header("Location: index.php");
            } else {
                ?>
                <form action="registro.php" method="post" id="formularioRegistro">
                    <h1>REGISTRO</h1>
                    <input type="text" placeholder="Introduzca su DNI" name="dni" id="dni">
                    <input type="text" placeholder="Introduzca su Nombre" name="nombre" id="nombre">
                    <input type="text" placeholder="Introduzca su Apellido" name="apellido" id="apellido">
                    <input type="password" placeholder="Introduzca su contraseña" name="pwd" id="pwd">
                    <input type="password" placeholder="Confirme su contraseña" name="pwdConfirmada" id="pwdConfirmada">
                    <input type="text" placeholder="Introduzca su email" name="email" id="correo">
                    <section class="botones">
                        <input type="submit" value="Registrarse" name="registrarse" id="enviar">
                        <input type="submit" value="Cancelar" name="cancelar" id="cancelar">
                    </section>
                    <section id="errores" class="errores"></section>
                </form>
                <?PHP
            }
        }
        ?>
    </body>
</html>

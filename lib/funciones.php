<?php
function conectar() {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "agr_precision";
    $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos");
    return $conexion;
}

function cerrarConexion($conexion) {
    $close = mysqli_close($conexion) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
    return $close;
}

function verificado($loginRecuperado, $pwdRecuperada) {
    conectar();

    if ($resultado > 0) { 
        $instruccion = "SELECT nombre, apellido, dni, email FROM `agricultores` WHERE dni = \"$loginRecuperado\" OR email = \"$loginRecuperado\";";
        $consulta = mysqli_query($conexion, $instruccion) or die("Fallo en la consulta de inicio de sesion");
        $usuarioRecuperado = mysqli_fetch_array($consulta);
        $usuario = array();
        array_push($usuario, $usuarioRecuperado);
//        $instruccion = "SELECT DISTINCT roles.nombre_rol, usuarios.nombre FROM ((roles INNER JOIN usuarios_roles ON roles.id_rol = usuarios_roles.id_rol) INNER JOIN usuarios ON usuarios.id_usr = $idRecuperada[0]);";
//        $consulta = mysqli_query($conexion, $instruccion) or die("Fallo en la consulta de los roles");
//        $columnas = mysqli_num_rows($consulta);
//        if ($columnas > 0) {
//            $roles = array();
//            for ($i = 0; $i < $columnas; $i++) {
//                $resultado = mysqli_fetch_array($consulta);
//                array_push($roles, $resultado[0]);
//            }
            $_SESSION["usuarioIniciado[]"] = $usuario;
            $_SESSION["listaRoles[]"] = $roles;
//        }
        return true;
    } else {
        return false;
    }
}

<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    $usuario = $_POST['usuario'];
    $contrasena = md5($_POST['contrasena']);

    $sql = "SELECT * FROM `empresas` WHERE `usuario`='$usuario' AND `contrasena`='$contrasena'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['usuario']) && empty($_POST['contrasena'])) {
        echo "<script>alert('Por favor ingrese usuario y contraseña');
        window.location.href='../vistas/login_empresas.php';</script>";
        exit;
    } elseif (empty($_POST['contrasena'])) {
        echo "<script>alert('Por favor ingrese contraseña');
        window.location.href='../vistas/login_empresas.php';</script>";
        exit;
    } elseif (empty($_POST['usuario'])) {
        echo "<script>alert('Por favor ingrese usuario');
        window.location.href='../vistas/login_empresas.php';</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $usuario= $row['usuario'];
            $contrasena = $row['contrasena'];


            if ($usuario == $usuario && $contrasena == $contrasena ) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['contrasena'] = $contrasena;
                header('location:../vistas/Inicio_empresas.php');
            }
        } else {
            echo "<script>alert('Usuario o contraseña invalido');
            window.location.href='../vistas/login_empresas.php';</script>";
            exit;
        }
    }

}

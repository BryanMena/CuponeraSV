<?php
include_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $pass = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO Empresas (Nombre, NIT, Direccion, Telefono, Email, Usuario, Contrasena, FK_estado_aprobacion, Comision) VALUES ('$nombre', '$nit', 'Text', '$telefono', '$email', '$usuario', '$pass', '1', '0.00')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Compañia registrada exitosamente');
            window.location.href='../vistas/login_empresas.php';</script>";
        exit;
    } else {
        die(mysqli_error($conn));
    }
}

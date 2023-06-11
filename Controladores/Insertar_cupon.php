<?php
include_once('connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $empresa = $_SESSION['ID_empresa'];
    $titulo = $_POST['titulo'];
    $precioR = $_POST['PrecioR'];
    $precioO = $_POST['PrecioO'];
    $fechaI = $_POST['FechaI'];
    $fechaF = $_POST['FechaF'];
    $fechaL = $_POST['FechaL'];
    $cantidad = $_POST['Cantidad'];
    $descripcion = $_POST['Descripcion'];
    $imagen = $_POST['Imagen'];
    $categoria = $_POST['Categoria'];

    $archivo = $_FILES['Imagen']['tmp_name'];
    $ruta = "../ImagenesCupones";

    $ruta = $ruta . "/" . $imagen;
    move_uploaded_file($archivo, $ruta);

    $sql = "INSERT INTO Cupones ( FK_empresa,Titulo_cupon,Precio_regular, Precio_oferta,Fecha_inicio_oferta, Fecha_fin_oferta, Fecha_limite_canje, 
    Cantidad_cupones, Descripcion,Imagen,FK_categoria,FK_estado_oferta) 
    VALUES (1, '$titulo', ' $precioR', '$precioO', '$fechaI', '$fechaF', '$fechaL', '$cantidad', ' $descripcion', '$ruta', '$categoria', 1)";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Cupon exitosamente');
        window.location.href='../vistas/Crear_cupon.php'; </script>";
        exit;
    } else {
        die(mysqli_error($conn));
    }
}

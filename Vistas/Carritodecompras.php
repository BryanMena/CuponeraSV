
!doctype html>
<html lang="en">

<head>
  <title>Carrito de compras</title>
  <link rel="shortcut icon" type="image/png" href="../Imagenes/411714.png"/>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="../Index.php">
      <img src="../Imagenes/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      CuponeraSV
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Comida.php">Comida</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Alojamiento.php">Alojamiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Otros.php">Otros</a>
        </li>
      </ul>
      <form class="d-flex">
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
      <a class="btn btn-warning" href="Login_usuarios.php" role="button">Usuarios</a>
      <a class="btn btn-primary" href="Login_empresas.php" role="button">Empresas</a>
      </div>
      </form>
    </div>
  </div>
</nav>


  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3"> Carrito de Compras</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                
              <div align="center">
                <table align="center" border="0">
                  <tr>   
                  <th> ARTICULO</th> 
                  <th> CANTIDAD </th>
                  <th> PRECIO </th>
                  </tr>
                  <?php
                  $Base=mysqli_connect("localhost","root", "", "cuponerabd");
                  $sql="SELECT Titulo_cupon,Cantidad_cupones, Precio_regular FROM `cupones` where Precio_regular";
                  $rta=mysqli_query($Base,$sql);
                  while($mostrar = mysqli_fetch_row($rta))
                  {
                   ?>
                  <tr>
                    <td><?php echo $mostrar['0'] ?></td>   
                    <td><?php echo $mostrar['1'] ?></td>   
                    <td><?php echo $mostrar['2'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $mostrar['3'] ?></td>   
                    <td><?php echo $mostrar['4'] ?></td>   
                    <td><?php echo $mostrar['5'] ?></td>
                  </tr>
                  <?php
                     }
                   ?>
                </table>
                <br>
                <br>
                <br>
                <td>
                <a href="Pagotarjeta.php">
                <button type="button" class="btn btn-primary">PAGAR</button>
                </a> 
                       
                </td>
                <br>
                <br>
              </div>
                  <p align="center">REGRESAR A <a href="Inicio_admin.php" class="text-primary" style="font-weight:600; text-decoration:none;">Inicio </a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../Imagenes/carrito.png" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
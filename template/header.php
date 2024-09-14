
<!DOCTYPE html>
<!--AQUI ENTRA EL CODIGO DE REGISTRAR USUARIO,INICIAR SESION-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROYECTO DE GRADO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!--COLOR DE LA BARRA-->
<link rel="stylesheet" href="dist/css/alt/estilos.css">
<link rel="stylesheet" href="dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

<!--PRELOADER -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/imagenes/arbol1.png" alt="Logotipo">
    </div>

<!--HEADER: //../../template/header.php-->
<!--HEADER-->
  <!-- BARRA-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- BARRA DE BUSQUEDA-->
      <ul class="navbar-nav ml-auto">
      

        <!-- DESPLEGAR EL MENU -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

<!-- CONTENEDOR DE LA BARRA -->
    <aside class="main-sidebar"> <!--CAMBIANDO COLOR DE LA BARRA-->

<!-- PANEL DE USUARIO -->
      <div class="sidebar">
<!-- PANEL DE USUARIO -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="parrafo">USUARIO</a>
          </div>
        </div>

<!--BARRA DE MENU-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../secciones/Inicio/index.php" class="nav-link">
                 <i class="nav-icon">
                 <img width="32" height="32" src="https://img.icons8.com/windows/32/FFFFFF/four-squares.png" alt="four-squares"/>
                </i>
                <p class="parrafo">
                 Inicio
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="../secciones/Productos/index.php" class="nav-link active">
                <i class="nav-icon">
                <img width="32" height="32" src="https://img.icons8.com/windows/32/FFFFFF/shopping-cart.png" alt="shopping-cart"/>
                </i>
                <p class="parrafo">
                  Productos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active"><!--PONER EN COCA-STEVIA Y PRODUCTOS UNA NUEVA REFERENCIA-->
                  <i class="far fa-circle nav-icon"></i>
                    <p class="parrafo">Coca</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link"> <!--PONER EN COCA-STEVIA Y PRODUCTOS UNA NUEVA REFERENCIA-->
                  <i class="far fa-circle nav-icon"></i>
                  <p class="parrafo">Stevia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"> <!--PONER EN COCA-STEVIA Y PRODUCTOS UNA NUEVA REFERENCIA-->
                  <i class="far fa-circle nav-icon"></i>
                    <p class="parrafo">Productos</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./secciones/proveedores.index.php" class="nav-link">
                <i class="nav-icon ">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/supplier.png" alt="supplier"/>
                </i>
                <p class="parrafo">
                  Proveedores
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./secciones/Ventas/index.php" class="nav-link">
                <i class="nav-icon">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/total-sales-1.png" alt="total-sales-1"/>
                </i>
                <p class="parrafo">
                 Ventas
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./secciones/Inventario/index.php" class="nav-link">
                <i class="nav-icon">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/move-by-trolley.png" alt="move-by-trolley"/>
                </i>
                <p class="parrafo">
                Inventario
                </p>
              </a>
            </li>



            
            <li class="nav-item">
              <a href="./secciones/Balance/index.php" class="nav-link">
                <i class="nav-icon">
                <img width="30" height="30" src="https://img.icons8.com/wired/64/FFFFFF/general-ledger.png" alt="general-ledger"/>
                </i>
                <p class="parrafo">
                Balance
                </p>
              </a>
            </li>









            <li class="nav-item">
              <a href="./secciones/Reportes/index.php" class="nav-link">
                <i class="nav-icon">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/business-report.png" alt="business-report"/>
                </i>
                <p class="parrafo">
                Reportes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./secciones/Configuraciones/index.php" class="nav-link">
                <i class="nav-icon">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/settings--v1.png" alt="settings--v1"/>
                </i>
                <p class="parrafo">
                Configuraciones
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"> <!--PONER EN COCA-STEVIA Y PRODUCTOS UNA NUEVA REFERENCIA-->
              <i class="nav-icon">
              <img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/exit--v1.png" alt="exit--v1"/>
                </i>
                <p class="parrafo">
               Cerrar Sesion
                </p>
              </a>
            </li>
      

</nav>
</aside>
<!--FOOTER: ../../template/footer.php-->

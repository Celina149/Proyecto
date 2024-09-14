<!--AQUI ENTRA EL CODIGO -->
<?php
include('./template/header.php');
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     

       <!--BARRA DE BUSQUEDA-->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Perfil Usuario</h2>
        </div>
    </section>
    <section>
    <div class="row">
      
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('./dist/img/photo1.png') center center;">
              </div>
  <!---------------------------------->
<!--EXISTEN PROBLEMAS EN ESTA LINEA DE CODIGO-->
            <div class="text-center">
  <img class="rounded-circle" src="./dist/img/user3-128x128.jpg"  alt="User Avatar">
</div>
<div>
<h3 class="text-center"class="widget-user-username text-right">Elizabeth Pierce</h3>
</div>
<!--AQUI ENTRAN LOS EMAILS Y CONTRASENA DEL USUARIO SI QUIERE CAMBIARLAS TENDRA 
QUE UTILIZAR EL BOTON PARA CAMBIAR SU USUARIO Y CONTRASENA (SE ESTA PONIENDO COMO PREDETERMINADO EL USUARIO 
Y LA CONTRASENA A MENOS QUE TOQUE EL BOTON DE CABIAR)-->
<!--CORREGIR-->
<div class="form-container" >
<div class="mb-3">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
     <input type="inputEmail" class="form-control" id="inputEmail" value="correoElectronico@gmail.com">

    </div>
  </div>
  <div class="mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" value="contrasena">
    </div>
  </div>
<div class="d-grid gap-2 col-11 d-md-flex justify-content-md-end">
  <button class="btn btn-secondary me-md-2" type="button">Button</button>

</div>

</div>


    <section class="content">
        <div class="container-fluid">
        <h2 class="text-center">Usuarios Con Acceso</h2>
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Buscar" value="Nombre del Usuario">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
      <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                   
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                     <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                     <td>
                      <a class="btn btn-secondary" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="bi bi-trash"></i> Editar
                            </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /btn btn-info   








            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <div class="button">
<button type="button" class="btn btn-info">Guardar</button>
</div>

     
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->\
<?php
include('./template/footer.php');
?>
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
            <h2 class="text-center display-4">Inventario</h2>
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Buscar" value="Nombre producto">
                                <div class="input-group-append">
    <button type="submit" class="btn btn-lg btn-default">
        <i class="fa fa-search"></i>
    </button>
        <button type="button" class="btn btn-success">

        Registrar producto
        <i class="ion-plus-circled"></i>
       

      </button>
</div>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<!--CONTENIDO DE LA TABLA-->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de productos-Coca</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                      <a class="btn btn-info" href="#">
                                <i class="bi bi-eye-fill"></i> Ver
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="bi bi-trash"></i> Eliminar
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
    <!-- /.content -->
     
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->\
<?php
include('./template/footer.php');
?>
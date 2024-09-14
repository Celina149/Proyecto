<!--AQUI ENTRA EL CODIGO -->
<?php
include('./template/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">


    <section class="content">
      <div class="container-fluid">
        <h2 class="text-center display-4">Reportes</h2>
        <form action="enhanced-results.html">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="row">
                <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Fecha de Inicio</label>
                  <input type="FechaInicio" class="form-control" id="exampleFormControlInput1" placeholder="Introdusca la fecha de inicio">
                </div>
                <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Fecha de Fin</label>
                  <input type="FechaFin" class="form-control" id="exampleFormControlInput1" placeholder="Introdusca la fecha de fin">
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label>Opciones:</label>
                    <select class="select2" style="width: 100%;">
                      <option selected>Ventas</option>
                      <option>Inventario</option>
                    </select>
                  </div>
                </div>
                <div class="content-header">
<!--LO DEFINIMOS ESTA PARTE PARA HACER ESPACIO-->
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
                <h3 class="card-title">Fixed Header Table</h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>Jim Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
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
    <section>
    <div class="d-flex justify-content-center align-items-center">
        <button class="btn btn-primary">Imprimir</button>
    </div>
</section>



  </div>
  <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->\
<?php
include('./template/footer.php');
?>
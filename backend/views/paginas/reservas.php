<?php 
  if($admin["perfil"] != "Administrador"){
    echo '<script>
      window.location = "categorias";
    </script>';
    return;
  }

  if(isset($_GET["notification"])){
    $respuesta = ControladorInicio::ctrActualizarNotificaciones("reservas", 0);
  }
 ?>

<div class="content-wrapper" style="min-height: 1667.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reservas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Reservas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  
  <!-- Módulo de gráfico de ventas -->

  <?php 
    include "modulos/ventas.php";    
   ?>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-striped dt-responsive tablaReservas" width="100%">

                <thead>

                  <tr>

                    <th style="width:10px">#</th>
                    <th>Código</th>
                    <th>Libro</th>
                    <th>Usuario</th>
                    <th>Pago</th>
                    <th>Transacción</th>
                    <th>Desde</th>
                    <th>Hasta</th>
                    <th style="width:100px">Acciones</th>

                  </tr>

                </thead>

                <tbody>

                  <!-- <tr>

                    <td>1</td>
                    <td>6NJS06V8L</td>
                    <td>Felipe Trujillo</td>
                    <td>$ <?php echo number_format(900000, 2, ",", "."); ?></td>
                    <td>19680828</td>
                    <td>2019-10-17</td>
                    <td>2019-10-20</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt text-white"></i></button> <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>

                    </td>


                  </tr> -->
                </tbody>


              </table>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<!--=====================================
Modal Editar Reserva
======================================-->

<div class="modal" id="editarReserva">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

     <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editar Reserva: <span class="small"></span></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

       <!-- Modal body -->
      <div class="modal-body">

        <h6 class="lead pt-4 pb-2">Puede modificar la fecha de acuerdo a los días disponibles:</h6>

        <div class="container mb-3">

          <div class="row py-2">

             <div class="col-6 col-md-3 input-group pr-1">
            
              <input type="text" class="form-control datepicker desde" autocomplete="off" placeholder="Desde" value=""  required>

              <div class="input-group-append">
                
                <span class="input-group-text"><i class="far fa-calendar-alt small text-gray-dark"></i></span>
              
              </div>

            </div>

            <div class="col-6 col-md-3 input-group pl-1">
            
              <input type="text" class="form-control datepicker hasta" readonly required>

              <div class="input-group-append">
                
                <span class="input-group-text"><i class="far fa-calendar-alt small text-gray-dark"></i></span>
              
              </div>

            </div>

            <div class="col-12 col-md-6 mt-2 mt-lg-0 input-group">
                            
              <button class="btn btn-primary verDisponibilidad" idLibro>Ver disponibilidad</button>

            </div>

          </div>

        </div>

        <div class="bg-white p-4 calendarioReservas">

          <div class="infoDisponibilidad">
            <h1 class="pb-5 float-left infoDisponibilidad">¡Está disponible!</h1>
          </div>

          <div class="float-right pb-3">
              
            <ul style="list-style:none">
              <li>
                <i class="fas fa-square-full" style="color:#847059"></i> No disponible
              </li>

              <li>
                <i class="fas fa-square-full" style="color:#eee"></i> Disponible
              </li>

              <li>
                <i class="fas fa-square-full" style="color:#FFCC29"></i> Tu reserva
              </li>
            </ul>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="agregarCalendario p-3"></div>

      </div>

       <!-- Modal footer -->
      <div class="modal-footer d-flex">

        <div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

        <div>
          <button type="button" class="btn btn-primary guardarNuevaReserva" fechaDesde fechaHasta idReserva>Guardar</button>
        </div>

      </div>

    </div>

  </div>

</div>
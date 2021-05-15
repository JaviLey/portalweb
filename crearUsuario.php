   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">INGRESAR NUEVO COLEGIADO/USUARIO</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            <!--aqui vamos a rellenar el input con el id del colegiado nuevo que vamos a ingresar-->
                            <!--<input type="hidden" name="iduser" value="">-->
                            <div class="card-body">
                                <label for="exampleInputClave">Clave Colegiado*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="claveuser"  class="form-control" placeholder="Escribe CLAVE unica de colegiado" required="required">
                                </div>
                                <label for="exampleInputNombre">Nombre Colegiado*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nuevoNombre" class="form-control" placeholder="Nombre Completo Colegiado" required="required">
                                </div>
                                <label for="exampleInputUsuario">Usuario*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nuevoUsuario" class="form-control" placeholder="Nombre de Usuario" required="required">
                                </div>
                                <label for="exampleInputInstitucional">Correo Personal*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="nuevoEmailP" class="form-control" placeholder="example@nombre.com" required="required">
                                </div>
                                <label for="exampleInputInstitucional">Correo Institucional*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="nuevoEmail" class="form-control" placeholder="example@cimechiapas.mx" required="required">
                                </div>
                                <label for="exampleInputContraseña">Contraseña*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="nuevaPass" pattern=".{6,}" class="form-control" placeholder="Contraseña Default Colegiado" required="required">
                                </div>
                                <label for="exampleInputNombre">Telefono*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="nuevoCel" class="form-control" placeholder="Telefono Celular/Fijo" required="required">
                                </div>
                                <label for="exampleInputFoto"></label>
                                <div class="input-group">
                                        <input type="hidden" name="nuevaFoto" value="vistas/img/user2-160x160.png">
                                        <input type="hidden" name="status" value="1">
                                        <input type="hidden" name="fechaingreso" value="<?php echo $DateAndTime = date('m-d-Y h:i:s a', time());?>">
                                </div>
                                <label for="exampleInputtipologia">Tipo de Usuario</label>
                                <div class="input-group">
                                    <select class="form-control select2 select2-hidden-accessible" name="nuevoTipo" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" data-select2-id="">Selecciona un tipo de Usuario</option>
                                            <option data-select2-id="Admin" value="Admin">ADMINISTRADOR</option>
                                            <option data-select2-id="Colegiado" value="Colegiado">COLEGIADO</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">INGRESAR</button>
                            </div>
                            <?php
                                //aqui vamos a colocar la logica del login donde vamos a visualizar el llamado del contralador
                                //instansiandolo en un objeto 
                                $login = new ControladorUsuarios();
                                $login->ctrCrearUsuario();
                                //print_r($login->errorInfo());
                            ?>
                        </form>
                        </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar usiarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar usuario
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive dtable" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último login</th>
              <th>Acciones</th>
            </tr>
          </thead>
        <tbody>
          <?php 
              $item = null;
              $value = null;
              $users = UsersController::ctrShowUsers($item, $value);
              foreach ($users as $key => $value) {
                echo '<tr>
                  <td>'.$value["id"].'</td>
                  <td>'.$value["name"].'</td>
                  <td>'.$value["user"].'</td>
                  <td><img src="views/img/users/default/anonymous.png" alt=""></td>
                  <td>'.$value["profile"].'</td>
                  <td><button class="btn btn-success btn-xs">Activado</button></td>
                  <td>2017-12-11 12:05:32</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalUpdateUser"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>';
              }
          ?>
        </tbody>
        </table>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background: #3c8dbc; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Usuario</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">

            <!-- nombre usuario -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nuevoNombre" class="form-control input-lg" placeholder="Ingresar nombre" required>
              </div>
            </div>

            <!-- usuario -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" name="nuevoUsuario" class="form-control input-lg" placeholder="Ingresar usuario" required>
              </div>
            </div>

            <!-- contraseeña -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" name="nuevoPassword" class="form-control input-lg" placeholder="Ingresar contraseña" required>
              </div>
            </div>

            <!-- perfil -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select name="nuevoPerfil" class="form-control input-lg">
                  <option value="">Seleccionar perfil</option>
                  <option value="1">Administrador</option>
                  <option value="2">Especial</option>
                  <option value="3">Vendedor</option>
                </select>
              </div>
            </div>

            <!-- foto -->
            <div class="form-group">
              <div class="panel">Subir foto</div>
              <input type="file" name="nuevaFoto" id="nuevaFoto">
              <p class="help-block">Peso máximo de la foto 200 MB</p>
              <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar usuario</button>
        </div>

        <?php

          $createUser = new UsersController();
          $createUser->ctrCreateUser();

        ?>
      </form>
    </div>

  </div>
</div>


<!-- modal editar -->
<div id="modalUpdateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background: #3c8dbc; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">

            <!-- nombre usuario -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" id="editarNombre" name="editarNombre" class="form-control input-lg" value="" required>
              </div>
            </div>

            <!-- usuario -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" id="editarUsuario" name="editarUsuario" class="form-control input-lg" value="" required>
              </div>
            </div>

            <!-- contraseeña -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" id="editarPassword" name="editarPassword" class="form-control input-lg" placeholder="Escriba la nueva contraseña" required>
              </div>
            </div>

            <!-- perfil -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select name="editarPerfil" class="form-control input-lg">
                  <option value="" id="editarPerfil"></option>
                  <option value="1">Administrador</option>
                  <option value="2">Especial</option>
                  <option value="3">Vendedor</option>
                </select>
              </div>
            </div>

            <!-- foto -->
            <div class="form-group">
              <div class="panel">Subir foto</div>
              <input type="file" name="editarFoto" id="editarFoto">
              <p class="help-block">Peso máximo de la foto 200 MB</p>
              <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Modificar usuario</button>
        </div>

        <?php

          $createUser = new UsersController();
          $createUser->ctrCreateUser();

        ?>
      </form>
    </div>

  </div>
</div>

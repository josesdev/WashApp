<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>

<div class="col-sm-offset-2 col-sm-8">
  <div class="well bs-component">
    <h3 class="center">Editar empleado</h3>

    <form class="form-horizontal" method="post" action="index.php" name="loginform">
      <div class="form-group">
        <label for="user_realname" class="col-lg-5 control-label">Apellido y Nombre</label>
        <div class="col-lg-5">
          <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z]{2,64}" name="user_realname" value="Ramírez, Karina Anyelén" required />
        </div>
      </div>
      <div class="form-group">
        <label for="user_dni" class="col-lg-5 control-label">DNI (sólo números)</label>
        <div class="col-lg-5">
          <input id="user_dni" class="form-control" type="text" pattern="[0-9]{8}" name="user_dni" value="39233433" required />
        </div>
      </div>
      <div class="form-group">
        <label for="user_name" class="col-lg-5 control-label">CUIL</label>
        <div class="col-lg-5">
          <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" value="30-39233433-1" required />
        </div>
      </div>
      <div class="form-group">
        <label for="birthday" class="col-lg-5 control-label">Fecha de nacimiento</label>
        <div class="col-lg-5">
          <input type="text" class="form-control" id="birthday" value="14/05/1995"></input>
        </div>
      </div>
      <div class="form-group">
        <label for="em_sex" class="col-lg-5 control-label">Sexo</label>
        <div class="col-lg-5">
          <select class="selectpicker" name="em_sex">
            <option>Masculino</option>
            <option selected="selected">Femenino</option>
            <option>Ecológico</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="user_name" class="col-lg-5 control-label">Dirección</label>
        <div class="col-lg-5">
          <input id="user_address" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_address" value="Maipu 1250, Corrientes" required />
        </div>
      </div>
      <div class="form-group">
        <label for="user_email" class="col-lg-5 control-label">Correo electrónico</label>
        <div class="col-lg-5">
          <input id="user_email" class="form-control" type="email" name="user_email" value="kari_the_explosion@gmail.com" required />
        </div>
      </div>
      <div class="form-group">
        <label for="user_password_new" class="col-lg-5 control-label">Contraseña nueva (mínimo 6 caracteres)</label>
        <div class="col-lg-5">
          <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" value="" required autocomplete="off" />
        </div>
      </div>
      <div class="form-group">
        <label for="user_password_new" class="col-lg-5 control-label">Repetir contraseña</label>
        <div class="col-lg-5">
          <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" value="" required autocomplete="off" />
        </div>
      </div>
      <div class="form-group">
        <label for="user_phone" class="col-lg-5 control-label">Teléfono</label>
        <div class="col-lg-5">
          <input id="user_phone" class="form-control" type="text" pattern="[0-9]{2,64}" name="user_phone" value="3794560322" required />
        </div>
      </div>
      <div class="center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Actualizar datos" />
      </div>
    </form>
  </div>
</div>

<?php include('_footer.php'); ?>

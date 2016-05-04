<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Agregar empleado</h3>

<form method="post" action="index.php" name="loginform">
<div class="form-group register">
    <label for="user_realname" class="col-lg-4 control-label">Apellido y Nombre</label>
    <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z]{2,64}" name="user_realname" required />

    <label for="user_dni" class="col-lg-4 control-label">DNI (sólo números)</label>
    <input id="user_dni" class="form-control" type="text" pattern="[0-9]{8}" name="user_dni" required />

    <label for="user_name" class="col-lg-4 control-label">CUIL</label>
    <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

    <label for="birthday" class="col-lg-4 control-label">Fecha de nacimiento</label>
    <input type="text" class="form-control" id="birthday"></input>

    <label for="em_sex" class="col-lg-4 control-label">Sexo</label>
    <select class="selectpicker" name="em_sex">
	    <option>Masculino</option>
	    <option>Femenino</option>
	    <option>Ecológico</option>
    </select>

    <label for="user_name" class="col-lg-4 control-label">Dirección</label>
    <input id="user_address" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_address" required />

    <label for="user_email" class="col-lg-4 control-label">Correo electrónico</label>
    <input id="user_email" class="form-control" type="email" name="user_email" required />

    <label for="user_password_new" class="col-lg-4 control-label">Contraseña (mínimo 6 caracteres)</label>
    <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="user_phone" class="col-lg-4 control-label">Teléfono</label>
    <input id="user_phone" class="form-control" type="text" pattern="[0-9]{2,64}" name="user_phone" required />
</div>
<input type="submit" class="btn btn-success submitL" name="login" value="Registrar empleado" />
</form>

<script type="text/javascript">
$(function() {
    $("#birthday").datepicker();
  });
</script>

<?php include('_footer.php'); ?>

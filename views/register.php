<?php include('_header.php'); ?>

<div class="col-sm-offset-2 col-sm-8">
<div class="well bs-component">
<h3 class="center">Registrarse</h3>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<form method="post" action="register.php" name="registerform" class="form-horizontal">
  <div class="form-group">
    <label class="col-lg-4 control-label">Tipo de cliente</label>
    <div class="col-lg-6">
      <div class="radio radio-primary">
        <label>
          <input type="radio" value="option1" id="type_client_p" name="type_client" checked="checked"> Particular
        </label>
        <label>
          <input type="radio" value="option1" id="type_client_c" name="type_client"> Corporativo
        </label>
      </div>
    </div>
  </div>

  <div id="client-register">
    <div class="form-group no-margin-top">
      <label for="user_realname" class="col-lg-4 control-label">Apellido y Nombre</label>
      <div class="col-lg-6">
        <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z]{2,64}" name="user_realname" required />
      </div>
    </div>
    <div class="form-group">
      <label for="user_name" class="col-lg-4 control-label" title="Nombre de usuario (2-64 caracteres)">Nombre de usuario</label>
      <div class="col-lg-6">
        <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
      </div>
    </div>
    <div class="form-group">
      <label for="user_dni" class="col-lg-4 control-label">DNI (sólo números)</label>
      <div class="col-lg-6">
        <input id="user_dni" class="form-control" type="text" pattern="[0-9]{8}" name="user_dni" required />
      </div>
    </div>
  </div>

    <div id="corp-client" class="displayN">
      <div class="form-group no-margin-top">
        <label for="user_realname" class="col-lg-4 control-label">Nombre de la empresa</label>
        <div class="col-lg-6">
          <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_realname" required />
        </div>
      </div>

      <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label" title="Nombre de usuario (2-64 caracteres)">Nombre de usuario</label>
        <div class="col-lg-6">
          <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
        </div>
      </div>

      <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label">CUIT</label>
        <div class="col-lg-6">
          <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="user_email" class="col-lg-4 control-label">Correo electrónico</label>
      <div class="col-lg-6">
        <input id="user_email" class="form-control" type="email" name="user_email" required />
      </div>
    </div>

    <div class="form-group">
      <label for="user_password_new" class="col-lg-4 control-label">Contraseña (mínimo 6 caracteres)</label>
      <div class="col-lg-6">
        <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
      </div>
    </div>

    <div class="form-group">
      <label for="user_password_repeat" class="col-lg-4 control-label">Repetir contraseña</label>
      <div class="col-lg-6">
        <input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
      </div>
    </div>

    <div class="form-group">
      <label for="user_name" class="col-lg-4 control-label">Dirección</label>
      <div class="col-lg-6">
        <input id="user_address" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_address" required />
      </div>
    </div>

    <div class="form-group">
      <label for="user_phone" class="col-lg-4 control-label">Teléfono</label>
      <div class="col-lg-6">
        <input id="user_phone" class="form-control" type="text" pattern="[0-9]{2,64}" name="user_phone" required />
      </div>
    </div>

    <div class="form-group">
      <label for="captcha" class="col-lg-4 control-label">Ingrese el código de seguridad</label>
      <div class="col-lg-6">
        <img src="tools/showCaptcha.php" alt="captcha" />
      </div>
    </div>

    <div class="form-group no-margin-top">
      <div class="col-lg-3 col-lg-offset-4">
        <input id="captcha" type="text" class="form-control" name="captcha" required />
      </div>
    </div>

    <div class="form-group center">
      <button type="button" class="btn btn-raised btn-success">Registrarme</button>
    </div>

<script type="text/javascript">
$(document).ready(function(){
    $("#type_client_p").click(function(){
        $("#corp-client").hide();
        $("#client-register").show();
    });
    $("#type_client_c").click(function(){
        $("#client-register").hide();
        $("#corp-client").show();
    });
});
</script>

</form>
</div>
<?php } ?>

<?php include('_footer.php'); ?>
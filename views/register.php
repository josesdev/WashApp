<?php include('_header.php'); ?>

<h3 class="center">Registrarse</h3>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<form method="post" action="register.php" name="registerform">
<div class="form-group register">
    <label class="col-lg-4 control-label">Tipo de cliente</label>
    <div class="client">
        <input type="radio" name="type_client" id="type_client_p" checked="checked"> <label for="type_client_p" class="cl">Particular</label>
        <input type="radio" name="type_client" id="type_client_c"> <label for="type_client_c" class="cl">Corporativo</label>
    </div>

    <div id="client-register">
        <label for="user_realname" class="col-lg-4 control-label">Apellido y Nombre</label>
        <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z]{2,64}" name="user_realname" required />

        <label for="user_name" class="col-lg-4 control-label" title="Nombre de usuario (2-64 caracteres)">Nombre de usuario</label>
        <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

        <label for="user_dni" class="col-lg-4 control-label">DNI (sólo números)</label>
        <input id="user_dni" class="form-control" type="text" pattern="[0-9]{8}" name="user_dni" required />
    </div>

    <div id="corp-client">
        <label for="user_realname" class="col-lg-4 control-label">Nombre de la empresa</label>
        <input id="user_realname" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_realname" required />

        <label for="user_name" class="col-lg-4 control-label" title="Nombre de usuario (2-64 caracteres)">Nombre de usuario</label>
        <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

        <label for="user_name" class="col-lg-4 control-label">CUIT</label>
        <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    </div>

    <label for="user_email" class="col-lg-4 control-label">Correo electrónico</label>
    <input id="user_email" class="form-control" type="email" name="user_email" required />

    <label for="user_password_new" class="col-lg-4 control-label">Contraseña (mínimo 6 caracteres)</label>
    <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="user_password_repeat" class="col-lg-4 control-label">Repetir contraseña</label>
    <input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

    <label for="user_name" class="col-lg-4 control-label">Dirección</label>
    <input id="user_address" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_address" required />

    <label for="user_phone" class="col-lg-4 control-label">Teléfono</label>
    <input id="user_phone" class="form-control" type="text" pattern="[0-9]{2,64}" name="user_phone" required />

    <label for="captcha" class="col-lg-4 control-label">Ingrese el código de seguridad</label>
    <img src="tools/showCaptcha.php" alt="captcha" />
    <label for="captcha" class="col-lg-4 control-label"></label>
    <input id="captcha" type="text" class="form-control" name="captcha" required />

    <input type="submit" class="btn btn-success submit" name="register" value="Registrarme" />
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
<?php } ?>

<?php include('_footer.php'); ?>

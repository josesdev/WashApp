<?php include('_header.php'); ?>

<h3 class="center">Iniciar sesión</h3>

<form method="post" action="index.php" name="loginform">
<div class="form-group register">
    <label for="user_name" class="col-lg-4 control-label">Usuario</label>
    <input id="user_name" class="form-control" type="text" name="user_name" required />
    <label for="user_password" class="col-lg-4 control-label">Contraseña</label>
    <input id="user_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
    <label for="user_rememberme" class="col-lg-4 control-label">No cerrar sesión</label>
    <input type="submit" class="btn btn-success submitL" name="login" value="Iniciar sesión" />
</div>
</form>
<div style="text-align: center;">
	<a href="register.php">Registrar nueva cuenta</a> - 
	<a href="password_reset.php">Recuperar contraseña</a>
</div>
<?php include('_footer.php'); ?>

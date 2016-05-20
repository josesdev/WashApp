<?php include('_header.php'); ?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Iniciar sesión</h3>
    <form class="form-horizontal" method="post" action="index.php" name="loginform">
      <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label">Usuario</label>
        <div class="col-lg-6">
          <input id="user_name" class="form-control" type="text" name="user_name" required />
        </div>
      </div>
      <div class="form-group">
        <label for="user_password" class="col-lg-4 control-label">Contraseña</label>
        <div class="col-lg-6">
          <input id="user_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-offset-4 col-lg-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1"> No cerrar sesión
            </label>
          </div>
        </div>
      </div>
      <div class="form-group center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Iniciar sesión" />
      </div>
    </form>

    <?php
    echo'
    <div class="center">
    	<a href="'.$site_url.'/registro">Registrar nueva cuenta</a> -
    	<a href="'.$site_url.'/recuperar-contrasena">Recuperar contraseña</a>
    </div>
  </div>
</div>';

include('_footer.php'); ?>

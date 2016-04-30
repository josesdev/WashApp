<?php include('_header.php'); ?>

<?php if ($login->passwordResetLinkIsValid() == true) { ?>
<form method="post" action="password_reset.php" name="new_password_form">
    <input type='hidden' name='user_name' value='<?php echo htmlspecialchars($_GET['user_name']); ?>' />
    <input type='hidden' name='user_password_reset_hash' value='<?php echo htmlspecialchars($_GET['verification_code']); ?>' />

    <label for="user_password_new">Contraseña</label>
    <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="user_password_repeat">Repetir contraseña</label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit" name="submit_new_password" value="Guardar contraseña" />
</form>
<!-- no data from a password-reset-mail has been provided, so we simply show the request-a-password-reset form -->
<?php } else { ?>
<form method="post" action="password_reset.php" name="password_reset_form">
    <label for="user_name">Solicitar cambio de contraseña. Ingresar el nombre de usuario</label>
    <input id="user_name" type="text" name="user_name" required />
    <input type="submit" name="request_password_reset" value="Cambiar contraseña" />
</form>
<?php } ?>

<?php include('_footer.php'); ?>

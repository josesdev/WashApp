<?php include('_header.php'); ?>

<!-- clean separation of HTML and PHP -->
<h2><?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
    <label for="user_name">Nuevo nombre de usuario (2-64 caracteres)</label>
    <input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (actual: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
    <input type="submit" name="user_edit_submit_name" value="Cambiar nombre de usuario" />
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="user_email">Nuevo email</label>
    <input id="user_email" type="email" name="user_email" required /> (actual: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
    <input type="submit" name="user_edit_submit_email" value="Cambiar email" />
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="user_password_old">Tu contraseña actual</label>
    <input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

    <label for="user_password_new">Nueva contraseña</label>
    <input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

    <label for="user_password_repeat">Repite la contraseña</label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <input type="submit" name="user_edit_submit_password" value="Cambiar contraseña" />
</form><hr/>

<?php include('_footer.php'); ?>

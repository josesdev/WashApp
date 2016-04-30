<?php include('_header.php'); ?>

<?php
// if you need the user's information, just put them into the $_SESSION variable and output them here
echo "Estás logueado como ".htmlspecialchars($_SESSION['user_name']) . "<br />";
//echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;
echo "Tu foto de perfil " . '<br/>' . $login->user_gravatar_image_tag;
?>

<div>
    <a href="index.php?logout">Cerrar sesión</a>
    <a href="edit.php">Editar datos</a>
</div>

<?php include('_footer.php'); ?>

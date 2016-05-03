<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Agregar tipo de lavado</h3>

<form method="post" action="index.php" name="loginform">
<div class="form-group register">
    <label for="wash_type_name" class="col-lg-4 control-label">Nombre del tipo</label>
    <input type="text" class="form-control" id="wash_type_name" required=""></input>
    <label for="wash_type_url" class="col-lg-4 control-label">URL imagen (opcional)</label>
    <input type="text" class="form-control" id="wash_type_url" required=""></input>
    <label for="wash_type_ins" class="col-lg-4 control-label">Insumos</label>
    <textarea class="form-control" id="wash_type_ins" required=""></textarea>
    <label for="wash_type_cash" class="col-lg-4 control-label">Costo ($ ARS)</label>
    <input type="text" class="form-control" id="wash_type_cash" required=""></input>
</div>
<input type="submit" class="btn btn-success submitL" name="login" value="Guardar tipo" />
</form>

<?php include('_footer.php'); ?>

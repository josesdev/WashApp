<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Editar tipo de lavado</h3>

<form method="post" action="index.php" name="loginform">
<div class="form-group register">
    <label for="wash_type_name" class="col-lg-4 control-label">Nombre del tipo</label>
    <input type="text" class="form-control" id="wash_type_name" required="" value="Ecológico"></input>
    <label for="wash_type_url" class="col-lg-4 control-label">URL imagen (opcional)</label>
    <input type="text" class="form-control" id="wash_type_url" required="" value="washapp.azurewebservices.net/images/ecologico.png"></input>
    <label for="wash_type_url" class="col-lg-4 control-label">Vista previa</label><span class="glyphicon glyphicon-leaf iconPre"></span>
    <label for="wash_type_ins" class="col-lg-4 control-label">Insumos</label>
    <textarea class="form-control" id="wash_type_ins" required="">Agua.
Detergente concetrado sin fosfatos.</textarea>
    <label for="wash_type_cash" class="col-lg-4 control-label">Costo ($ ARS)</label>
    <input type="text" class="form-control" id="wash_type_cash" required="" value="90"></input>
</div>
<input type="submit" class="btn btn-success submitL" name="login" value="Guardar cambios" />
</form>

<?php include('_footer.php'); ?>

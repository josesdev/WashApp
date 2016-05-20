<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Editar tipo de lavado</h3>
    <form class="form-horizontal" method="post" action="index.php" name="loginform">
      <div class="form-group">
        <label for="wash_type_name" class="col-lg-4 control-label">Nombre del tipo</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_type_name" required="" value="Ecológico"></input>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_type_url" class="col-lg-4 control-label">URL imagen (opcional)</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_type_url" required="" value="washapp.azurewebservices.net/images/ecologico.png"></input>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_type_url" class="col-lg-4 control-label">Vista previa</label>
        <div class="col-lg-6">
          <span class="glyphicon glyphicon-leaf iconPre"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_type_ins" class="col-lg-4 control-label">Insumos</label>
        <div class="col-lg-7">
          <textarea class="form-control" id="wash_type_ins" required="" style="min-height:90px;">Agua.
Detergente neutro con silicona sin fosfato.</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_type_cash" class="col-lg-4 control-label">Costo ($ ARS)</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_type_cash" required="" value="90"></input>
        </div>
      </div>
      <div class="center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Guardar cambios" />
      </div>
    </div>
    </form>
  </div>
</div>

<?php include('_footer.php'); ?>

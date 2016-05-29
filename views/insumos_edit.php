<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<div class="col-sm-offset-2 col-sm-8">
  <div class="well bs-component">
<h3 class="center">Editar insumo</h3>

<form method="post" action="index.php" name="loginform">
  <div class="form-group register">
    <label for="name_ins" class="col-lg-4 control-label">Nombre</label>
    <input id="name_ins" class="form-control" type="text" pattern="[a-zA-Z]{2,64}" name="name_ins" value="Jabon concentrado" required />

    <label for="precio_ins" class="col-lg-4 control-label"> Precio unitario </label>
    <input id="precio_ins" class="form-control" type="text" pattern="[0-9]{8}" name="precio_ins" value="$90 ARS"required />

    <label for="prov_ins" class="col-lg-4 control-label">Proveedor</label>
    <input id="prov_ins" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="prov_ins" value="prov2" required />

    <label for="desc_ins" class="col-lg-4 control-label">Descripción</label>
    <input type="text" class="form-control" id="desc_ins" value="..." ></input>
  </div>
  <div class="center">
    <input type="submit" class="btn btn-raised btn-success" name="login" value="Actualizar insumos" />
  </div>
</form>

</div>
</div>
<?php include('_footer.php'); ?>
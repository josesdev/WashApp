<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Registrar turno de lavado</h3>

<form method="post" action="index.php?action=registrar-turno" name="loginform">
<div class="form-group register">
    <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
    <select class="selectpicker" name="type_vehicle">
	    <option>Pickup</option>
	    <option>Sedán</option>
	    <option>Camioneta 4x4</option>
	    <option>Camión</option>
    </select>
    <label class="col-lg-4 control-label">Lugar de lavado</label>
    <div class="client">
        <input type="radio" name="type_place" id="type_sucursal" checked="checked"> <label for="type_sucursal" class="cl">Centro de lavado</label>
        <input type="radio" name="type_place" id="type_movil"> <label for="type_movil" class="cl">Estación móvil</label>
    </div>
    <div id="Tsucursal">
    <label for="wash_place" class="col-lg-4 control-label">Centro de lavado</label>
    <select class="selectpicker" data-size="5">
	  <option data-subtext="French 414, Resistencia">WashApp Centro</option>	  
	  <option data-subtext="Av. Sarmiento 2855, Resistencia">WashApp Centenario</option>
	  <option data-subtext="Lopez y Planes 75, Resistencia">WashApp 2</option>
	  <option data-divider="true"></option>
	  <option data-subtext="Av. 3 de Abril y Av. Maipú, Corrientes">WashApp Corrientes</option>
	</select>
	</div>
	<div id="Tmovil" class="displayN">
		<label for="wash_adreess" class="col-lg-4 control-label">Dirección</label>
    	<input type="text" class="form-control" id="wash_adreess"></input>
	</div>
    <label for="wash_day" class="col-lg-4 control-label">Fecha</label>
    <input type="text" class="form-control" id="wash_day"></input>
    <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
    <select class="selectpicker">
	  <option>8:00</option>
	  <option disabled>9:00</option>
	  <option>10:00</option>
	  <option>11:00</option>
	</select>

    <input type="submit" class="btn btn-success submitL" name="login" value="Registrar turno" />
</div>
</form>

<script type="text/javascript">
$(function() {
    $("#wash_day").datepicker();
    $(".selectpicker").selectpicker({
      size: 4
    });
  });
$(document).ready(function(){
    $("#type_sucursal").click(function(){
        $("#Tmovil").hide();
        $("#Tsucursal").show();
    });
    $("#type_movil").click(function(){
        $("#Tsucursal").hide();
        $("#Tmovil").show();
    });
});
</script>

<?php include('_footer.php'); ?>

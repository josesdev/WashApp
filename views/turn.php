<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Registrar turno de lavado</h3>
    <?php
    echo '
    <form class="form-horizontal" id="loginform" method="post" action="'.$site_url.'/clientes/mis-turnos" name="loginform">';
    ?>
      <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
        <div class="col-lg-6">
          <select class="selectpicker" name="type_vehicle">
      	    <option>Pickup</option>
      	    <option>Sedán</option>
      	    <option>Camioneta 4x4</option>
      	    <option>Camión</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-4 control-label">Lugar de lavado</label>
        <div class="col-lg-6">
          <div class="radio radio-primary">
            <label>
              <input type="radio" name="type_place" value="centro" id="type_sucursal" checked="checked"> Centro de lavado
            </label>
            <label>
              <input type="radio" name="type_place" value="estacion" id="type_movil"> Estación móvil
            </label>
          </div>
        </div>
      </div>
      <div id="Tsucursal">
        <div class="form-group no-margin-top">
          <label for="wash_place" class="col-lg-4 control-label">Centro de lavado</label>
          <div class="col-lg-6">
            <select class="selectpicker" data-size="5">
          	  <option data-subtext="French 414, Resistencia">WashApp Centro</option>
          	  <option data-subtext="Av. Sarmiento 2855, Resistencia">WashApp Centenario</option>
          	  <option data-subtext="Lopez y Planes 75, Resistencia">WashApp 2</option>
          	  <option data-divider="true"></option>
          	  <option data-subtext="Av. 3 de Abril y Av. Maipú, Corrientes">WashApp Corrientes</option>
        	  </select>
          </div>
        </div>
    	</div>
    	<div id="Tmovil" class="displayN">
        <div class="form-group no-margin-top">
    		  <label for="wash_adreess" class="col-lg-4 control-label">Dirección</label>
          <div class="col-lg-6">
        	   <input type="text" class="form-control" id="wash_adreess"></input>
          </div>
        </div>
    	</div>
      <div class="form-group">
    	   <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
         <div class="col-lg-6">
           <select class="selectpicker" name="type_vehicle">
      	     <option>Básico</option>
             <option>Completo</option>
      	     <option>Ecológico</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_day" class="col-lg-4 control-label">Fecha</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_day"></input>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <div class="col-lg-6">
          <select class="selectpicker">
        	  <option>8:00</option>
        	  <option disabled>9:00</option>
        	  <option>10:00</option>
        	  <option>11:00</option>
        	  <option disabled>16:00</option>
        	  <option>17:00</option>
        	  <option disabled>18:00</option>
        	  <option>19:00</option>
        	  <option>20:00</option>
      	  </select>
        </div>
      </div>

      <div class="center">
        <button class="btn btn-raised btn-success" data-toggle="snackbar" data-style="toast" data-content="¡Turno registrado exitosamente!" onclick="setTimeout(intervalo, 1600); return false;">Registrar turno</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script type="text/javascript">
<?php
echo'
function intervalo() {
	document.loginform.submit();	
}
$(function() {
    $("#wash_day").datetimepicker({
                    locale: "es",
                    daysOfWeekDisabled: [0],
                    format: "DD/MM/YYYY",
                    minDate: "'.$dia_actual.'",
                    maxDate: "'.$dia_actual_20.'"
                });
  });
';
?>




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

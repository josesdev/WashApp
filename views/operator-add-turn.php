<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Registrar turno de lavado para un cliente particular</h3>
    <form class="form-horizontal" method="post" action="index.php?action=registrar-turno" name="loginform">
      <div class="form-group">
        <label for="wash_client_name" class="col-lg-4 control-label">Nombre y Apellido del cliente</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_client_name" required=""></input>
        </div>
      </div>
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
          <div class="client">
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
      	   </select>
         </div>
      </div>
      <div class="center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Registrar turno" />
      </div>
    </form>
  </div>
</div>

<!-- For autocomplete -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
<?php
echo'
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

  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#wash_client_name" ).autocomplete({
      source: availableTags
    });
  });

</script>

<?php include('_footer.php'); ?>

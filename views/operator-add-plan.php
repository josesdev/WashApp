<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Registrar solicitud de plan de lavado para un cliente corporativo</h3>
    <form class="form-horizontal" method="post" action="/" name="loginform">
      <div class="form-group">
        <label for="wash_client_name" class="col-lg-4 control-label">Nombre de la empresa</label>
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
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_vehicles_cant"></input>
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
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div class="col-lg-6">
          <div id="period">
            <select class="selectpicker" name="wash_day">
                <option id="day1">1 día a la semana</option>
                <option id="day2">2 días a la semana</option>
                <option id="day3">3 días a la semana</option>
            </select>
          </div>
        </div>
      </div>
      <div id="flota2" class="displayN" style="margin-top: 6%;">
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
          <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="wash_vehicles_cant"></input>
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
          <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
          <div class="col-lg-6">
            <div id="period">
                <select class="selectpicker" name="wash_day">
                    <option id="day1">1 día a la semana</option>
                    <option id="day2">2 días a la semana</option>
                    <option id="day3">3 días a la semana</option>
                </select>
            </div>
          </div>
        </div>
      </div>

      <div id="flota3" class="displayN" style="margin-top: 6%;">
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
          <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="wash_vehicles_cant"></input>
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
          <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
          <div class="col-lg-6">
            <div id="period">
                <select class="selectpicker" name="wash_day">
                    <option id="day1">1 día a la semana</option>
                    <option id="day2">2 días a la semana</option>
                    <option id="day3">3 días a la semana</option>
                </select>
            </div>
          </div>
        </div>
      </div>

      <div class="center form-group"><a href="javascript:void(0)" id="add_flota" class="bold" onclick="agregar_flota();">+ Agregar otra flota de vehículos</a></div>
      <div class="center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Registrar plan" />
      </div>
    </form>
  </div>
</div>

<!-- For autocomplete -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
$(function() {
    $("#wash_day").datepicker();
    $(".selectpicker").selectpicker();
  });
function agregar_flota() {
    $("#flota2").show();
    $("#add_flota").attr("onclick","agregar_flota_2()")
}
function agregar_flota_2() {
    $("#flota3").show();
    $("#add_flota").hide();
}

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

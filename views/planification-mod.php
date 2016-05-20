<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Modificar plan de lavado</h3>
    <form class="form-horizontal" method="post" action="/" name="loginform">
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
      <div class="form-group no-margin-top">
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_vehicles_cant" value="25"></input>
        </div>
      </div>
      <div class="form-group no-margin-top">
        <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
        <div class="col-lg-6">
          <select class="selectpicker" name="type_vehicle">
      	    <option>Básico</option>
      	    <option selected="selected">Completo</option>
      	    <option>Ecológico</option>
          </select>
        </div>
      </div>
      <div class="form-group no-margin-top">
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div class="col-lg-6">
          <div id="period">
            <select class="selectpicker" name="wash_day">
                <option id="day1" selected="selected">1 día a la semana</option>
                <option id="day2">2 días a la semana</option>
                <option id="day3">3 días a la semana</option>
            </select>
          </div>
        </div>
      </div>

        <div id="flota2" class="displayN" style="margin-top: 6%;">
          <div class="form-group no-margin-top">
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
          <div class="form-group no-margin-top">
            <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="wash_vehicles_cant"></input>
            </div>
          </div>
          <div class="form-group no-margin-top">
            <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
            <div class="col-lg-6">
              <select class="selectpicker" name="type_vehicle">
                <option>Básico</option>
                <option>Completo</option>
                <option>Ecológico</option>
              </select>
            </div>
          </div>
          <div class="form-group no-margin-top">
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
          <div class="form-group no-margin-top">
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
          <div class="form-group no-margin-top">
            <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="wash_vehicles_cant"></input>
            </div>
          </div>
          <div class="form-group no-margin-top">
            <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
            <div class="col-lg-6">
              <select class="selectpicker" name="type_vehicle">
                <option>Básico</option>
                <option>Completo</option>
                <option>Ecológico</option>
              </select>
            </div>
          </div>
          <div class="form-group no-margin-top">
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

        <div class="alert plan alert-dismissible alert-info center" style="margin:10px 0;">
          <strong>Recuerde que su plan de lavado será evaluado y un operador se comunicará con Usted dentro de las 48 hs.</strong>
        </div>
        <div class="center">
          <input type="submit" class="btn btn-raised btn-success submitL" name="login" value="Modificar plan" />
        </div>

    </form>
  </div>
</div>

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
function agregar_flota() {
    $("#flota2").show();
    $("#add_flota").attr("onclick","agregar_flota_2()")
}
function agregar_flota_2() {
    $("#flota3").show();
    $("#add_flota").hide();
}
</script>

<?php include('_footer.php'); ?>

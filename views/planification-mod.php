<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Modificar plan de lavado</h3>

<form method="post" action="/" name="loginform">
<div class="form-group register">
    <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
    <select class="selectpicker" name="type_vehicle">
        <option>Pickup</option>
        <option>Sedán</option>
        <option>Camioneta 4x4</option>
        <option>Camión</option>
    </select>
    <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
    <input type="text" class="form-control" id="wash_vehicles_cant" value="25"></input>
    <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
    <select class="selectpicker" name="type_vehicle">
	    <option>Básico</option>
	    <option selected="selected">Completo</option>
	    <option>Ecológico</option>
    </select>
    <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
    <div id="period">
        <select class="selectpicker" name="wash_day">
            <option id="day1" selected="selected">1 día a la semana</option>
            <option id="day2">2 días a la semana</option>
            <option id="day3">3 días a la semana</option>
        </select>
    </div>

    <div id="flota2" class="displayN" style="margin-top: 2%;">
        <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
        <select class="selectpicker" name="type_vehicle">
            <option>Pickup</option>
            <option>Sedán</option>
            <option>Camioneta 4x4</option>
            <option>Camión</option>
        </select>
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <input type="text" class="form-control" id="wash_vehicles_cant"></input>
        <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
        <select class="selectpicker" name="type_vehicle">
            <option>Básico</option>
            <option>Completo</option>
            <option>Ecológico</option>
        </select>
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div id="period">
            <select class="selectpicker" name="wash_day">
                <option id="day1">1 día a la semana</option>
                <option id="day2">2 días a la semana</option>
                <option id="day3">3 días a la semana</option>
            </select>
        </div>
    </div>

    <div id="flota3" class="displayN" style="margin-top: 2%;">
        <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
        <select class="selectpicker" name="type_vehicle">
            <option>Pickup</option>
            <option>Sedán</option>
            <option>Camioneta 4x4</option>
            <option>Camión</option>
        </select>
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <input type="text" class="form-control" id="wash_vehicles_cant"></input>
        <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
        <select class="selectpicker" name="type_vehicle">
            <option>Básico</option>
            <option>Completo</option>
            <option>Ecológico</option>
        </select>
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div id="period">
            <select class="selectpicker" name="wash_day">
                <option id="day1">1 día a la semana</option>
                <option id="day2">2 días a la semana</option>
                <option id="day3">3 días a la semana</option>
            </select>
        </div>
    </div>

    <div class="center"><a href="#" id="add_flota" class="bold" onclick="agregar_flota();">+ Agregar otra flota de vehículos</a></div>

    <ul class="list-group">
      <li class="list-group-item list-group-item-warning l">Recuerde que su plan de lavado será evaluado y un operador se comunicará con Usted dentro de las 48 hs.</li>
    </ul>

    <input type="submit" class="btn btn-success submitL" name="login" value="Modificar plan" />
</div>
</form>

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
</script>

<?php include('_footer.php'); ?>

<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>
<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Solicitar plan de lavado</h3>
<?php
echo '
    <form class="form-horizontal" method="post" action="'.$site_url.'" name="loginform">';
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
      <div class="form-group no-margin-top">
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_vehicles_cant"></input>
        </div>
      </div>
      <div class="form-group no-margin-top">
        <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
        <div class="col-lg-6">
          <div id="o1" class="selLav">
                 <select class="selectpicker" name="type_l" id="type_l">
                   <option value="0" selected="">Básico</option>
                   <option value="1">Completo</option>
                   <option value="2">Ecológico</option>
                </select>
              </div>
              <div id="o2" class="selLav displayN">
                 <select class="selectpicker" name="type_l" id="type_l">
                   <option value="0">Básico</option>
                   <option value="1" selected="">Completo</option>
                   <option value="2">Ecológico</option>
                </select>
              </div>
              <div id="o3" class="selLav displayN">
                 <select class="selectpicker" name="type_l" id="type_l">
                   <option value="0">Básico</option>
                   <option value="1">Completo</option>
                   <option value="2" selected="">Ecológico</option>
                </select>
              </div>
        </div>
      </div>
      <div class="form-group no-margin-top">
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div class="col-lg-6">
          <div id="period">
            <select class="selectpicker" name="wash_day">
                <option id="day1">1 día a la semana</option>
                <option id="day1">1 día por quincena</option>
                <option id="day2">1 día por mes</option>
                <option id="day2">2 días a la semana</option>
                <option id="day2">2 días por quincena</option>
                <option id="day2">2 días por mes</option>
                <option id="day3">3 días a la semana</option>              
                <option id="day2">3 días por quincena</option>
                <option id="day2">3 días por mes</option>
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
          <div class="form-group no-margin-top">
            <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="wash_vehicles_cant"></input>
            </div>
          </div>
          <div class="form-group no-margin-top">
            <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
            <div class="col-lg-6">
               <select class="selectpicker" name="type_l" id="type_l">
                 <option value="0" selected="">Básico</option>
                 <option value="1">Completo</option>
                 <option value="2">Ecológico</option>
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
              <input type="text" class="form-control" id="wash_vehicles_cant"></input>
            </div>
          </div>
          <div class="form-group no-margin-top">
            <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
            <div class="col-lg-6">
              <select class="selectpicker" name="type_l" id="type_l">
                 <option value="0" selected="">Básico</option>
                 <option value="1">Completo</option>
                 <option value="2">Ecológico</option>
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
      <?php
          echo '
      <button class="btn btn-raised btn-success" data-toggle="snackbar" data-style="toast" data-content="¡Plan registrado exitosamente!" onclick="setTimeout(intervalo, 1600); return false;">Registrar turno</button>
      ';?>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
// Select dia de turno de lavado
<?php
if(isset($_GET['op'])) {
  if($_GET['op'] == '2') {
    $opcion = "o2";
  }
  else
  if($_GET['op'] == '3') {
    $opcion = "o3";
  }
  else {
    $opcion = "o1";
  }
}
else {
  $opcion = "o1";
}

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

$(document).ready(function(){ 
    var opcion = "'.$opcion.'";
    if(opcion == "o2") { 
        $("li.selected").removeClass("selected");
        $("li[data-original-index=1]").addClass("selected");  
        $(".filter-option pull-left").html("Completo");
        $("#type_l").attr("title","Completo");
        $(".selLav").addClass("displayN");
        $("#"+opcion).removeClass("displayN").addClass("displayB"); 
    }  
  
    if(opcion == "o3") { 
        $("li.selected").removeClass("selected");
        $("li[data-original-index=2]").addClass("selected");  
        $(".filter-option pull-left").html("Ecológico");
        $("#type_l").attr("title","Ecológico");
        $(".selLav").addClass("displayN");
        $("#"+opcion).removeClass("displayN").addClass("displayB"); 
    }  
  
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

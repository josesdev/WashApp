<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Registrar Servicio Realizados</h3>

    <form class="form-horizontal" method="post" action="index.php" name="loginform">
      <div class="form-group">
        <label for="wash_type_cash" class="col-lg-4 control-label">Operario</label>
        <div class="col-lg-6">
          <input readonly="readonly" type="text" class="form-control" value="Nombre_Operario"></input>
        </div>
      </div>

      <div class="form-group">        
         <label for="wash_type" class="col-lg-4 control-label">Tipo de lavado</label>
         <div class="col-lg-6">
           <select class="selectpicker" name="wash_type">
             <option>Básico</option>
             <option>Completo</option>
             <option>Ecológico</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="type_vehicle" class="col-lg-4 control-label">Tipo de vehículo</label>
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
         <label for="pay_type" class="col-lg-4 control-label">Formas de Pago</label>
         <div class="col-lg-6">
          <select class="selectpicker" name="pay_type">
             <option>Efectivo</option>
             <option>Debito</option>
             <option>Credito</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <div class="col-lg-6">
          <select class="selectpicker">
            <option>8:00</option>
            <option>9:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>19:00</option>
            <option>20:00</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="wash_type_cash" class="col-lg-4 control-label">Costo ($ ARS)</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_type_cash" required=""></input>
        </div>
      </div>
      <div class="center">
        <input type="submit" class="btn btn-raised btn-success submitL" name="register-serice" value="Registrar Servicio" />
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
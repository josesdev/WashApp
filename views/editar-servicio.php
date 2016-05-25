<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<div class="well bs-component">
<h3 class="center">Lista de servicios</h3>

      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Operario</th>
                <th>Tipo de lavado</th>
                <th>Tipo de vehiculo</th>
                <th>Forma de pago</th>
                <th>Hora</th>
                <th>Costo</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <th>Huerga Emanuel</th>
                <th>BASICO</th>
                <th>PICKUP</th>
                <th>CREDITO</th>
                <th>9:00</th>
                <th>$100</th>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/registrar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp1\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <th>Silva Jose</th>
                <th>ECOLOGICO</th>
                <th>4X4</th>
                <th>EFECTIVO</th>
                <th>12:00</th>
                <th>$90</th>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/registrar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp2\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <th>Golpeadora de Elite</th>
                <th>COMPLETO</th>
                <th>CAMION</th>
                <th>DEBITO</th>
                <th>16:00</th>
                <th>$110</th>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/registrar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp3\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
        </div>
      </div>
</div>

<script type="text/javascript">
function alert_box(rm) {
    bootbox.confirm("¿Estás seguro que quieres modificar el servicio?", function(result) {
        if(result == true) {
        $("#"+rm).hide(800);
        }
    });
}
</script>

<?php
include('_footer.php');
?>

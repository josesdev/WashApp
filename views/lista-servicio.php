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
                <th>Fecha</th>
                <th>Hora</th>
                <th>Costo</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <td>Huerga Emanuel</td>
                <td>BASICO</td>
                <td>PICKUP</td>
                <td>CREDITO</td>
                <td>02/06/16</td>
                <td>9:00</td>
                <td>$100</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/registrar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp1\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <td>Silva Jose</td>
                <td>ECOLOGICO</td>
                <td>4X4</td>
                <td>EFECTIVO</td>
                <td>13/06/16</td>
                <td>12:00</td>
                <td>$90</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/registrar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp2\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <td>Golpeadora de Elite</td>
                <td>COMPLETO</td>
                <td>CAMION</td>
                <td>DEBITO</td>
                <td>28/06/16</td>
                <td>16:00</td>
                <td>$110</td>
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
include('paginacion.php');
include('_footer.php');
?>

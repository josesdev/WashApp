<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<div class="well bs-component">
<h3 class="center">Lista de servicios realizados</h3>

      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Quiosco</th>
                <th>Empleado</th>
                <th>Tipo de lavado</th>
                <th>Costo</th>
                <th>Tipo de vehiculo</th>
                <th>Forma de pago</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <td>02/06/16</td>
                <td>9:00</td>
                <td>Centenario</td>
                <td>Huerga Emanuel</td>
                <td>BASICO</td>
                <td>$100</td>
                <td>PICKUP</td>
                <td>CREDITO</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/servicios/editar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp1\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <td>13/06/16</td>
                <td>12:00</td>
                <td>Carrefour</td>
                <td>Silva Jose</td>
                <td>ECOLOGICO</td>
                <td>$90</td>
                <td>4X4</td>
                <td>EFECTIVO</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/servicios/editar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp2\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <td>28/06/16</td>
                <td>16:00</td>
                <td>Libertad</td>
                <td>Pollero Emiliano</td>
                <td>COMPLETO</td>
                <td>$110</td>
                <td>CAMION</td>
                <td>DEBITO</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/servicios/editar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp3\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp4">
                <td>29/06/16</td>
                <td>8:00</td>
                <td>Libertad</td>
                <td>Ramírez Karina</td>
                <td>ECOLOGICO</td>
                <td>$90</td>
                <td>PICKUP</td>
                <td>EFECTIVO</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/servicios/editar-servicio" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp4\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
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
    bootbox.confirm("¿Estás seguro que quieres eliminar el servicio?", function(result) {
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

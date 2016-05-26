<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<div class="well bs-component">
<h3 class="center">Holi</h3>

      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Apellido y Nombre</th>
                <th>DNI</th>
                <th>CUIL</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <td>Huerga Caserez, Christian Emanuel</td>
                <td>38534123</td>
                <td>30-38534123-2</td>
                <td>Masculino</td>
                <td>22/05/1995</td>
                <td>Villa 1-11-14 4982, Resistencia</td>
                <td>ema_lavagancia95@hotmail.com</td>
                <td>3624234354</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp1\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <td>Pollero, Hector Emiliano</td>
                <td>38534345</td>
                <td>30-38534345-2</td>
                <td>Masculino</td>
                <td>13/12/1994</td>
                <td>Golf Club 9874, Resistencia</td>
                <td>emiandmery@outlook.com</td>
                <td>3624234324</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp2\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <td>Ramírez, Karina Anyelén</td>
                <td>39233433</td>
                <td>30-39233433-1</td>
                <td>Femenino</td>
                <td>14/05/1996</td>
                <td>San Lorenzo 1066, Corrientes</td>
                <td>kari_the_explosion@gmail.com</td>
                <td>3794560322</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp3\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp4">
                <td>Schneider, Miguel Angel</td>
                <td>38534311</td>
                <td>30-38534311-6</td>
                <td>Masculino</td>
                <td>13/12/1994</td>
                <td>Laprida 233, Resistencia</td>
                <td>the_helecho22@outlook.com</td>
                <td>3704543233</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp4\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp5">
                <td>Silva, José Gabriel</td>
                <td>38453344</td>
                <td>30-38453344-2</td>
                <td>Masculino</td>
                <td>03/12/1994</td>
                <td>Salta 147, Resistencia</td>
                <td>machine_programmer@lunite.net</td>
                <td>3704433445</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'emp5\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
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
    bootbox.confirm("¿Estás seguro que quieres dar de baja este empleado?", function(result) {
        if(result == true) {
        $("#"+rm).hide(800);
        }
    });
}
</script>

<?php
include('_footer.php');
?>

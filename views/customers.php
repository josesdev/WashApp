<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>



<div class="row">
        <div class="col-md-12">
		<h3 class="center">Lista de clientes particulares</h3>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Apellido y Nombre</th>
                <th>CUIL</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Sexo</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <td>Gómez, Ernesto José</td>
                <td>20-20127984-2</td>
                <td>Solano López 450</td>
                <td>ernestogomez@hotmail.com</td>
                <td>Masculino</td>
                <td>3624876464</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <td>Almirón, Brian Ernesto</td>
                <td>20-22125986-2</td>
                <td>San Lorenzo 1066</td>
                <td>almiron22@hotmail.com</td>
                <td>Masculino</td>
                <td>3624556454</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <td>Ramírez, Ayelén Lola</td>
                <td>27-11258986-2</td>
                <td>San José 22</td>
                <td>destroyer_of_worlds@yahoo.com.ar</td>
                <td>Femenino</td>
                <td>3624456253</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp4">
                <td>Milán, Jorge Carlos</td>
                <td>20-21227926-3</td>
                <td>Rivadavia 103</td>
                <td>milan_jorge@live.com.ar</td>
                <td>masculino</td>
                <td>3624156258</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
		  
		  <h3 class="center">Lista de clientes corporativos</h3>
		  
		  <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Nombre de empresa</th>
                <th>CUIT</th>
				<th>Nombre de contacto</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <tr id="emp1">
                <td>SECHEEP</td>
                <td>02-20127984-2</td>
                <td>Mussín, José Emanuel</td>
                <td>San Francisco 752</td>
                <td>shecheep@ecom.com</td>
                <td>3624875454</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp2">
                <td>SAMEEP</td>
                <td>02-20127983-2</td>
                <td>huerga, Nicolás Gabriel</td>
                <td>San Isidro 65</td>
                <td>sameep@ecom.com</td>
                <td>3624845424</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp3">
                <td>Lotería Chaqueña</td>
                <td>02-20125985-2</td>
                <td>Silva, Christian Facundo</td>
                <td>San Pedro 882</td>
                <td>loteriachaco@ecom.com</td>
                <td>3624878443</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="emp4">
                <td>Musimundo</td>
                <td>02-20127985-2</td>
                <td>Ramírez, Carina Alejandra</td>
                <td>San Marcos 1254</td>
                <td>empresa@musimundo.com</td>
                <td>3624475254</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-empleado" class="alert-box" original-title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="#" onclick="alert_box(\'emp1\');" class="alert-box" original-title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
        </div>

<?php
echo '
    <script src="http://onehackoranother.com/projects/jquery/tipsy/javascripts/jquery.tipsy.js"></script>
    <script src="'. $site_url .'/js/bootbox.min.js"></script>';
?>

<script type="text/javascript">
$(function() {
    $('.alert-box').tipsy({gravity: 's'});
  });
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

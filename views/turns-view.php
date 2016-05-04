<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$todayh = getdate();
$d = @$todayh[mday];
$m = @$todayh[mon];
$y = @$todayh[year];
$dia = $d.'/'.$m.'/'.$y;
$hora_3 = @$todayh[hours] - 2;
?>

<h3 class="center">Turnos registrados</h3>

<div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Tipo de vehículo</th>
                <th>Lugar de lavado</th>
                <th>Dirección</th>
                <th>Tipo de lavado</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                echo '
                <td>'.$dia.' '.$hora_3.':00 hs</td>';
                ?>
                <td>Camioneta 4x4</td>
                <td>WashApp Centenario</td>
                <td>Av. Sarmiento 2855, Resistencia</td>
                <td>Completo</td>
                <td>
                    <a href="#" class="alert-box"><span class="glyphicon glyphicon-remove"></span> Cancelar turno</a>
                </td>
              </tr>
              <tr id="plan-elim">
                <td>20/06/2016 09:00 hs</td>
                <td>Sedán</td>
                <td>Estación móvil</td>
                <td>French 800, Resistencia</td>
                <td>Básico</td>
                <td>
                    <a href="#" class="alert-box2"><span class="glyphicon glyphicon-remove"></span> Cancelar turno</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

<?php
echo '
    <script src="'. $site_url .'/js/bootbox.min.js"></script>';
?>

<script type="text/javascript">
$(document).on("click", ".alert-box", function(e) {
    bootbox.confirm("¿Estás seguro que quieres cancelar el turno?", function(result) {
        if(result == true) {
        bootbox.alert("Este turno se realizará en menos de 3 hs por lo tanto no puede eliminarse.");
        }
    }); 
});
$(document).on("click", ".alert-box2", function(e) {
    bootbox.confirm("¿Estás seguro que quieres cancelar el turno?", function(result) {
        if(result == true) {
        $("#plan-elim").hide(800);
        }
    }); 
});
</script>

<?php
include('_footer.php'); 
?>

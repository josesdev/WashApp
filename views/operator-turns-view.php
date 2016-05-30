<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$todayh = getdate();
$d = @$todayh[mday];
$m = @$todayh[mon];
$y = @$todayh[year];
$dia = $d.'/'.$m.'/'.$y;
$dia2 = $m.'/'.$d.'/'.$y;
$dias20 = time() + (20 * 24 * 60 * 60);
$dia3 = date('m/d/Y', $dias20);
$dias4 = time() + (6 * 24 * 60 * 60);
$dia4 = date('d/m/Y', $dias4);
$dia4_mod = date('m/d/Y', $dias4);
$hora_3 = @$todayh[hours] - 1;
?>
<div class="well bs-component">
<h3 class="center">Turnos registrados de los clientes particulares</h3>

<div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Día</th>
                <th>Hora</th>
                <th>Tipo de vehículo</th>
                <th>Lugar de lavado</th>
                <th>Dirección</th>
                <th>Tipo de lavado</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ramírez, Karina Anyelén</td>
                <?php
                echo '
                <td>'.$dia.'</td>
                <td>'.$hora_3.':00 hs</td>';
                ?>
                <td>Camioneta 4x4</td>
                <td>WashApp Centenario</td>
                <td>Av. Sarmiento 2855, Resistencia</td>
                <td>Completo</td>
                <td style="text-align: center;">
                    <a href="javascript:void(0)" class="no-edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" class="no-cancel" rel="tipsy" title="Cancelar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="turn-elim">
                <td>Ramírez, Karina Anyelén</td>
                <td>
                <div class="displayB" id="wash_day_act">
                    <?php echo $dia4;
                echo '
                </div>
                <div class="displayN">
                    <input type="text" class="form-control" id="wash_day" value="'.$dia4_mod.'"></input>
                </div>';
                ?>
                </td>
                <td>
                <div class="displayB" id="wash_hour">
                    09:00 hs
                </div>
                <div class="displayN">
                    <select class="selectpicker">
                      <option>8:00</option>
                      <option disabled>9:00</option>
                      <option>10:00</option>
                      <option>11:00</option>
                    </select>
                </div>
                </td>
                <td>Sedán</td>
                <td>Estación móvil</td>
                <td>French 800, Resistencia</td>
                <td>Básico</td>
                <td style="text-align: center;">
                    <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                    <a href="javascript:void(0)" class="ok-edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" class="ok-cancel" rel="tipsy" title="Cancelar turno"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
</div>

<script type="text/javascript">
<?php
// Calendario para elegir dia del turno de lavado
echo'
$(function() {
    $("#wash_day").datetimepicker({
                    locale: "es",
                    daysOfWeekDisabled: [0],
                    format: "DD/MM/YYYY",
                    minDate: "'.$dia2.'",
                    maxDate: "'.$dia3.'"
                });
  });
';
?>

$(document).on("click", ".no-edit", function(e) {
    bootbox.alert("Este turno se realizará en menos de 3 hs por lo tanto no puede modificarse.");
});
$(document).on("click", ".no-cancel", function(e) {
    bootbox.confirm("¿Estás seguro que quieres cancelar el turno?", function(result) {
        if(result == true) {
        bootbox.alert("Este turno se realizará en menos de 3 hs por lo tanto no puede cancelarse.");
        }
    });
});
$(document).on("click", ".ok-cancel", function(e) {
    bootbox.confirm("¿Estás seguro que quieres cancelar el turno?", function(result) {
        if(result == true) {
        $("#turn-elim").hide(800);
        }
    });
});
$(document).on("click", ".ok-edit", function(e) {
    $(".displayB").hide();
    $(".displayN").show();
});
function change_ok() {
    $(".displayB").show();
    $(".displayN").hide();
    $("#wash_day_act").html($("#wash_day").val());
    $("#wash_hour").html($(".btn.dropdown-toggle.btn-default").attr("title"));
}
</script>

<?php
include('paginacion.php');
include('_footer.php');
?>

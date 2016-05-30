<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('d/m/Y', time());
$dia_actual_20 = date('d/m/Y', (time() + (20 * 24 * 60 * 60)));
$dia_actual_d = date('m/d/Y', time());
$dia_actual_20_d = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>
<div class="well bs-component">
    <div class="center">
        <h2>Centro de lavado: WashApp Centro</h2>
        <h3 class="center">Actualizar estados de turnos de lavado</h3>
    </div>

    <form class="form-horizontal center">
        <div class="col-lg-3 col-lg-offset-2">
            <div class="form-group">
                <label class="col-md-3 control-label">Desde:</label>        
                <div class="col-md-9">
                    <?php
                    echo '
                    <input type="text" name="from" class="form-control datetimepicker" value="'.$dia_actual.'">';
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 form-group">
            <label class="col-md-3 control-label">Hasta:</label>
            <div class="col-md-9">
                <?php
                echo '
                <input type="text" name="to" class="form-control datetimepicker" value="'.$dia_actual.'">';
                ?>
            </div>
        </div>
        <div class="col-lg-2 form-group">
            <button class="btn btn-raised btn-default" name="filter" onclick="return false;">Filtrar</button>
        </div>
    </form>

<div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Día</th>
                <th>Hora</th>
                <th>Tipo de vehículo</th>
                <th>Tipo de lavado</th>
                <th>Estado</th>
                <th>Empleado</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ramírez, Karina Anyelén</td>
                <?php
                echo '
                <td>'.$dia_actual.'</td>
                <td>7:00 hs</td>';
                ?>
                <td>Camioneta 4x4</td>
                <td>Completo</td>
                <td id="state1">No realizado</td>
                <td>
                    <span id="empa1">-</span> 
                    <div class="displayN" id="empb1">
                        <input type="text" name="emp" class="form-control">
                    </div>
                </td>
                <td>
                    <a href="javascript:void(0)" onclick="change_state(1);">Modificar</a>
                    <span class="displayN" id="cnl1">
                        - 
                        <a href="javascript:void(0)" onclick="change_state_cancel(1);">Cancelar</a>
                    </span>
                </td>
              </tr>
              <tr id="turn-elim">
                <td>Ramírez, Karina Anyelén</td>
                <td>
                    <?php echo $dia_actual; ?>
                </td>
                <td>12:00</td>
                <td>Sedán</td>
                <td>Básico</td>
                <td id="state2">No realizado</td>
                <td>
                    <span id="empa2">-</span> 
                    <div class="displayN" id="empb2">
                        <input type="text" name="emp" class="form-control">
                    </div>
                </td>
                <td>
                    <a href="javascript:void(0)" onclick="change_state(2);">Modificar</a>
                    <span class="displayN" id="cnl2">
                        - 
                        <a href="javascript:void(0)" onclick="change_state_cancel(2);">Cancelar</a>
                    </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
</div>

        <div class="center">
        <button class="btn btn-raised btn-success" name="login"  data-toggle="snackbar" data-style="toast" data-content="¡Turno registrado exitosamente!" onclick="return false;">Guardar cambios</button>
      </div>
</div>

<script type="text/javascript">
<?php
echo'
$(function() {
    $(".datetimepicker").datetimepicker({
                    locale: "es",
                    daysOfWeekDisabled: [0],
                    format: "DD/MM/YYYY",
                    minDate: "'.$dia_actual_d.'",
                    maxDate: "'.$dia_actual_20_d.'"
                });
  });
';
?>
function change_state(st) {
    $("#state"+st).html('Realizado');
    $("#empa"+st).hide();
    $("#empb"+st).show();
    $("#cnl"+st).show();
}
function change_state_cancel(st) {
    $("#state"+st).html('No realizado');
    $("#empa"+st).html('-');
    $("#empa"+st).show();
    $("#empb"+st).hide();
    $("#cnl"+st).hide();
}
</script>

<?php
include('_footer.php');
?>

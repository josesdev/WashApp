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
$hora_3 = @$todayh[hours] - 2;
?>
<div class="well bs-component">
    <div class="center">
        <h2>Centro de lavado: WashApp Centro</h2>
        <?php
        echo '
        <p>Turnos registrados para el día '.$dia.'</p>';
        ?>
    </div>

    <h3 class="center">Turnos de clientes particulares</h3>

    <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Tipo de vehículo</th>
                <th>Tipo de lavado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                echo '
                <td>9:00</td>';
                ?>
                <td>Ramírez, Karina Anyelén</td>
                <td>Camioneta 4x4</td>
                <td>Completo</td>
              </tr>
              <tr>
                <td>15:00</td>
                <td>Huerga, Christian Emanuel</td>
                <td>Sedán</td>
                <td>Básico</td>
              </tr>
              <tr>
                <td>18:00</td>
                <td>Gon, Mauricio</td>
                <td>Pickup</td>
                <td>Ecológico</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    <h3 class="center">Turnos de clientes corporativos</h3>
    <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Tipo de vehículo</th>
                <th>Cantidad</th>
                <th>Tipo de lavado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>09:00</td>
                <td>Pollero, Hector Emiliano</td>
                <td>Camioneta 4x4</td>
                <td>2</td>
                <td>Completo</td>
              </tr>
              <tr>
                <td>09:00</td>
                <td>Pollero, Hector Emiliano</td>
                <td>Sedán</td>
                <td>6</td>
                <td>Ecológico</td>
              </tr>
              <tr>
                <td>12:00</td>
                <td>Silva, José Gabriel</td>
                <td>Camión</td>
                <td>3</td>
                <td>Completo</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <div class="center">
        <button class="btn btn-raised btn-success" name="print"  data-toggle="snackbar" data-style="toast" data-content="Imprimiendo..." onclick="return false;">Imprimir</button>
    </div>
</div>

<?php
include('_footer.php');
?>

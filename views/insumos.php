<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>


<div class="well bs-component">
<h3 class="center">Lista de insumos</h3>

<div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Nombre</th>
                <th>Precio unitario</th>
                <th>Proveedor</th>
                <th>Descripción</th>                
              </tr>
            </thead>
            <tbody>
              <tr id="ins1">
                <td>Aromatizante</td>
                <td>$22 ARS</td>
                <td>prov1</td>
                <td>....</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-insumo" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'ins1\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="ins2">
                <td>Detergente concentrado sin fosfatos</td>
                <td>$350 ARS</td>
                <td>prov3</td>
                <td>....</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-insumo" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'ins2\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="ins3">
                <td>Jabon concentrado</td>
                <td>$90 ARS</td>
                <td>prov2</td>
                <td>....</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-insumo" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'ins3\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="ins4">
                <td>Limpia llantas</td>
                <td>$400 ARS</td>
                <td>prov2</td>
                <td>....</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-insumo" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'ins4\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <tr id="ins5">
                <td>Shampoo Siliconado</td>
                <td>$80 ARS</td>
                <td>prov3</td>
                <td>....</td>
                <td style="text-align: center;">
                    <a href="'.$site_url.'/editar-insumo" class="alert-box" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="javascript:void(0)" onclick="alert_box(\'ins5\');" class="alert-box" rel="tipsy" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>';
            ?>
            </tbody>
          </table>
        </div>
    </div>
</div>

<script type="text/javascript">
function alert_box(rm) {
    bootbox.confirm("¿Estás seguro que quieres dar de baja el insumo?", function(result) {
        if(result == true) {
        $("#"+rm).hide(800);
        }
    });
}
</script>

<?php
include('_footer.php'); 
?>

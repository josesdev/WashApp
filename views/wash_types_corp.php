<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>

<div class="col-lg-12">
  <div class="well bs-component" style="overflow:hidden;">
    <h3 class="center">Tipos de lavado</h3>
    <div>
    <div class="col-lg-4">
        <h3 class="center">Básico</h3>
        <span class="glyphicon glyphicon-tint icon"></span>
        <div class="desc">
            <ul>Tiempo estimado: 45 min.</ul>
            <ul>Insumos utilizados:
                <li>Agua.</li>
                <li>Jabón concetrado.</li>
                <li>Aromatizante.</li>
            </ul>
            <br />
            <ul>Costo: $100 ARS</ul>
            <p class="center"><b><a href="clientes/solicitar-plan">Solicitar plan</a></b></p>
            <br />
            
        </div>
    </div>
    <div class="col-lg-4 ">
        <h3 class="center">Completo</h3>
        <span class="glyphicon glyphicon-repeat icon"></span>
        <div class="desc">
            <ul>Tiempo estimado: 55 min.</ul>
            <ul>Insumos utilizados:
                <li>Agua.</li>
                <li>Jabón concetrado.</li>
                <li>Aromatizante.</li>
                <li>Suavizante.</li>
            </ul>
            <ul>Costo: $110 ARS</ul>
            <p class="center"><b><a href="clientes/solicitar-plan">Solicitar plan</a></b></p>
            <br />
            <br />
            
        </div>
    </div>
    <div class="col-lg-4 ">
        <h3 class="center">Ecológico</h3>
        <span class="glyphicon glyphicon-leaf icon"></span>
        <div class="desc">
            <ul>Tiempo estimado: 45 min.</ul>
            <ul>Insumos utilizados:
                <li>Agua.</li>
                <li>Detergente neutro con silicona sin fosfato.</li>
            </ul>
            <br />
            <ul>Costo: $90 ARS</ul>
            <p class="center"><b><a href="clientes/solicitar-plan">Solicitar plan</a></b></p>
        </div>
    </div>
    <br />
    <br />
    </div>
    
  </div>
    
</div>

<?php 
include('_footer.php'); 
?>

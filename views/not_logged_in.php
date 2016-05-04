<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript">
  function desplegar(unvalor) {
    var obj = document.getElementById(unvalor);
    if (obj.style.display == "none") obj.style.display="block";
      else obj.style.display = "none";
  }
</script>

<a href="javascript:void(0)" onclick="desplegar('ver0');" class="tit"> Sobre nosotros </a>
<hr />
<p id="ver0" class="forma"> Somos una empresa dedicada al lavado de coches, nuestro objetivo es ofrecerte el mejor servicio. Para ello permitimos elegir el horario y dia que mejor se adapte a usted y el tipo de lavado adecuado para que tu auto reluzca!</p>
<a href="javascript:void(0)" onclick="desplegar('ver1');" class="tit"> Sucursales </a>
<hr />
<div id="ver1" style="display: none;" class="forma">
  <p><b> WashApp Centro</b> French 414, Resistencia </p>
  <p><b> WashApp Sarmiento</b> Av. Sarmiento 2855, Resistencia </p>
  <p><b> WashApp 2</b> Lopez y Planes 75, Resistencia </p>
  <p><b> WashApp 2</b> Corrientes</p>
</div>
<a href="javascript:void(0)" onclick="desplegar('ver2');" class="tit"> Tipos de lavado </a>
<hr />
<div id="ver2" style="display: none;" class="forma">
  <p> Básico </p>
  <p> Completo </p>
  <p> Ecológico </p>
</div>
<a href="javascript:void(0)" onclick="desplegar('ver3');" class="tit"> Formas de pago </a>
<hr />
<div id="ver3" style="display: none;" class="forma">
  <p> Contado </p>
  <p> Tarjeta insertenombre </p>
  <p> Otra tarjeta </p>
</div>
<br /> <br />

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <?php
  echo '
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="'. $site_url .'/images/3.png" alt="Chania">
    </div>

    <div class="item">
      <img src="'. $site_url .'/images/4.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="'. $site_url .'/images/3.jpg" alt="Chania">
    </div>
  </div>
  ';
  ?>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include('_footer.php'); ?>

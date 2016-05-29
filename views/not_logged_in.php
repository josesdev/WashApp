<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript">
  function desplegar(unvalor) {
    $.scrollTo('#'+unvalor, 1200);
  }
</script>

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
<br />
 <div class="panel-group" id="accordion">
  <div class="panel panel-default" id="s1">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="link" data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="desplegar('s1')">
        Sobre nosotros</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Somos una empresa dedicada al lavado de coches, nuestro objetivo es ofrecerte el mejor servicio. Para ello permitimos elegir el horario y dia que mejor se adapte a usted y el tipo de lavado adecuado para que tu auto reluzca!
      <br />
	      <div class="center">
	      	<p><b> WashApp Centro</b> French 414, Resistencia </p>
			<p><b> WashApp Sarmiento</b> Av. Sarmiento 2855, Resistencia </p>
			<p><b> WashApp 2</b> Lopez y Planes 75, Resistencia </p>
			<p><b> WashApp 2</b> Av. Maipú 2333, Corrientes</p>
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=13wtJNmnhYGJNgF8d9g51hfr_VG0" width="640" height="480"></iframe>
		  </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default" id="s2">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="link" data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="desplegar('s2')">
        Tipos de lavado</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      	<p> Básico </p>
		<p> Completo </p>
		<p> Ecológico </p>
      </div>
    </div>
  </div>
  <div class="panel panel-default" id="s3">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="link" data-toggle="collapse" data-parent="#accordion" href="#collapse4" onclick="desplegar('s3')">
        Formas de pago</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
		<p> Contado </p>
		<p> Tarjeta insertenombre </p>
		<p> Otra tarjeta </p>
      </div>
    </div>
  </div>
<a href="javascript:void(0)" onclick="desplegar('ver0');" class="tit"> Sobre nosotros </a>
<hr class="hrli" />
<p id="ver0" class="forma"> Somos una empresa dedicada al lavado de coches, nuestro objetivo es ofrecerte el mejor servicio. Para ello permitimos elegir el horario y dia que mejor se adapte a usted y el tipo de lavado adecuado para que tu auto reluzca!</p>
<a href="javascript:void(0)" onclick="desplegar('ver1');" class="tit"> Sucursales </a>
<hr class="hrli" />
<div id="ver1" style="display: none;" class="forma">
  <p><b> WashApp Centro</b> French 414, Resistencia </p>
  <p><b> WashApp Sarmiento</b> Av. Sarmiento 2855, Resistencia </p>  
  <p><b> WashApp 2</b> Corrientes</p>
  <div class="center">
  	<iframe src="https://www.google.com/maps/d/embed?mid=13wtJNmnhYGJNgF8d9g51hfr_VG0" width="640" height="480"></iframe>
  </div>
</div>
<a href="javascript:void(0)" onclick="desplegar('ver2');" class="tit"> Tipos de lavado </a>
<hr class="hrli" />
<div id="ver2" style="display: none;" class="forma">
  <p> Básico </p>
  <p> Completo </p>
  <p> Ecológico </p>
</div>
<a href="javascript:void(0)" onclick="desplegar('ver3');" class="tit"> Formas de pago </a>
<hr class="hrli" />
<div id="ver3" style="display: none;" class="forma">
  <p> Contado </p>
  <p> Tarjeta insertenombre </p>
  <p> Otra tarjeta </p>
</div>

<?php include('_footer.php'); ?>

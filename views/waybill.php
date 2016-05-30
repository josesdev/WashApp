<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<ul class="nav nav-tabs" id="Hojas">
  <li class="active"><a data-toggle="tab" href="#Crear">Confeccionar hoja de ruta nueva</a></li>
  <li><a data-toggle="tab" href="#Editar">Editar hoja de ruta existente</a></li>
</ul>


<div class="tab-content">
    <div id="Crear" class="tab-pane fade in active">
		<div class="well bs-component">
		<form method="post" class="form-horizontal">
		<h3 class="center">Confección de hoja de ruta</h3>
				<div class="form-group">
					<label class="col-lg-4 control-label">Seleccione estación móvil</label>
					<div class="col-lg-6">
						<select class="selectpicker" name="type_station">
							<option>Estación 1</option>
							<option>Estación 2</option>
							<option>Estación 3</option>
							<option>Estación 4</option>
							<option>Estación 5</option>
							<option>Estación 6</option>
							<option>Estación 7</option>
							<option>Estación 8</option>
							<option>Estación 9</option>
							<option>Estación 10</option>
							<option>Estación 11</option>
							<option>Estación 12</option>
							<option>Estación 13</option>
							<option>Estación 14</option>
							<option>Estación 15</option>
							<option>Estación 16</option>
							<option>Estación 17</option>
							<option>Estación 18</option>
							<option>Estación 19</option>
							<option>Estación 20</option>
							<option>Estación 21</option>
							<option>Estación 22</option>
							<option>Estación 23</option>
							<option>Estación 24</option>
							<option>Estación 25</option>
							<option>Estación 26</option>
							<option>Estación 27</option>
							<option>Estación 28</option>
							<option>Estación 29</option>
							<option>Estación 30</option>
						</select>
					</div>
				</div>
				<h3 class="center">Lista de turnos disponibles</h3>
				<div class="form-group">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<th></th>
								<th>Hora</th>
								<th>Dirección</th>
								<th>Tipo de lavado</th>
								<th>Tipo de vehículo</th>
								<th>Cliente</th>
							</thead>
							<tbody>
								<tr>
									<td><label><input type="checkbox" value=""></label></td>
									<td>08:00</td>
									<td>López y Planes 800 <a href="http://www.noseencuentra.com">Ver en el mapa</a></td>
									<td>Básico</td>
									<td>Sedán</td>
									<td>Jorge González</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="form-group">
					<div class="center">
					<button id="btnimprimir" type="button" class="btn btn-raised btn-success" data-style="toast" data-content="Su hoja de ruta se imprimirá en unos segundos" data-toggle="snackbar" data-timeout="0">Confeccionar e imprimir hoja de ruta</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="Editar" class="tab-pane fade">
		<div class="well bs-component">
		<form method="post" class="form-horizontal">
		<h3 class="center">Modificar hoja de ruta</h3>
				<div class="form-group">
					<label class="col-lg-4 control-label">Seleccione estación móvil</label>
					<div class="col-lg-6">
						<select class="selectpicker estaciones" name="type_station">
							<option value="1">Estación 1</option>
							<option>Estación 2</option>
							<option>Estación 3</option>
							<option>Estación 4</option>
							<option>Estación 5</option>
							<option>Estación 6</option>
							<option>Estación 7</option>
							<option>Estación 8</option>
							<option>Estación 9</option>
							<option>Estación 10</option>
							<option>Estación 11</option>
							<option>Estación 12</option>
							<option>Estación 13</option>
							<option>Estación 14</option>
							<option>Estación 15</option>
							<option>Estación 16</option>
							<option>Estación 17</option>
							<option>Estación 18</option>
							<option>Estación 19</option>
							<option>Estación 20</option>
							<option>Estación 21</option>
							<option>Estación 22</option>
							<option>Estación 23</option>
							<option>Estación 24</option>
							<option>Estación 25</option>
							<option>Estación 26</option>
							<option>Estación 27</option>
							<option>Estación 28</option>
							<option>Estación 29</option>
							<option>Estación 30</option>
						</select>
					</div>
				</div>
				<div id="listadeturnos" style='display:none;'>
					<h3 class="center">Lista de turnos asignados</h3>
					<div class="form-group">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<th></th>
									<th>Hora</th>
									<th>Dirección</th>
									<th>Tipo de lavado</th>
									<th>Tipo de vehículo</th>
									<th>Cliente</th>
								</thead>
								<tbody>
									<tr>
										<td><label><input type="checkbox" value=""></label></td>
										<td>08:00</td>
										<td>López y Planes 800 <a href="http://www.noseencuentra.com">Ver en el mapa</a></td>
										<td>Básico</td>
										<td>Sedán</td>
										<td>Jorge González</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="form-group">
						<div class="center">
						<button id="btnimprimir" type="button" class="btn btn-raised btn-success" data-style="toast" data-content="Su hoja de ruta se imprimirá en unos segundos" data-toggle="snackbar" data-timeout="0">Confeccionar e imprimir hoja de ruta</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>	

<script>	
$(document).ready(function(){
	$('.estaciones').on('changed.bs.select', function (e) {
		var a = $('.estaciones > .dropdown-menu > .dropdown-menu > li.selected').attr("data-original-index");
		if (a==2){
			$("#listadeturnos").show();
		}
	});
});
</script>
<?php
include('paginacion.php');
include('_footer.php');
?>

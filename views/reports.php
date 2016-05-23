<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>


<ul class="nav nav-tabs" id="Cosas">
	<li class="active"><a data-toggle="tab" href="#Centros">Centros</a></li>
    <li><a data-toggle="tab" href="#Quioscos">Quioscos</a></li>
    <li><a data-toggle="tab" href="#Estaciones">Estaciones</a></li>
    <li><a data-toggle="tab" href="#Empleados">Empleados</a></li>
    <li><a data-toggle="tab" href="#Clientes">Clientes</a></li>
</ul>

    <div class="tab-content">
        <div id="Centros" class="tab-pane fade in active">
            <h3>Solicitar informe de centros</h3>
			<br>
            <label for="user_name" class="col-lg-4 control-label">Seleccione centro</label>
			<select class="selectpicker" name="type_center" id="type_center">
				<option>Todas las centros</option>
				<option>Washapp Centro</option>
				<option>Washapp Centenario</option>
				<option>Washapp 2</option>
				<option>Washapp Corrientes</option>
			</select>
			<br>
			<input type="submit" class="btn btn-success submit" name="register" value="Crear informe de centros" id="btncentros"/>
		</div>
		
		
        <div id="Quioscos" class="tab-pane fade">
			<h3>Solicitar informe de quioscos</h3>
			<br>
            <label for="user_name" class="col-lg-4 control-label">Seleccione quiosco/s</label>
			<select class="selectpicker" name="type_quiosco">
				<option>Todos los quioscos</option>
				<option>Quiosco 1</option>
				<option>Quiosco 2</option>
				<option>Quiosco 3</option>
				<option>Quiosco 4</option>
				<option>Quiosco 5</option>
				<option>Quiosco 6</option>
				<option>Quiosco 7</option>
				<option>Quiosco 8</option>
				<option>Quiosco 9</option>
				<option>Quiosco 10</option>
				<option>Quiosco 11</option>
				<option>Quiosco 12</option>
				<option>Quiosco 13</option>
				<option>Quiosco 14</option>
				<option>Quiosco 15</option>
				<option>Quiosco 16</option>
				<option>Quiosco 17</option>
				<option>Quiosco 18</option>
				<option>Quiosco 19</option>
				<option>Quiosco 20</option>
				<option>Quiosco 21</option>
				<option>Quiosco 22</option>
				<option>Quiosco 23</option>
				<option>Quiosco 24</option>
				<option>Quiosco 25</option>
			</select>
			<br>
			<input type="submit" class="btn btn-success submit" name="register" value="Crear informe de quioscos" id="btnquioscos"/>
        </div>
        <div id="Estaciones" class="tab-pane fade">
            <h3>Solicitar informe de estaciones</h3>
			<br>
			<label for="user_name" class="col-lg-4 control-label">Seleccione estación/es</label>
			<select class="selectpicker" name="type_station">
				<option>Todas las estaciones</option>
				
				<option>Estación 1</option>
				<option>Estación 2</option>
				<option>Estación 3</option>
				<option>Estación 4</option>
				
			</select>
			<br>
			<input type="submit" class="btn btn-success submit" name="register" value="Crear informe de estaciones" id="btnestaciones"/>
        </div>
        <div id="Empleados" class="tab-pane fade">
            <h3>Solicitar informe de empleados</h3>
			<br>
			
			Acá poner caja de búsqueda inteligente (?)
			
			<br>
			<input type="submit" class="btn btn-success submit" name="register" value="Crear informe de empleados" id="btnempleados"/>
        </div>
        <div id="Clientes" class="tab-pane fade">
			<div class="col-md-12">
			<br>
			<input type="submit" class="btn btn-success submit" name="register" value="Crear informe de clientes" id="btnclientes"/>
        </div>
		</div>
	</div>
	<br>
	<label for="user_name" class="col-lg-4 control-label">Desde</label>
	<br>
	<input type="text" size="4" class="form-control" id="wash_day1"></input>
	<br>
	<label for="user_name" class="col-lg-4 control-label">Hasta</label>
	<br>
	<input type="text" class="form-control" id="wash_day2"></input>
	<br>
	<div class="w3-container" id="informeclientes"  style='display:none;'>
			<h3 class="center">Lista de clientes particulares</h3>
			<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Apellido y Nombre</th>
                <th>CUIL</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <tr id="clp1">
                <td>Gómez, Ernesto José</td>
                <td>20-20127984-2</td>
                <td>Solano López 450</td>
                <td>ernestogomez@hotmail.com</td>
                <td>Masculino</td>
                <td>3624876464</td>
              </tr>
              <tr id="clp2">
                <td>Almirón, Brian Ernesto</td>
                <td>20-22125986-2</td>
                <td>San Lorenzo 1066</td>
                <td>almiron22@hotmail.com</td>
                <td>Masculino</td>
                <td>3624556454</td>
              </tr>
              <tr id="clp3">
                <td>Ramírez, Ayelén Lola</td>
                <td>27-11258986-2</td>
                <td>San José 22</td>
                <td>destroyer_of_worlds@yahoo.com.ar</td>
                <td>Femenino</td>
                <td>3624456253</td>
              </tr>
              <tr id="clp4">
                <td>Milán, Jorge Carlos</td>
                <td>20-21227926-3</td>
                <td>Rivadavia 103</td>
                <td>milan_jorge@live.com.ar</td>
                <td>masculino</td>
                <td>3624156258</td>
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
              <tr id="clc1">
                <td>SECHEEP</td>
                <td>02-20127984-2</td>
                <td>Mussín, José Emanuel</td>
                <td>San Francisco 752</td>
                <td>shecheep@ecom.com</td>
                <td>3624875454</td>
              </tr>
              <tr id="clc2">
                <td>SAMEEP</td>
                <td>02-20127983-2</td>
                <td>huerga, Nicolás Gabriel</td>
                <td>San Isidro 65</td>
                <td>sameep@ecom.com</td>
                <td>3624845424</td>
              </tr>
              <tr id="clc3">
                <td>Lotería Chaqueña</td>
                <td>02-20125985-2</td>
                <td>Silva, Christian Facundo</td>
                <td>San Pedro 882</td>
                <td>loteriachaco@ecom.com</td>
                <td>3624878443</td>
              </tr>
              <tr id="clc4">
                <td>Musimundo</td>
                <td>02-20127985-2</td>
                <td>Ramírez, Carina Alejandra</td>
                <td>San Marcos 1254</td>
                <td>empresa@musimundo.com</td>
                <td>3624475254</td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	<div class="w3-container" id="informecentros"  style='display:none;'>
			<h3 class="center">Centros</h3>
			<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Centro</th>
                <th>Total de lavados realizados</th>
                <th>Importe recaudado</th>
              </tr>
            </thead>
            <tbody>
              <tr id="clp1">
                <td>Washapp Centro</td>
                <td>120</td>
                <td>$12000</td>
              </tr>
              <tr id="clp2">
                <td>Washapp Centenario</td>
                <td>93</td>
                <td>$9000</td>
              </tr>
              <tr id="clp3">
                <td>Washapp 2</td>
                <td>87</td>
                <td>$6700</td>
              </tr>
              <tr id="clp4">
                <td>Washapp Corrientes</td>
                <td>159</td>
                <td>$10000</td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	<div class="w3-container" id="informequioscos"  style='display:none;'>
			<h3 class="center">Quioscos</h3>
			<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Quiosco</th>
                <th>Total de lavados realizados</th>
                <th>Importe recaudado</th>
              </tr>
            </thead>
            <tbody>
				<tr id="qui1">
					<td>Quiosco 1</td>
					<td>6</td>
					<td>$594</td>
					</tr>
					<tr id="qui2">
					<td>Quiosco 2</td>
					<td>9</td>
					<td>$846</td>
					</tr>
					<tr id="qui3">
					<td>Quiosco 3</td>
					<td>9</td>
					<td>$861</td>
					</tr>
					<tr id="qui4">
					<td>Quiosco 4</td>
					<td>9</td>
					<td>$851</td>
					</tr>
					<tr id="qui5">
					<td>Quiosco 5</td>
					<td>9</td>
					<td>$629</td>
					</tr>
					<tr id="qui6">
					<td>Quiosco 6</td>
					<td>12</td>
					<td>$390</td>
					</tr>
					<tr id="qui7">
					<td>Quiosco 7</td>
					<td>11</td>
					<td>$305</td>
					</tr>
					<tr id="qui8">
					<td>Quiosco 8</td>
					<td>17</td>
					<td>$65</td>
					</tr>
					<tr id="qui9">
					<td>Quiosco 9</td>
					<td>19</td>
					<td>$282</td>
					</tr>
					<tr id="qui10">
					<td>Quiosco 10</td>
					<td>14</td>
					<td>$488</td>
					</tr>
					<tr id="qui11">
					<td>Quiosco 11</td>
					<td>19</td>
					<td>$823</td>
					</tr>
					<tr id="qui12">
					<td>Quiosco 12</td>
					<td>17</td>
					<td>$492</td>
					</tr>
					<tr id="qui13">
					<td>Quiosco 13</td>
					<td>19</td>
					<td>$406</td>
					</tr>
					<tr id="qui14">
					<td>Quiosco 14</td>
					<td>23</td>
					<td>$850</td>
					</tr>
					<tr id="qui15">
					<td>Quiosco 15</td>
					<td>16</td>
					<td>$352</td>
					</tr>
					<tr id="qui16">
					<td>Quiosco 16</td>
					<td>17</td>
					<td>$664</td>
					</tr>
					<tr id="qui17">
					<td>Quiosco 17</td>
					<td>17</td>
					<td>$385</td>
					</tr>
					<tr id="qui18">
					<td>Quiosco 18</td>
					<td>26</td>
					<td>$975</td>
					</tr>
					<tr id="qui19">
					<td>Quiosco 19</td>
					<td>27</td>
					<td>$159</td>
					</tr>
					<tr id="qui20">
					<td>Quiosco 20</td>
					<td>29</td>
					<td>$890</td>
					</tr>
					<tr id="qui21">
					<td>Quiosco 21</td>
					<td>31</td>
					<td>$495</td>
					</tr>
					<tr id="qui22">
					<td>Quiosco 22</td>
					<td>30</td>
					<td>$823</td>
					</tr>
					<tr id="qui23">
					<td>Quiosco 23</td>
					<td>28</td>
					<td>$543</td>
					</tr>
					<tr id="qui24">
					<td>Quiosco 24</td>
					<td>32</td>
					<td>$703</td>
					</tr>
					<tr id="qui25">
					<td>Quiosco 25</td>
					<td>26</td>
					<td>$746</td>
					</tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	
	<div class="w3-container" id="informeestaciones"  style='display:none;'>
			<h3 class="center">Estaciones</h3>
			<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Estación</th>
                <th>Total de lavados realizados</th>
                <th>Importe recaudado</th>
              </tr>
            </thead>
            <tbody>
				<tr id="est1">
					<td>Estación 1</td>
					<td>5</td>
					<td>$297</td>
					</tr>
					<tr id="est2">
					<td>Estación 2</td>
					<td>7</td>
					<td>$424</td>
					</tr>
					<tr id="est3">
					<td>Estación 3</td>
					<td>7</td>
					<td>$432</td>
					</tr>
					<tr id="est4">
					<td>Estación 4</td>
					<td>8</td>
					<td>$428</td>
					</tr>
					<tr id="est5">
					<td>Estación 5</td>
					<td>8</td>
					<td>$317</td>
					</tr>
					<tr id="est6">
					<td>Estación 6</td>
					<td>11</td>
					<td>$198</td>
					</tr>
					<tr id="est7">
					<td>Estación 7</td>
					<td>10</td>
					<td>$156</td>
					</tr>
					<tr id="est8">
					<td>Estación 8</td>
					<td>14</td>
					<td>$36</td>
					</tr>
					<tr id="est9">
					<td>Estación 9</td>
					<td>16</td>
					<td>$145</td>
					</tr>
					<tr id="est10">
					<td>Estación 10</td>
					<td>13</td>
					<td>$249</td>
					</tr>
					<tr id="est11">
					<td>Estación 11</td>
					<td>17</td>
					<td>$417</td>
					</tr>
					<tr id="est12">
					<td>Estación 12</td>
					<td>16</td>
					<td>$252</td>
					</tr>
					<tr id="est13">
					<td>Estación 13</td>
					<td>17</td>
					<td>$209</td>
					</tr>
					<tr id="est14">
					<td>Estación 14</td>
					<td>20</td>
					<td>$432</td>
					</tr>
					<tr id="est15">
					<td>Estación 15</td>
					<td>15</td>
					<td>$184</td>
					</tr>
					<tr id="est16">
					<td>Estación 16</td>
					<td>17</td>
					<td>$340</td>
					</tr>
					<tr id="est17">
					<td>Estación 17</td>
					<td>17</td>
					<td>$201</td>
					</tr>
					<tr id="est18">
					<td>Estación 18</td>
					<td>24</td>
					<td>$497</td>
					</tr>
					<tr id="est19">
					<td>Estación 19</td>
					<td>24</td>
					<td>$89</td>
					</tr>
					<tr id="est20">
					<td>Estación 20</td>
					<td>26</td>
					<td>$455</td>
					</tr>
					<tr id="est21">
					<td>Estación 21</td>
					<td>28</td>
					<td>$258</td>
					</tr>
					<tr id="est22">
					<td>Estación 22</td>
					<td>28</td>
					<td>$422</td>
					</tr>
					<tr id="est23">
					<td>Estación 23</td>
					<td>26</td>
					<td>$283</td>
					</tr>
					<tr id="est24">
					<td>Estación 24</td>
					<td>29</td>
					<td>$363</td>
					</tr>
					<tr id="est25">
					<td>Estación 25</td>
					<td>26</td>
					<td>$385</td>
					</tr>
					<tr id="est26">
					<td>Estación 26</td>
					<td>30</td>
					<td>$317</td>
					</tr>
					<tr id="est27">
					<td>Estación 27</td>
					<td>28</td>
					<td>$296</td>
					</tr>
					<tr id="est28">
					<td>Estación 28</td>
					<td>35</td>
					<td>$407</td>
					</tr>
					<tr id="est29">
					<td>Estación 29</td>
					<td>33</td>
					<td>$82</td>
					</tr>
					<tr id="est30">
					<td>Estación 30</td>
					<td>33</td>
					<td>$267</td>
					</tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	<div class="w3-container" id="informeempleados"  style='display:none;'>
			<h3 class="center">Empleados</h3>
			<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Nombre Empleado</th>
                <th>Total de lavados realizados</th>
                <th>Importe recaudado</th>
              </tr>
            </thead>
            <tbody>
				<tr id="emp1">
                <td>Huerga Caserez, Christian Emanuel</td>
                <td>0</td>
                <td>-$2000</td>
				</tr>
				<tr id="emp2">
                <td>Pollero, Hector Emiliano</td>
                <td>25</td>
                <td>$1900</td>
				</tr>
				<tr id="emp3">
                <td>Ramírez, Karina Anyelén</td>
                <td>22</td>
                <td>$1300</td>
				</tr>
				<tr id="emp4">
                <td>Schneider, Miguel Angel</td>
                <td>21</td>
                <td>$1450</td>
				</tr>
				<tr id="emp5">
                <td>Silva, José Gabriel</td>
                <td>15</td>
                <td>$1200</td>
				</tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	<div class="w3-container" id="Imprimir" style='display:none;'>
	<br>
			<input type="submit" class="btn btn-success submit" name="print" value="Imprimir informe" id="btnimprimir"/>
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
	$(function() {
	$("#wash_day1").datepicker();
	});

	$(function() {
	$("#wash_day2").datepicker();
	});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script>	
$(document).ready(function(){
$("#btnclientes").click(function(){
	$("#informecentros").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informeclientes").show();
	$("#Imprimir").show();
});
$("#btnquioscos").click(function(){
	$("#informecentros").hide();
	$("#informeestaciones").hide();
	$("#informeclientes").hide();
	$("#informeempleados").hide();
	$("#informequioscos").show();
	$("#Imprimir").show();
});
$("#btnestaciones").click(function(){
	$("#informecentros").hide();
	$("#informeclientes").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informeestaciones").show();
	$("#Imprimir").show();
});
$("#btncentros").click(function(){
	$("#informeclientes").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informecentros").show();
	$("#Imprimir").show();
});
$("#btnempleados").click(function(){
	$("#informeclientes").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$("#informecentros").hide();
	$("#informeempleados").show();
	$("#Imprimir").show();
});
});
</script>

<?php
include('_footer.php'); 
?>

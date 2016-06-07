<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>


<ul class="nav nav-tabs" id="Cosas">
	<li class="active"><a data-toggle="tab" href="#Todos">Global</a></li>
    <li><a data-toggle="tab" href="#Centros">Centros</a></li>
    <li><a data-toggle="tab" href="#Quioscos">Quioscos</a></li>
    <li><a data-toggle="tab" href="#Estaciones">Estaciones</a></li>
    <li><a data-toggle="tab" href="#Empleados">Empleados</a></li>
    <li><a data-toggle="tab" href="#Clientes">Clientes</a></li>
    <li><a data-toggle="tab" href="#Insumos">Insumos</a></li>
</ul>

    <div class="tab-content">
        <div id="Todos" class="tab-pane fade in active">
		<div class="well bs-component">
            <h3>Solicitar informe global</h3>
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>
	
			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe global" id="btnglobal"/>
			</div>
		</div>
	</div>
	<div id="Centros" class="tab-pane fade">
		<div class="well bs-component">
            <h3>Solicitar informe de centros</h3>
            <label for="user_name" class="col-lg-4 control-label">Seleccione centro</label>
			<div class="col-lg-6">
			<select class="selectpicker" name="type_center" id="type_center">
				<option value="1">Todos los centros</option>
				<option value="2">Washapp Centro</option>
				<option value="3">Washapp Centenario</option>
				<option value="4">Washapp 2</option>
				<option value="5">Washapp Corrientes</option>
			</select>
			</div>
			
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>
	
			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de centros" id="btncentros"/>
			</div>
		</div>
	</div>	
		
		
        <div id="Quioscos" class="tab-pane fade">
		<div class="well bs-component">
			<h3>Solicitar informe de quioscos</h3>
            <label for="user_name" class="col-lg-4 control-label">Seleccione quiosco/s</label>
			<div class="col-lg-6">
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
			</div>
			
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>
	
			
			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de quioscos" id="btnquioscos"/>
			</div>
        </div>
		</div>
		
        <div id="Estaciones" class="tab-pane fade">
		<div class="well bs-component">
            <h3>Solicitar informe de estaciones</h3>
			<label for="user_name" class="col-lg-4 control-label">Seleccione estación/es</label>
			<div class="col-lg-6">
			<select class="selectpicker" name="type_station">
				<option>Todas las estaciones</option>
				
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
			
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>
	
			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de estaciones" id="btnestaciones"/>
			</div>
        </div>
		</div>
        <div id="Empleados" class="tab-pane fade">
		<div class="well bs-component">
            <h3>Solicitar informe de empleados</h3>
			
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>

			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de empleados" id="btnempleados"/>
			</div>
		</div>
        </div>
        <div id="Clientes" class="tab-pane fade">
		<ul class="nav nav-tabs" id="CosasDeClientes">
			<li class="active"><a data-toggle="tab" href="#Consumos">Consumos realizados</a></li>
			<li><a data-toggle="tab" href="#Listado">Listado general</a></li>
		</ul>
		
		<div class="tab-content">
		<div id="Consumos" class="tab-pane fade in active">
			<div class="well bs-component">
            <h3>Solicitar informe de consumos realizados</h3>
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>
				<div class="center">
				<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de consumos realizados" id="btnconsumos"/>
				</div>	
			</div>
		</div>
		<div id="Listado" class="tab-pane fade">
			<div class="well bs-component">
            <h3>Solicitar lista de clientes</h3>
				<div class="center">
				<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de clientes" id="btnlistado"/>
				</div>
			</div>
		</div>
		
		
		</div>
		
		</div>
		<div id="Insumos" class="tab-pane fade">
		
		<div class="well bs-component">
        <div>
			<h3 class="center">Solicitar informe de insumos consumidos</h3> 
			<div class="izq">
			<p class="sub" style="color:#009688 ;"> Seleccionar producto</p>
			  <div class="der formm">
				<select class="selectpicker sub">
					<option class="todos" style="color: #8F8F8F">Todos</option>
					<option data-divider="true"></option>
					<option class="arom">Aromatizante</option>    
					<option class="det">Detergente concentrado sin fosfatos</option>
					<option class="jab">Jabon concentrado</option>
					<option class="llanta">Limpia llantas</option>
					<option class="sham">Shampoo Siliconado</option>
				</select>
			  </div>
			</div>
			
			<div class="izq">
			<p class="sub" style="color:#009688 ;"> Seleccionar lugar</p>
			  <div class="der formm">
				<select class="selectpicker sub">
					<option class="op0" style="color: #8F8F8F">Todos</option>
					<option data-divider="true"></option>
					<option class="op1">Centros</option>    
					<option class="op2">Quioscos</option>
					<option class="op3">Estaciones</option>
				</select>
			  </div>
			</div>
			
			</div>
			<label for="user_name" class="col-lg-4 control-label">Desde</label>
			<div class="col-lg-6">
			<input type="text" size="4" class="form-control"></input>
			</div>
			<label for="user_name" class="col-lg-4 control-label">Hasta</label>
			<div class="col-lg-6">
			<input type="text" class="form-control"></input>
			</div>

			<div class="center">
			<input type="submit" class="btn btn-raised btn-success" name="register" value="Crear informe de insumos" id="btninsumos"/>
			</div>
			
		</div>
			
		</div>
	</div>
	
	<div class="well bs-component" id="Hoja"  style='display:none;'>
	<p align=left>
	<?php
          echo '
          <a class="navbar-brand" href="'. $site_url .'" style="font-size: 28px;"><img src="'.$site_url.'/images/logo_w.png" height="30" width="30" style="float: left; margin-right: 10px;"/> WashApp</a>';
          ?>
	</p>
	<br>
	<br>
	<DIV class="galleta" ALIGN=left>Desde: 11/11/2016 Hasta: 12/12/2016</DIV>
	<DIV ALIGN=left>Fecha de impresión: 06/06/2016</DIV>
	
	<div class="w3-container" id="insumosxcentro"  style='display:none;'>
			<h3 class="center">Insumos consumidos en Centros</h3>
			<br>
          <table class="table">
            <thead>
				<tr>
					<th>Centro</th>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Gastos</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>Washapp Centenario</td>
						<td>Aromatizante</td>
						<td>25</td>
						<td>-$600</td>
					</tr>
					<tr>
						<td></td>
						<td>Detergente concentrado sin fosfatos</td>
						<td>20</td>
						<td>-$290</td>
					</tr>
					<tr>
						<td></td>
						<td>Jabón concentrado</td>
						<td>10</td>
						<td>-$560</td>
					</tr>
					<tr>
						<td></td>
						<td>Limpiallantas</td>
						<td>11</td>
						<td>-$780</td>
					</tr>
					<tr>
						<td></td>
						<td>Shampoo Siliconado</td>
						<td>19</td>
						<td>-$900</td>
					</tr>
					<tr bgcolor="Gainsboro">
						<td>Total gastos</td>
						<td></td>
						<td></td>
						<td>-$3130</td>
					</tr>
					<tr>
						<td>Washapp Sarmiento</td>
						<td>Aromatizante</td>
						<td>25</td>
						<td>-$600</td>
					</tr>
					<tr>
						<td></td>
						<td>Detergente concentrado sin fosfatos</td>
						<td>20</td>
						<td>-$290</td>
					</tr>
					<tr>
						<td></td>
						<td>Jabón concentrado</td>
						<td>10</td>
						<td>-$560</td>
					</tr>
					<tr>
						<td></td>
						<td>Limpiallantas</td>
						<td>11</td>
						<td>-$780</td>
					</tr>
					<tr>
						<td></td>
						<td>Shampoo Siliconado</td>
						<td>19</td>
						<td>-$900</td>
					</tr>
					<tr bgcolor="Gainsboro">
						<td>Total gastos</td>
						<td></td>
						<td></td>
						<td>-$3130</td>
					</tr>
					<tr>
						<td>Washapp Corrientes</td>
						<td>Aromatizante</td>
						<td>25</td>
						<td>-$600</td>
					</tr>
					<tr>
						<td></td>
						<td>Detergente concentrado sin fosfatos</td>
						<td>20</td>
						<td>-$290</td>
					</tr>
					<tr>
						<td></td>
						<td>Jabón concentrado</td>
						<td>10</td>
						<td>-$560</td>
					</tr>
					<tr>
						<td></td>
						<td>Limpiallantas</td>
						<td>11</td>
						<td>-$780</td>
					</tr>
					<tr>
						<td></td>
						<td>Shampoo Siliconado</td>
						<td>19</td>
						<td>-$900</td>
					</tr>
					<tr bgcolor="Gainsboro">
						<td>Total gastos</td>
						<td></td>
						<td></td>
						<td>-$3130</td>
					</tr>
					<tr>
						<td>Washapp 2</td>
						<td>Aromatizante</td>
						<td>25</td>
						<td>-$600</td>
					</tr>
					<tr>
						<td></td>
						<td>Detergente concentrado sin fosfatos</td>
						<td>20</td>
						<td>-$290</td>
					</tr>
					<tr>
						<td></td>
						<td>Jabón concentrado</td>
						<td>10</td>
						<td>-$560</td>
					</tr>
					<tr>
						<td></td>
						<td>Limpiallantas</td>
						<td>11</td>
						<td>-$780</td>
					</tr>
					<tr>
						<td></td>
						<td>Shampoo Siliconado</td>
						<td>19</td>
						<td>-$900</td>
					</tr>
					<tr bgcolor="Gainsboro">
						<td>Total gastos</td>
						<td></td>
						<td></td>
						<td>-$3130</td>
					</tr>
				</tbody>
          </table>
	</div>
	<div class="w3-container" id="insumosxestacion"  style='display:none;'>
			<h3 class="center">Insumos consumidos en Estaciones</h3>
			<br>
          <table class="table">
            <thead>
            	<tr>
					<th>Estación</th>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Gastos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Estacion 1</td>
				<td>Shampoo siliconado</td>
				<td>17</td>
				<td>$511</td>
				</tr>
				<tr>
				<td>Estacion 1</td>
				<td>Aromatizante</td>
				<td>1</td>
				<td>$783</td>
				</tr>
				<tr>
				<td>Estacion 1</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>9</td>
				<td>$127</td>
				</tr>
				<tr>
				<td>Estacion 1</td>
				<td>Jabon concentrado</td>
				<td>23</td>
				<td>$759</td>
				</tr>
				<tr>
				<td>Estacion 1</td>
				<td>Limpiallantas</td>
				<td>20</td>
				<td>$590</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 2</td>
				<td>Shampoo siliconado</td>
				<td>19</td>
				<td>$478</td>
				</tr>
				<tr>
				<td>Estacion 2</td>
				<td>Aromatizante</td>
				<td>17</td>
				<td>$151</td>
				</tr>
				<tr>
				<td>Estacion 2</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>8</td>
				<td>$335</td>
				</tr>
				<tr>
				<td>Estacion 2</td>
				<td>Jabon concentrado</td>
				<td>16</td>
				<td>$99</td>
				</tr>
				<tr>
				<td>Estacion 2</td>
				<td>Limpiallantas</td>
				<td>12</td>
				<td>$980</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 3</td>
				<td>Shampoo siliconado</td>
				<td>14</td>
				<td>$67</td>
				</tr>
				<tr>
				<td>Estacion 3</td>
				<td>Aromatizante</td>
				<td>22</td>
				<td>$938</td>
				</tr>
				<tr>
				<td>Estacion 3</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>10</td>
				<td>$182</td>
				</tr>
				<tr>
				<td>Estacion 3</td>
				<td>Jabon concentrado</td>
				<td>12</td>
				<td>$938</td>
				</tr>
				<tr>
				<td>Estacion 3</td>
				<td>Limpiallantas</td>
				<td>9</td>
				<td>$230</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 4</td>
				<td>Shampoo siliconado</td>
				<td>20</td>
				<td>$117</td>
				</tr>
				<tr>
				<td>Estacion 4</td>
				<td>Aromatizante</td>
				<td>12</td>
				<td>$219</td>
				</tr>
				<tr>
				<td>Estacion 4</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>4</td>
				<td>$164</td>
				</tr>
				<tr>
				<td>Estacion 4</td>
				<td>Jabon concentrado</td>
				<td>7</td>
				<td>$724</td>
				</tr>
				<tr>
				<td>Estacion 4</td>
				<td>Limpiallantas</td>
				<td>17</td>
				<td>$241</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 5</td>
				<td>Shampoo siliconado</td>
				<td>9</td>
				<td>$551</td>
				</tr>
				<tr>
				<td>Estacion 5</td>
				<td>Aromatizante</td>
				<td>10</td>
				<td>$341</td>
				</tr>
				<tr>
				<td>Estacion 5</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>12</td>
				<td>$981</td>
				</tr>
				<tr>
				<td>Estacion 5</td>
				<td>Jabon concentrado</td>
				<td>15</td>
				<td>$501</td>
				</tr>
				<tr>
				<td>Estacion 5</td>
				<td>Limpiallantas</td>
				<td>21</td>
				<td>$21</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 6</td>
				<td>Shampoo siliconado</td>
				<td>9</td>
				<td>$489</td>
				</tr>
				<tr>
				<td>Estacion 6</td>
				<td>Aromatizante</td>
				<td>22</td>
				<td>$288</td>
				</tr>
				<tr>
				<td>Estacion 6</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>13</td>
				<td>$377</td>
				</tr>
				<tr>
				<td>Estacion 6</td>
				<td>Jabon concentrado</td>
				<td>1</td>
				<td>$998</td>
				</tr>
				<tr>
				<td>Estacion 6</td>
				<td>Limpiallantas</td>
				<td>20</td>
				<td>$466</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 7</td>
				<td>Shampoo siliconado</td>
				<td>10</td>
				<td>$24</td>
				</tr>
				<tr>
				<td>Estacion 7</td>
				<td>Aromatizante</td>
				<td>19</td>
				<td>$623</td>
				</tr>
				<tr>
				<td>Estacion 7</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>17</td>
				<td>$803</td>
				</tr>
				<tr>
				<td>Estacion 7</td>
				<td>Jabon concentrado</td>
				<td>22</td>
				<td>$1</td>
				</tr>
				<tr>
				<td>Estacion 7</td>
				<td>Limpiallantas</td>
				<td>23</td>
				<td>$194</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 8</td>
				<td>Shampoo siliconado</td>
				<td>5</td>
				<td>$830</td>
				</tr>
				<tr>
				<td>Estacion 8</td>
				<td>Aromatizante</td>
				<td>4</td>
				<td>$917</td>
				</tr>
				<tr>
				<td>Estacion 8</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>21</td>
				<td>$657</td>
				</tr>
				<tr>
				<td>Estacion 8</td>
				<td>Jabon concentrado</td>
				<td>20</td>
				<td>$444</td>
				</tr>
				<tr>
				<td>Estacion 8</td>
				<td>Limpiallantas</td>
				<td>12</td>
				<td>$883</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 9</td>
				<td>Shampoo siliconado</td>
				<td>24</td>
				<td>$644</td>
				</tr>
				<tr>
				<td>Estacion 9</td>
				<td>Aromatizante</td>
				<td>9</td>
				<td>$275</td>
				</tr>
				<tr>
				<td>Estacion 9</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>10</td>
				<td>$113</td>
				</tr>
				<tr>
				<td>Estacion 9</td>
				<td>Jabon concentrado</td>
				<td>23</td>
				<td>$454</td>
				</tr>
				<tr>
				<td>Estacion 9</td>
				<td>Limpiallantas</td>
				<td>13</td>
				<td>$975</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 10</td>
				<td>Shampoo siliconado</td>
				<td>2</td>
				<td>$331</td>
				</tr>
				<tr>
				<td>Estacion 10</td>
				<td>Aromatizante</td>
				<td>7</td>
				<td>$57</td>
				</tr>
				<tr>
				<td>Estacion 10</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>21</td>
				<td>$944</td>
				</tr>
				<tr>
				<td>Estacion 10</td>
				<td>Jabon concentrado</td>
				<td>21</td>
				<td>$0</td>
				</tr>
				<tr>
				<td>Estacion 10</td>
				<td>Limpiallantas</td>
				<td>6</td>
				<td>$381</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 11</td>
				<td>Shampoo siliconado</td>
				<td>12</td>
				<td>$513</td>
				</tr>
				<tr>
				<td>Estacion 11</td>
				<td>Aromatizante</td>
				<td>24</td>
				<td>$122</td>
				</tr>
				<tr>
				<td>Estacion 11</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>20</td>
				<td>$767</td>
				</tr>
				<tr>
				<td>Estacion 11</td>
				<td>Jabon concentrado</td>
				<td>18</td>
				<td>$132</td>
				</tr>
				<tr>
				<td>Estacion 11</td>
				<td>Limpiallantas</td>
				<td>7</td>
				<td>$759</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 12</td>
				<td>Shampoo siliconado</td>
				<td>10</td>
				<td>$569</td>
				</tr>
				<tr>
				<td>Estacion 12</td>
				<td>Aromatizante</td>
				<td>19</td>
				<td>$232</td>
				</tr>
				<tr>
				<td>Estacion 12</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>16</td>
				<td>$344</td>
				</tr>
				<tr>
				<td>Estacion 12</td>
				<td>Jabon concentrado</td>
				<td>20</td>
				<td>$653</td>
				</tr>
				<tr>
				<td>Estacion 12</td>
				<td>Limpiallantas</td>
				<td>5</td>
				<td>$628</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 13</td>
				<td>Shampoo siliconado</td>
				<td>11</td>
				<td>$931</td>
				</tr>
				<tr>
				<td>Estacion 13</td>
				<td>Aromatizante</td>
				<td>5</td>
				<td>$234</td>
				</tr>
				<tr>
				<td>Estacion 13</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>3</td>
				<td>$915</td>
				</tr>
				<tr>
				<td>Estacion 13</td>
				<td>Jabon concentrado</td>
				<td>1</td>
				<td>$398</td>
				</tr>
				<tr>
				<td>Estacion 13</td>
				<td>Limpiallantas</td>
				<td>4</td>
				<td>$941</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 14</td>
				<td>Shampoo siliconado</td>
				<td>19</td>
				<td>$481</td>
				</tr>
				<tr>
				<td>Estacion 14</td>
				<td>Aromatizante</td>
				<td>0</td>
				<td>$792</td>
				</tr>
				<tr>
				<td>Estacion 14</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>0</td>
				<td>$653</td>
				</tr>
				<tr>
				<td>Estacion 14</td>
				<td>Jabon concentrado</td>
				<td>17</td>
				<td>$741</td>
				</tr>
				<tr>
				<td>Estacion 14</td>
				<td>Limpiallantas</td>
				<td>0</td>
				<td>$377</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 15</td>
				<td>Shampoo siliconado</td>
				<td>5</td>
				<td>$233</td>
				</tr>
				<tr>
				<td>Estacion 15</td>
				<td>Aromatizante</td>
				<td>10</td>
				<td>$662</td>
				</tr>
				<tr>
				<td>Estacion 15</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>10</td>
				<td>$403</td>
				</tr>
				<tr>
				<td>Estacion 15</td>
				<td>Jabon concentrado</td>
				<td>14</td>
				<td>$493</td>
				</tr>
				<tr>
				<td>Estacion 15</td>
				<td>Limpiallantas</td>
				<td>19</td>
				<td>$403</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 16</td>
				<td>Shampoo siliconado</td>
				<td>3</td>
				<td>$491</td>
				</tr>
				<tr>
				<td>Estacion 16</td>
				<td>Aromatizante</td>
				<td>18</td>
				<td>$880</td>
				</tr>
				<tr>
				<td>Estacion 16</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>17</td>
				<td>$610</td>
				</tr>
				<tr>
				<td>Estacion 16</td>
				<td>Jabon concentrado</td>
				<td>3</td>
				<td>$399</td>
				</tr>
				<tr>
				<td>Estacion 16</td>
				<td>Limpiallantas</td>
				<td>15</td>
				<td>$264</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 17</td>
				<td>Shampoo siliconado</td>
				<td>15</td>
				<td>$690</td>
				</tr>
				<tr>
				<td>Estacion 17</td>
				<td>Aromatizante</td>
				<td>6</td>
				<td>$343</td>
				</tr>
				<tr>
				<td>Estacion 17</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>19</td>
				<td>$868</td>
				</tr>
				<tr>
				<td>Estacion 17</td>
				<td>Jabon concentrado</td>
				<td>5</td>
				<td>$446</td>
				</tr>
				<tr>
				<td>Estacion 17</td>
				<td>Limpiallantas</td>
				<td>1</td>
				<td>$98</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 18</td>
				<td>Shampoo siliconado</td>
				<td>0</td>
				<td>$169</td>
				</tr>
				<tr>
				<td>Estacion 18</td>
				<td>Aromatizante</td>
				<td>0</td>
				<td>$817</td>
				</tr>
				<tr>
				<td>Estacion 18</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>7</td>
				<td>$10</td>
				</tr>
				<tr>
				<td>Estacion 18</td>
				<td>Jabon concentrado</td>
				<td>11</td>
				<td>$54</td>
				</tr>
				<tr>
				<td>Estacion 18</td>
				<td>Limpiallantas</td>
				<td>9</td>
				<td>$764</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 19</td>
				<td>Shampoo siliconado</td>
				<td>21</td>
				<td>$448</td>
				</tr>
				<tr>
				<td>Estacion 19</td>
				<td>Aromatizante</td>
				<td>11</td>
				<td>$59</td>
				</tr>
				<tr>
				<td>Estacion 19</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>7</td>
				<td>$443</td>
				</tr>
				<tr>
				<td>Estacion 19</td>
				<td>Jabon concentrado</td>
				<td>0</td>
				<td>$831</td>
				</tr>
				<tr>
				<td>Estacion 19</td>
				<td>Limpiallantas</td>
				<td>20</td>
				<td>$41</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 20</td>
				<td>Shampoo siliconado</td>
				<td>0</td>
				<td>$135</td>
				</tr>
				<tr>
				<td>Estacion 20</td>
				<td>Aromatizante</td>
				<td>18</td>
				<td>$457</td>
				</tr>
				<tr>
				<td>Estacion 20</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>21</td>
				<td>$2</td>
				</tr>
				<tr>
				<td>Estacion 20</td>
				<td>Jabon concentrado</td>
				<td>20</td>
				<td>$501</td>
				</tr>
				<tr>
				<td>Estacion 20</td>
				<td>Limpiallantas</td>
				<td>2</td>
				<td>$123</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 21</td>
				<td>Shampoo siliconado</td>
				<td>4</td>
				<td>$408</td>
				</tr>
				<tr>
				<td>Estacion 21</td>
				<td>Aromatizante</td>
				<td>11</td>
				<td>$354</td>
				</tr>
				<tr>
				<td>Estacion 21</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>14</td>
				<td>$839</td>
				</tr>
				<tr>
				<td>Estacion 21</td>
				<td>Jabon concentrado</td>
				<td>10</td>
				<td>$29</td>
				</tr>
				<tr>
				<td>Estacion 21</td>
				<td>Limpiallantas</td>
				<td>0</td>
				<td>$147</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 22</td>
				<td>Shampoo siliconado</td>
				<td>21</td>
				<td>$582</td>
				</tr>
				<tr>
				<td>Estacion 22</td>
				<td>Aromatizante</td>
				<td>23</td>
				<td>$452</td>
				</tr>
				<tr>
				<td>Estacion 22</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>1</td>
				<td>$258</td>
				</tr>
				<tr>
				<td>Estacion 22</td>
				<td>Jabon concentrado</td>
				<td>23</td>
				<td>$609</td>
				</tr>
				<tr>
				<td>Estacion 22</td>
				<td>Limpiallantas</td>
				<td>24</td>
				<td>$677</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 23</td>
				<td>Shampoo siliconado</td>
				<td>4</td>
				<td>$938</td>
				</tr>
				<tr>
				<td>Estacion 23</td>
				<td>Aromatizante</td>
				<td>5</td>
				<td>$377</td>
				</tr>
				<tr>
				<td>Estacion 23</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>21</td>
				<td>$867</td>
				</tr>
				<tr>
				<td>Estacion 23</td>
				<td>Jabon concentrado</td>
				<td>8</td>
				<td>$359</td>
				</tr>
				<tr>
				<td>Estacion 23</td>
				<td>Limpiallantas</td>
				<td>11</td>
				<td>$291</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 24</td>
				<td>Shampoo siliconado</td>
				<td>18</td>
				<td>$978</td>
				</tr>
				<tr>
				<td>Estacion 24</td>
				<td>Aromatizante</td>
				<td>14</td>
				<td>$835</td>
				</tr>
				<tr>
				<td>Estacion 24</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>23</td>
				<td>$586</td>
				</tr>
				<tr>
				<td>Estacion 24</td>
				<td>Jabon concentrado</td>
				<td>14</td>
				<td>$21</td>
				</tr>
				<tr>
				<td>Estacion 24</td>
				<td>Limpiallantas</td>
				<td>17</td>
				<td>$629</td>
				</tr>
				<tr>
				<td>Estacion 25</td>
				<td>Shampoo siliconado</td>
				<td>8</td>
				<td>$474</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				<tr>
				<td>Estacion 25</td>
				<td>Aromatizante</td>
				<td>14</td>
				<td>$937</td>
				</tr>
				<tr>
				<td>Estacion 25</td>
				<td>Detergente concentrado sin fosfatos</td>
				<td>22</td>
				<td>$967</td>
				</tr>
				<tr>
				<td>Estacion 25</td>
				<td>Jabon concentrado</td>
				<td>14</td>
				<td>$705</td>
				</tr>
				<tr>
				<td>Estacion 25</td>
				<td>Limpiallantas</td>
				<td>2</td>
				<td>$375</td>
				</tr>
				<tr bgcolor="Gainsboro">
					<td>Total gastos</td>
					<td></td>
					<td></td>
					<td>-$3130</td>
				</tr>
				</tbody>
          </table>
	</div>
	
	
	<div class="w3-container" id="informeclientes"  style='display:none;'>
	<div id="informelistado">
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
		<div id="informeconsumos">
			<h3 class="center">Consumos realizados por clientes particulares</h3>
		<br>
          <table class="table">
            <thead>
            <?php
            echo'
              <tr>
                <th>Apellido y Nombre</th>
                <th>CUIL</th>
                <th>Tipo de lavado</th>
                <th>Tipo de vehículo</th>
                <th>Cantidad</th>
                <th>Importe total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Gómez, Ernesto José</td>
                <td>20-20127984-2</td>
                <td>Ecológico</td>
                <td>Sedán</td>
                <td>3</td>
                <td>$800</td>
              </tr>
              <tr>
                <td>Almirón, Brian Ernesto</td>
                <td>20-22125986-2</td>
                <td>Básico</td>
                <td>PickUp</td>
                <td>4</td>
                <td>$500</td>
              </tr>
              <tr>
                <td>Ramírez, Ayelén Lola</td>
                <td>27-11258986-2</td>
                <td>Complet</td>
                <td>Camión</td>
                <td>2</td>
                <td>$1000</td>
              </tr>
              <tr>
                <td>Milán, Jorge Carlos</td>
                <td>20-21227926-3</td>
                <td>Camioneta 4x4</td>
                <td>Ecológico</td>
                <td>5</td>
                <td>$900</td>
              </tr>
              ';
              ?>
            </tbody>
          </table>
		  <h3 class="center">Consumos realizados por clientes corporativos</h3>
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
              <tr id="totalcentros" bgcolor="Gainsboro">
                <td>Total</td>
                <td>459</td>
                <td>$37700</td>
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
					<tr id="totalquioscos" bgcolor="Gainsboro">
					<td>Total</td>
					<td>300</td>
					<td>$15040</td>
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
					<tr id="totalestaciones" bgcolor="Gainsboro">
					<td>Total</td>
					<td>450</td>
					<td>$19800</td>
					</tr>
              ';
              ?>
            </tbody>
          </table>
	</div>
	<div class="w3-container" id="informecentenario"  style='display:none;'>
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
                <td>Washapp Centenario</td>
                <td>120</td>
                <td>$12000</td>
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
		<div class="center">
			<button id="btnimprimir" type="button" class="btn btn-raised btn-success" data-style="toast" data-content="Su informe se imprimirá en unos segundos" data-toggle="snackbar" data-timeout="0">Imprimir informe</button>
		</div>
	</div>
	</div>
<script type="text/javascript">
<?php
echo'
$(function() {
    $(".form-control").datetimepicker({
                    locale: "es",
                    daysOfWeekDisabled: [0],
                    format: "DD/MM/YYYY"
                });
  });
';
echo'
$(function() {
    $(".form-control").datetimepicker({
                    locale: "es",
                    daysOfWeekDisabled: [0],
                    format: "DD/MM/YYYY"
                });
  });
';
?>
</script>

<script>	
$(document).ready(function(){
$("#btnglobal").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informecentros").show();
	$("#informeestaciones").show();
	$("#informequioscos").show();
	$("#informeempleados").hide();
	$("#informeclientes").hide();
	$(".galleta").show();
	$("#Imprimir").show();
});
$("#btnconsumos").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informecentros").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informeclientes").show();$("#informeconsumos").show();$("#informelistado").hide();
	$(".galleta").show();
	$("#Imprimir").show();
});
$("#btnlistado").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informecentros").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informeclientes").show();$("#informeconsumos").hide();$("#informelistado").show();
	$(".galleta").hide();
	$("#Imprimir").show();
});
$("#btnquioscos").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informecentros").hide();
	$("#informeestaciones").hide();
	$("#informeclientes").hide();
	$("#informeempleados").hide();
	$("#informequioscos").show();
	$(".galleta").show();
	$("#Imprimir").show();
});
$("#btnestaciones").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informecentros").hide();
	$("#informeclientes").hide();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	$("#informeestaciones").show();
	$(".galleta").show();
	$("#Imprimir").show();
});
$("#btncentros").click(function(){
	var a = $("li.selected").attr("data-original-index");
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informeclientes").hide();
	$("#informeestaciones").hide();
	$(".galleta").show();
	$("#informequioscos").hide();
	$("#informeempleados").hide();
	if (a==2){
		$("#informecentros").hide();
		$("#informecentenario").show();
	}
	else{
		$("#informecentros").show();
		$("#informecentenario").hide();
	}
	$("#Imprimir").show();
});
$("#btnempleados").click(function(){
	$("#Hoja").show();
	$("#insumosxcentro").hide();$("#insumosxestacion").hide();$("#insumosxquiosco").hide();
	$("#informeclientes").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$(".galleta").show();
	$("#informecentros").hide();
	$("#informeempleados").show();
	$("#Imprimir").show();
});
$("#btninsumos").click(function(){
	$("#Hoja").show();
	$("#informeclientes").hide();
	$("#informeestaciones").hide();
	$("#informequioscos").hide();
	$(".galleta").show();
	$("#informecentros").hide();
	$("#informeempleados").hide();
	$("#insumosxcentro").show();$("#insumosxestacion").show();$("#insumosxquiosco").show();
	$("#Imprimir").show();
});
});
</script>

<?php
include('_footer.php'); 
?>

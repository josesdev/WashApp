
<?php include('_header.php');
require_once(__ROOT__.'/config.php');
?>
<style>
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
  color:white;
  background-color: #73C5BE;
}
</style>

<div class="well bs-component">
<div>
<h3 class="center">Cantidad de insumos</h3> 
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
</div>

<hr id="ray"/>

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a data-toggle="tab" href="#home" style="font-size: 15px">Centros</a></li>
    
  <li role="presentation"><a data-toggle="tab" href="#menu1" style="font-size: 15px">Estaciones</a></li>

  <li role="presentation"><a data-toggle="tab" href="#menu2" style="font-size: 15px">Quioscos</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
        <div id="tod">
                                <table class="table" >
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="uno">30</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="uno1"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td> 
                                       <td>Washapp Sarmiento</td>
                                       <td>
                                         <span class"displayB" id="dos">24</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="dos2"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="tres">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tres3"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="cuatro">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cuatro4"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="cinco">28</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cinco5"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="seis">5</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="seis6"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="siete">35</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="siete7"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="ocho">32</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ocho8"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="nueve">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="nueve9"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Limpia llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="diez">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="diez10"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="once">22</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="once11"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="doce">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="doce12"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="trece">37</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="trece13"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="catorce">40</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="catorce14"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="quince">29</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="quince15"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                  </table>
                            </div>

                         
                            <div id="tab1" style="display:none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>      
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="dseis">30</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="dseis16"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="dsiete">24</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="dsiete17"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="docho">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="docho18"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                  </table>
                            </div> 

                            <div id="tab2" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>       
                                     <tr>
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="dnueve">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="dnueve19"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="veinte">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="veinte20"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="vuno">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vuno21"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                </table>
                            </div>

                            <div id="tab3" style="display: none">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="vdos">35</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vdos22"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="vtres">32</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vtres23"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="vcuatro">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vcuatro24"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                  </table>   
                            </div>

                            <div id="tab4" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Limpia Llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="vcinco">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vcinco25"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="vseis">22</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vseis26"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="vsiete">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vsiete27"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr> 
                                </table>     
                            </div>

                            <div id="tab5" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Centro</td> 
                                       <td>
                                         <span class"displayB" id="vocho">37</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vocho28"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="vnueve">40</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="vnueve29"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Washapp 2</td> 
                                       <td>
                                         <span class"displayB" id="treinta">29</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="treinta30"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>                                      
                                </table>
                            </div>


  </div>
  <div id="menu1" class="tab-pane fade">
    <div id="tode">
                                <table class="table" >
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="tuno">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tuno31"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td> 
                                       <td>Estación 2</td>
                                       <td>
                                         <span class"displayB" id="tdos">18</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tdos32"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="ttres">7</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ttres33"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="tcuatro">5</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tcuatro34"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="tcinco">8</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tcinco35"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="tseis">14</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tseis36"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="tsiete">10</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tsiete37"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="tocho">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tocho38"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="tnueve">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="tnueve39"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Limpia llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="cuarenta">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cuarenta40"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="cuno">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cuno41"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="cdos">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cdos42"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="ctres">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ctres43"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="ccuatro">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ccuatro44"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="ccinco">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ccinco45"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                  </table>
                            </div>

                            <div id="tab1e" style="display:none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>      
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="cseis">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cseis46"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="csiete">18</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="csiete47"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="cocho">7</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cocho48"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                  </table>
                            </div>  

                            <div id="tab2e" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>       
                                     <tr>
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="cnueve">5</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cnueve49"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="cincuenta">8</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cincuenta50"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="ciuno">14</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ciuno51"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                </table>
                            </div>

                            <div id="tab3e" style="display: none">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="cidos">10</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cidos52"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="citres">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="citres53"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="cicuatro">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cicuatro54"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                  </table>   
                            </div>

                            <div id="tab4e" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Limpia Llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="cicinco">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cicinco55"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="ciseis">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ciseis56"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="cisiete">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cisiete57"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr> 
                                </table>     
                            </div>

                            <div id="tab5e" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 1</td> 
                                       <td>
                                         <span class"displayB" id="ciocho">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ciocho58"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 2</td> 
                                       <td>
                                         <span class"displayB" id="cinueve">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="cinueve59"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Estación 3</td> 
                                       <td>
                                         <span class"displayB" id="sesenta">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sesenta60"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>                                      
                                </table>
                            </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <div id="todq">
                                <table class="table" >
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="suno">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="suno61"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td> 
                                       <td>Quisco Centro</td>
                                       <td>
                                         <span class"displayB" id="sdos">18</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sdos62"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="stres">7</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="stres63"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="scuatro">5</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="scuatro64"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="scinco">8</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="scinco65"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="sseis">14</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sseis66"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="ssiete">10</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ssiete67"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="socho">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="socho68"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="snueve">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="snueve69"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Limpia llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="setenta">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="setenta70"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="siuno">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="siuno71"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="sidos">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sidos72"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="sitres">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sitres73"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="sicuatro">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sicuatro74"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="sicinco">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sicinco75"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                  </table>
                            </div>

                            <div id="tab1q" style="display:none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>      
                                     <tr>
                                       <td colspan="4" class="i">Aromatizante</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="siseis">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="siseis76"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Centro</td> 
                                       <td>
                                         <span class"displayB" id="sisiete">18</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sisiete77"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="siocho">7</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="siocho78"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                  </table>
                            </div>  

                            <div id="tab2q" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>       
                                     <tr>
                                       <td colspan="4" class="i">Detergente concentrado sin fosfatos</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="sinueve">5</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="sinueve79"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="ochenta">8</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ochenta80"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="ouno">14</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ouno81"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>    
                                </table>
                            </div>

                            <div id="tab3q" style="display: none">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Jabón concentrado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="odos">10</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="odos82"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="otres">20</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="otres83"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="ocuatro">23</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ocuatro84"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>   
                                  </table>   
                            </div>

                            <div id="tab4q" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Limpia Llantas</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="ocinco">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="ocinco85"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="oseis">13</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="oseis86"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="osiete">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="osiete87"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr> 
                                </table>     
                            </div>

                            <div id="tab5q" style="display: none;">
                                <table class="table">
                                  <tr> 
                                    <th class="col-md-4">Producto</th> 
                                    <th class="col-md-3">Lugar</th>
                                    <th >Cantidad</th>
                                    <th class="col-md-4" style="padding-left: 85px">Editar</th>
                                  </tr>  
                                     <tr>
                                       <td colspan="4" class="i">Shampoo siliconado</td> 
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Carrefour</td> 
                                       <td>
                                         <span class"displayB" id="oocho">12</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="oocho88"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quisco Centro</td> 
                                       <td>
                                         <span class"displayB" id="onueve">15</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="onueve89"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td></td>
                                       <td>Quiosco Sarmiento</td> 
                                       <td>
                                         <span class"displayB" id="noventa">11</span>
                                         <input type="text" class="form-control displayN" pattern="[0-9]{2,7}" id="noventa"></input>
                                       </td>
                                       <td style="padding-left: 87px;">
                                            <a href="javascript:void(0)" class="edit" rel="tipsy" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="javascript:void(0)" class="displayN" rel="tipsy" title="Aplicar cambios" onclick="change_ok();"><span class="glyphicon glyphicon-ok"></span></a>
                                       </td>
                                     </tr>                                      
                                </table>
                            </div>
  </div>
</div>



</div>


</div>


<script type="text/javascript">

function change_ok() {
        var a = $("#uno1").val(); 
        $(".displayN").hide();       
        $("#uno").html(a);
        $("#uno").show();
    }

$(function() {    
    $(".selectpicker").selectpicker({
      size: 6
    });
    
});
$(document).ready(function(){
 /* var a = $("li.selected").attr("data-original-index"); 
  alert(a); */
    $(".todos").click(function(){
        $("#tod").show(); $("#tode").show(); $("#todq").show();
        $("#tab1").hide(); $("#tab1e").hide(); $("#tab1q").hide();        
        $("#tab2").hide(); $("#tab2e").hide(); $("#tab2q").hide();
        $("#tab3").hide(); $("#tab3e").hide(); $("#tab3q").hide();
        $("#tab4").hide(); $("#tab4e").hide(); $("#tab4q").hide();
        $("#tab5").hide(); $("#tab5e").hide(); $("#tab5q").hide();
    });
    $(".arom").click(function(){
        $("#tod").hide(); $("#tode").hide(); $("#todq").hide();
        $("#tab1").show(); $("#tab1e").show(); $("#tab1q").show();
        $("#tab2").hide(); $("#tab2e").hide(); $("#tab2q").hide();
        $("#tab3").hide(); $("#tab3e").hide(); $("#tab3q").hide();
        $("#tab4").hide(); $("#tab4e").hide(); $("#tab4q").hide();
        $("#tab5").hide(); $("#tab5e").hide(); $("#tab5q").hide();       
    });
    $(".det").click(function(){
        $("#tod").hide(); $("#tode").hide(); $("#todq").hide();
        $("#tab1").hide(); $("#tab1e").hide(); $("#tab1q").hide();
        $("#tab2").show(); $("#tab2e").show(); $("#tab2q").show();
        $("#tab3").hide(); $("#tab3e").hide(); $("#tab3q").hide();
        $("#tab4").hide(); $("#tab4e").hide(); $("#tab4q").hide();
        $("#tab5").hide(); $("#tab5e").hide(); $("#tab5q").hide();       
    });
    $(".jab").click(function(){
        $("#tod").hide(); $("#tode").hide(); $("#todq").hide();
        $("#tab1").hide(); $("#tab1e").hide(); $("#tab1q").hide();
        $("#tab2").hide(); $("#tab2e").hide(); $("#tab2q").hide();
        $("#tab3").show(); $("#tab3e").show(); $("#tab3q").show();
        $("#tab4").hide(); $("#tab4e").hide(); $("#tab4q").hide();
        $("#tab5").hide(); $("#tab5e").hide(); $("#tab5q").hide();
    });
    $(".llanta").click(function(){
        $("#tod").hide(); $("#tode").hide(); $("#todq").hide();
        $("#tab1").hide(); $("#tab1e").hide(); $("#tab1q").hide();
        $("#tab2").hide(); $("#tab2e").hide(); $("#tab2q").hide();
        $("#tab3").hide(); $("#tab3e").hide(); $("#tab3q").hide();
        $("#tab4").show(); $("#tab4e").show(); $("#tab4q").show();
        $("#tab5").hide(); $("#tab5e").hide(); $("#tab5q").hide();
    });
    $(".sham").click(function(){
        $("#tod").hide(); $("#tode").hide(); $("#todq").hide();
        $("#tab1").hide(); $("#tab1e").hide(); $("#tab1q").hide();
        $("#tab2").hide(); $("#tab2e").hide(); $("#tab2q").hide();
        $("#tab3").hide(); $("#tab3e").hide(); $("#tab3q").hide();
        $("#tab4").hide(); $("#tab4e").hide(); $("#tab4q").hide();
        $("#tab5").show(); $("#tab5e").show(); $("#tab5q").show();
    });
   $(document).on("click", ".edit", function(e) {
    $(".displayB").hide();
    $(".displayN").show();
    });
 
});


</script>
<?php include('_footer.php'); ?>





<?php

include_once('cabecera.php');
include_once('menu_residente.php');
include_once('modelo/m_pagos.php');

$pre= new m_pagos();
$obj= $pre->leer_pago_residente($_SESSION['id_persona']);
if($obj===FALSE){
     ?>
<article class="main4"> 
   <h1 id="focus">Pagos</h1><br>
   <h10>No existen registros en la base de datos.</h10><br>
<?php
}
else
{
?>
<article class="main4">
    <h1 id="focus">Mis pagos</h1><br>
        
<table class="table table-hover border border-success">
<thead>
	<tr>
		<th scope="col"># Cuota</th>
                <th scope="col">Fecha pago</th>
		<th scope="col">Banco emisor</th>
		<th scope="col">Referencia</th>
                <th scope="col">Monto</th>
                <th scope="col">Estado</th>
	</tr>
</thead>
<tbody>
<?php
foreach ($obj as $column => $value) {
?>
<tr>
	<td><?php echo $value['id_gasto']; ?></td>
        <td><?php echo $value['fecha_pago']; ?></td>
        <td><?php echo $value['banco_emisor']; ?></td>
	<td><?php echo $value['referencia']; ?></td>
        <td><?php echo $value['monto_pago']; ?></td>
        <td><?php echo $value['estado_pago'];?></td>	
</tr>
<?php
}
}
?>
</tbody>
</table>
    <a class="btn btn-success" href="registro_pagos.php">Agregar</a><br><br>
</article>
<?php  
  include("piedepagina.php");
?>
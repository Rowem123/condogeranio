<?php  
include("cabecera.php");
include("menu.php");
include("modelo/m_gastos.php");
include("modelo/m_usuarios.php");
//<b>N° de Residente: </b><input type="number" required name="id_persona" value="<?php $x=new m_usuarios(); $a= $x ->leer_usuario_idp($_SESSION['cedula']); echo $_SESSION['cedula'];?>"><br>
?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Nuevo pago</h1><br>
  <form action="controlador/c_pagos.php" method="POST">
 
  <b>N° de Gasto: </b><input type="number" required name="id_gasto" value="<?php $acumulador=0; $x=new m_gastos(); $a= $x ->leer_gasto_id(); for($i = 0; $i < count($a); $i++) { $acumulador++;} echo $acumulador;?>"><br>
  <b>Banco emisor: </b><input type="text" required name="banco_emisor" value="<?php if (isset($_POST['banco_emisor'])) {echo $_POST['banco_emisor'];}?>"><br>
  <b>Referencia: </b><input type="text" required name="referencia" value="<?php if (isset($_POST['referencia'])) {echo $_POST['referencia'];}?>"><br>
  <b>Monto (Bs): </b><input type="number" required name="monto" value="<?php if (isset($_POST['monto'])) {echo $_POST['monto'];}?>"><br>
  <input class="btn" type="submit" name="accion" value="Registrar">
  </form>

  </article>
  
<?php  
include("piedepagina.php");
?>
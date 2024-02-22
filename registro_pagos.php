<?php  
include("cabecera.php");
include("menu.php");
include("modelo/m_gastos.php");
include("modelo/m_usuarios.php");
?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Nuevo pago</h1><br>
  <form action="controlador/c_pagos.php" method="POST">
      <div class="w-50 mx-auto">
          <label class="form-label"><b># Cuota</b></label>
          <input class="form-control border-success" type="number" required name="id_gasto" value="<?php $acumulador=0; $x=new m_gastos(); $a= $x ->leer_gasto_id(); for($i = 0; $i < count($a); $i++) { $acumulador++;} echo $acumulador;?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Fecha</b></label>
          <input class="form-control border-success" type="date" required name="fecha_pago" value="<?php if (isset($_POST['fecha_pago'])) {echo $_POST['fecha_pago'];}?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Banco emisor</b></label>
          <input class="form-control border-success" type="text" required name="banco_emisor" value="<?php if (isset($_POST['banco_emisor'])) {echo $_POST['banco_emisor'];}?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Referencia</b></label>
          <input class="form-control border-success" type="text" required name="referencia" value="<?php if (isset($_POST['referencia'])) {echo $_POST['referencia'];}?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Monto (Bs)</b></label>
          <input class="form-control border-success" type="float" required name="monto_pago" value="<?php if (isset($_POST['monto'])) {echo $_POST['monto'];}?>">
      </div><br>
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="estado_pago" value="Por confirmar">
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Registrar">
      </div>
  </form>

  </article>
  
<?php  
include("piedepagina.php");
?>
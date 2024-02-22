<?php  
include("cabecera.php");
include("menu.php");
include("modelo/m_gastos.php");
?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Nueva cuota</h1><br>
  <form action="controlador/c_gastos.php" method="POST">
      <div class="w-50 mx-auto">
          <label class="form-label"><b>#</b></label>
          <input class="form-control border-success" readonly type="number" required name="id_gasto" value="<?php $acumulador=0; $x=new m_gastos(); $a= $x ->leer_gasto_id(); for($i = 0; $i <= count($a); $i++) { $acumulador++;} echo $acumulador;?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Fecha inicio</b></label>
          <input class="form-control border-success" type="date" required name="fecha_inicio" value="<?php if (isset($_POST['fecha_inicio'])) {echo $_POST['fecha_inicio'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Fecha corte</b></label>
          <input class="form-control border-success" type="date" required name="fecha_corte" value="<?php if (isset($_POST['fecha_corte'])) {echo $_POST['fecha_corte'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Precio dolar</b></label>
          <input class="form-control border-success" type="float" required name="precio_dolar" value="<?php if (isset($_POST['precio_dolar'])) {echo $_POST['precio_dolar'];}?>"><br>
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Añadir">
      </div>
  </form>

  </article>
  
<?php  
include("piedepagina.php");
?>
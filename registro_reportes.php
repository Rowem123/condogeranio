<?php  
include("cabecera.php");
include("menu.php");
include('modelo/m_reportes.php');
?>
  <!--======================Texto del main==========================-->
  <article class="main">
      <h1><b>Nuevo reporte</b></h1><br>
  <form action="generar_reporte.php" method="POST">
     <div class="w-50 mx-auto">
          <label class="form-label"><b># Cuota</b></label>
          <input class="form-control border-success" type="text" required name="id_gasto" value="<?php if (isset($_POST['asunto'])) {echo $_POST['asunto'];}?>"><br>
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Generar">
      </div>
  </form>

  </article>
  
<?php
include("menu.php");
include("piedepagina.php");
?>
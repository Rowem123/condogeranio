<?php  
  include("cabecera.php");
  include("menu_residente.php");
  include("modelo/m_personas.php");
$modificar=new m_personas();
$mod= $modificar->leer_persona_e($_SESSION['id_persona']);

?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Actualizar datos - Perfil</h1><br>
  <form action="controlador/c_personas.php" method="POST">
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_persona_n" value="<?php echo $mod['id_persona'];?>">
          <input class="form-control border-success" type="hidden" required name="id_persona" value="<?php echo $mod['id_persona'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Nombres</b></label>
          <input class="form-control border-success" type="text" required name="nombres" value="<?php echo $mod['nombres'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Apellidos</b></label>
          <input class="form-control border-success" type="text" required name="apellidos" value="<?php echo $mod['apellidos'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Cedula</b></label>
          <input class="form-control border-success" type="text" required name="cedula" value="<?php echo $mod['cedula'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Telefono</b></label>
          <input class="form-control border-success" type="number" required name="telefono" value="<?php echo $mod['telefono'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Correo electronico</b></label>
          <input class="form-control border-success" type="email" required name="correo_electronico" value="<?php echo $mod['correo_electronico'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="casa" value="<?php echo $mod['casa'];?>">
      </div><br>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Finalizar">
      </div>
  </form>
 </article>
<?php 
include("piedepagina.php");
?>
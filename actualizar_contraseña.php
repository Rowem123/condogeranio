<?php  
  include("cabecera.php");
  include("menu.php");
  include("modelo/m_usuarios.php");
$modificar=new m_usuarios();
$mod= $modificar->leer_usuario_e3($_SESSION['id_persona']);

?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Actualizar contraseña - Perfil</h1><br>
  <form action="controlador/c_usuarios.php" method="POST">
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_persona" value="<?php echo $mod['id_persona'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Nueva contraseña</b></label>
          <input class="form-control border-success" type="text" required name="clave">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Repetir nueva contraseña</b></label>
          <input class="form-control border-success" type="text" required name="c_clave">
      </div><br>
      <div class="d-grid gap-1 col-4 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Actualizar contraseña">
      </div>
  </form>
 </article>
<?php 
include("piedepagina.php");
?>
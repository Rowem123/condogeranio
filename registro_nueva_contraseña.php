<?php  
  include("cabeza.php");
  include("modelo/m_usuarios.php");
$modificar=new m_usuarios();
$mod= $modificar->leer_usuario_e2($_REQUEST['id']);

?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Nueva contraseña</h1><br>
    <form action="controlador/c_usuarios.php" method="POST">
        <input type="hidden" required name="id_usuario" value="<?php echo $mod['id_usuario'];?>"><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>Nueva contraseña</b></label>
          <input class="form-control border-success" type="text" required name="clave"><br>
        </div>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>Repetir contraseña</b></label>
          <input class="form-control border-success" type="text" required name="c_clave"><br>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto">
            <input class="btn btn-success" type="submit" name="accion" value="Finalizar">
        </div>
    </form>
  </article>
<?php
      if (isset($_REQUEST['id']))
      {
        $id= $_REQUEST['id'];
        if($id==0)
        {
            echo "<br><h3>Los valores de contraseña y repetir contraseña no coinciden</h3>";
        }
      } 
include("piedepagina.php");
?>
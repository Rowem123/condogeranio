<?php  
  include("cabeza.php");
  include("modelo/m_usuarios.php");

?>
  <!--======================Texto del main==========================-->
  <article class="main4">   
        <h1>Recuperación de contraseña - Primer paso</h1><br>
    <form action="comprobar_preguntas.php" method="POST">
    <div class="w-50 mx-auto">
          <label class="form-label"><b>Ingrese su usuario</b></label>
          <input class="form-control border-success" type="text" required name="usuario"><br>
      </div>
    <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Comprobar">
      </div>
    </form>
  </article>
<?php 
include("piedepagina.php");
?>
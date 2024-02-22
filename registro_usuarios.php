<?php  
include("cabecera.php");
include("menu.php");
include('modelo/m_usuarios.php');
?>
  <!--======================Texto del main==========================-->
  <article class="main">
      <h1><b>Nuevo usuario</b></h1><br>
  <form action="controlador/c_usuarios.php" method="POST">
     <div class="w-50 mx-auto">
          <label class="form-label"><b>#</b></label>
          <input class="form-control border-success" type="number" required name="id_usuario" value="<?php if (isset($_POST['id_usuario'])) {echo $_POST['id_usuario'];}?>"><br>
      </div>
     <div class="w-50 mx-auto">
          <label class="form-label"><b>Tipo de usuario</b></label>
          <input class="form-control border-success" type="number" required name="tipo_usuario" value="<?php if (isset($_POST['tipo_usuario'])) {echo $_POST['tipo_usuario'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b># Perfil</b></label>
          <input class="form-control border-success" type="number" required name="id_persona" value="<?php if (isset($_POST['id_persona'])) {echo $_POST['id_persona'];}?>"><br>
      </div> 
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Contraseña</b></label>
          <input class="form-control border-success" type="password" required name="clave" value="<?php if (isset($_POST['clave'])) {echo $_POST['clave'];}?>"><br>
      </div>
      <br>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Registrar">
      </div>
  </form> 
  </article>
  
<?php
include("menu.php");
include("piedepagina.php");
?>
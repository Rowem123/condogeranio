<?php  
include("cabecera.php");
include("menu.php");
include('modelo/m_personas.php');
?>
  <!--======================Texto del main==========================-->
  <article class="main">
      <h1><b>Nuevo residente</b></h1><br>
  <form action="controlador/c_personas.php" method="POST">
     <div class="w-50 mx-auto">
          <label class="form-label"><b>#</b></label>
          <input class="form-control border-success" type="number" required name="id_persona" value="<?php if (isset($_POST['id_persona'])) {echo $_POST['id_persona'];}?>"><br>
     </div>
     <div class="w-50 mx-auto">
          <label class="form-label"><b>Nombres</b></label>
          <input class="form-control border-success" type="text" required name="nombres" value="<?php if (isset($_POST['nombres'])) {echo $_POST['nombres'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Apellidos</b></label>
          <input class="form-control border-success" type="text" required name="apellidos" value="<?php if (isset($_POST['cedula'])) {echo $_POST['cedula'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Cedula</b></label>
          <input class="form-control border-success" type="text" required name="cedula" value="<?php if (isset($_POST['apellidos'])) {echo $_POST['apellidos'];}?>"><br>
      </div>  
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Telefono</b></label>
          <input class="form-control border-success" type="text" required name="telefono" value="<?php if (isset($_POST['telefono'])) {echo $_POST['telefono'];}?>"><br>
      </div> 
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Correo electronico</b></label>
          <input class="form-control border-success" type="email" required name="correo_electronico" value="<?php if (isset($_POST['correo_electronico'])) {echo $_POST['correo_electronico'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Casa</b></label>
          <input class="form-control border-success" type="number" required name="casa" value="<?php if (isset($_POST['casa'])) {echo $_POST['casa'];}?>"><br>
      </div>
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="estado" value="Solvente"><br>
        </div>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Registrar">
      </div>
  </form>
    
    
    
    
    
  </article>
  
<?php
include("menu.php");
include("piedepagina.php");
?>
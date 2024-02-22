<?php  
  include("cabecera.php");
  include("menu.php");
  include("modelo/m_reclamos.php");
$modificar=new m_reclamos();
$mod= $modificar->leer_reclamo_e($_REQUEST['id']);

?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Ver detalles - Reclamo</h1><br>
    <?php if($mod['respuesta']!==""){ ?>
  <form action="reclamos.php" method="POST">
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_reclamo" value="<?php echo $mod['id_reclamo'];?>">
      </div>
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_persona" value="<?php echo $mod['id_persona'];?>">
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Asunto</b></label>
          <input class="form-control border-success" type="text" readonly name="asunto" value="<?php echo $mod['asunto'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Contenido</b></label>
          <textarea class="form-control border-success" type="text" rows="18" readonly name="contenido"><?php echo $mod['contenido'];?></textarea>
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Respuesta </b><td><a href="registro_actualizar_respuesta.php?id=<?php echo $mod['id_reclamo']; ?>&accion=modificar"><img src="images/modificar.png" alt="modificarr" width="20" height="20"></a></td></label>
          <textarea class="form-control border-success" type="text" rows="15" required name="respuesta"><?php echo $mod['respuesta'];?></textarea>
      </div><br>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Volver">
      </div>
      <?php } else { ?>
      
        <form action="registro_respuesta_reclamo.php" method="POST">
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_reclamo" value="<?php echo $mod['id_reclamo'];?>">
      </div>
      <div class="w-50 mx-auto">
          <input class="form-control border-success" type="hidden" required name="id_persona" value="<?php echo $mod['id_persona'];?>">
      </div>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Asunto</b></label>
          <input class="form-control border-success" type="text" readonly name="asunto" value="<?php echo $mod['asunto'];?>">
      </div><br>
      <div class="w-50 mx-auto">
          <label class="form-label"><b>Contenido</b></label>
          <textarea class="form-control border-success" type="text" rows="18" readonly name="contenido"><?php echo $mod['contenido'];?></textarea>
      </div><br>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Responder">
      </div>
      <?php } ?>
  </form>
 </article>
<?php 
include("piedepagina.php");
?>
<?php  
include("cabecera.php");
include("menu.php");
include('modelo/m_casas.php');
?>
  <!--======================Texto del main==========================-->
  <article class="main">
    <h1>Nueva vivienda</h1><br>
    <form action="controlador/c_casas.php" method="POST">
        <div class="w-50 mx-auto">
          <label class="form-label"><b>#</b></label>
          <input class="form-control border-success" type="number" required name="id_casa" value="<?php $acumulador=0; $x=new m_casas(); $a= $x ->leer_casa_id(); for($i = 0; $i <= count($a); $i++) { $acumulador++;} echo $acumulador;?>">
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b># Residente</b></label>
          <input class="form-control border-success" type="number" required name="id_persona" value="<?php if (isset($_POST['id_persona'])) {echo $_POST['id_persona'];}?>">
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>Estado</b></label>
            <select name="estado_casa" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="0">En venta</option>
                <option value="1">En alquiler</option>
            </select>
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b># Habitaciones</b></label>
          <input class="form-control border-success" type="number" required name="habitaciones" value="<?php if (isset($_POST['habitaciones'])) {echo $_POST['habitaciones'];}?>"><br>
        </div>
        <div class="w-50 mx-auto">
          <label class="form-label"><b># Baños</b></label>
          <input class="form-control border-success" type="number" required name="baños" value="<?php if (isset($_POST['baños'])) {echo $_POST['baños'];}?>"><br>
        </div>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>¿Cocina?</b></label>
          <select name="cocina" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>¿Sala de estar?</b></label>
          <select name="sala_estar" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>¿Comedor?</b></label>
          <select name="comedor" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>¿Patio delantero?</b></label>
          <select name="patio_delantero" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div><br>
        <div class="w-50 mx-auto">
          <label class="form-label"><b>¿Patio trasero?</b></label>
          <select name="patio_trasero" class="form-select border-success" aria-label="Default select example">
                <option selected>Seleccione por favor</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div><br>
        <div class="d-grid gap-2 col-2 mx-auto">
            <input class="btn btn-success" type="submit" name="accion" value="Registrar">
        </div>
  </form>
  </article>
  
<?php  
include("piedepagina.php");
?>
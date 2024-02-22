<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condominio Geranio - Login</title>

    <link rel="shortcut icon" href="images/Logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>  
  <link href="css/styles2.css" rel="stylesheet" type="text/css"/>

  
</head>
<body class="grid-containerindex">
 
  <article class="main2">
    <main class="form-login"><br>
          <img 
      src="images/Logo.png"
      width="100"
      height="100"
      align="center">
      <h5>Geranio</h5>

      <br>

    <form action="controlador/c_usuarios.php" method="POST">
    <div class="form-login">
        <div class="w-25 mx-auto">
          <label class="form-label"><h3><b>Usuario</b></h3></label>
          <input class="form-control border-success" type="text" required name="usuario" placeholder=" Introduzca su usuario"><br>
      </div>
        <div class="w-25 mx-auto">
          <label class="form-label"><h3><b>Contraseña</b></h3></label>
          <input class="form-control border-success" type="password" required name="clave" placeholder=" Introduzca su contraseña">
          <h9><a class="b" href="comprobar_cedula.php"">¿Olvidó su contraseña?</a></h9>
        </div><br>
      <div class="d-grid gap-2 col-2 mx-auto">
      <input class="btn btn-success" type="submit" name="accion" value="Ingresar">
      </div>
      <?php
      if (isset($_REQUEST['id']))
      {
        $id= $_REQUEST['id'];
        if($id===0)
        {
            echo "<br><h3>Usuario o clave incorrectos</h3>";
        }
        elseif($id===1)
        {
            echo "<br><h3>Lo siento, primero debe iniciar una sesión</h3>";
        }
      }
      ?>
    </div>

    </form>
    </main>
  </article>
  
</body>
</html>
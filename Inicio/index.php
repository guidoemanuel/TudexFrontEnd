<!DOCTYPE html>
<html>
      <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="description" content="">
      <meta name="author" content="Avellaneda Alejandro">
      <title><?php echo "titulo" ?></title>
      <link href="css/index.css" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="extras/imagenes/fav.png">
      <?php  
      $aleatorio = rand(0,18);
      if ($aleatorio==0) {
        echo '<style type="text/css">body{background:#D22E2E;</style>';
      } else
      if ($aleatorio==1) {
        echo '<style type="text/css">body{background:#C1175A;</style>';
      } else
      if ($aleatorio==2) {
        echo '<style type="text/css">body{background:#E54918;</style>';
      } else
      if ($aleatorio==3) {
        echo '<style type="text/css">body{background:#05BB14;</style>';
      } else
      if ($aleatorio==4) {
        echo '<style type="text/css">body{background:#2F3E9E;</style>';
      } else

      if ($aleatorio==5) {
        echo '<style type="text/css">body{background:#1875D1;</style>';
      } else

      if ($aleatorio==6) {
        echo '<style type="text/css">body{background:#0187D0;</style>';
      } else

      if ($aleatorio==7) {
        echo '<style type="text/css">body{background:#0096A6;</style>';
      } else

      if ($aleatorio==8) {
        echo '<style type="text/css">body{background:#00786A;</style>';
      } else

      if ($aleatorio==9) {
        echo '<style type="text/css">body{background:#A9A9A9;</style>';
      } else
      if ($aleatorio==10) {
        echo '<style type="text/css">body{background:#E54918;</style>';
      } else

      if ($aleatorio==11) {
        echo '<style type="text/css">body{background:#AEB32A;</style>';
      } else

      if ($aleatorio==12) {
        echo '<style type="text/css">body{background:#FABF2C;</style>';
      } else

      if ($aleatorio==13) {
        echo '<style type="text/css">body{background:#FBC02C;</style>';
      } else

      if ($aleatorio==14) {
        echo '<style type="text/css">body{background:#FFA000;</style>';
      } else

      if ($aleatorio==15) {
        echo '<style type="text/css">body{background:#F57C00;</style>';
      } else

      if ($aleatorio==16) {
        echo '<style type="text/css">body{background:#F47B00;</style>';
      } else

      if ($aleatorio==17) {
        echo '<style type="text/css">body{background:#E54918;</style>';
      } else
      if ($aleatorio==18) {
        echo '<style type="text/css">body{background:#FFF;</style>';
      }?> 
      </head>
      <body>
        <center>
          <br>
          <br>
          <br>
          <br>
          <div class="icon"><img src="imagenes/logo_2_128x128.png"></div>
          <br>
          <h1>Tudex</h1>
          <br>
          <br>
          <br>
          <form name="usuarios" method="post" action="../">
            <input type="text" name="nombre" placeholder="Usuario" class=" border2">
            <input type="password" name="clave" placeholder="Contraseña" class="border2">
            <br>
            <br>
            <input type="submit" class="send" name="login" value="Iniciar">
          </form>  
          <br>
          <h2><a href="registrar.php">Registrate</a> </h2>
        </center>
      </body>
      <footer>
      <?php include 'version.php';  ?>
          <br>
      </footer>
</html>


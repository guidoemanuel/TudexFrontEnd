<?php
$host= "http://localhost:8080/";
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">

	<style type="text/css">
*{	font-family: "Open Sans", Arial, Helvetica, Sans-serif;
	margin: 0px;
	padding: 0px;
	border: 0px;
}

nav {

  box-sizing: border-box;
  display: block;
  height: 10%;
  width: 50px;
  -webkit-user-select: none;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  height: 54px;
  padding: 0;
  position: relative;
}

.icon {
  background-color:rgba(0,0,0,0.50);
  <?php  
  //$col = rand(0,255);
 // $col1 = rand(0,255);
 // $col2 = rand(0,255);
 // echo  '.tooltip {background-color:rgba('.$col.','.$col1.','.$col2.',0.8);';
 ?>
  display: block;
  height: 100%;
  opacity: .6;
  transition: background-color 0.3s, opacity 0.3s, -webkit-mask-size 0.3s;
  -webkit-mask-position: 50% 50%;
  -webkit-mask-repeat: no-repeat;
  -webkit-mask-size: 23px;
 
}







li:hover .icon,
li.selected .icon {
  opacity: 1;
}

.tooltip {
  background-color: rgba(0,0,0,0.50);
  /*border-radius: 10px;*/
  box-shadow: 0 0 2px rgba(0, 0, 0, .5);
  height: 26px;
  left: 51px;
  line-height: 26px;
  opacity: .0;
  padding: 0 8px;
  pointer-events: none;
  position: absolute;
  top: 28px;
  transition: background-color 1s, opacity 0.2s;
  white-space: nowrap;
  z-index: 2;
  color: #fff;
  width: auto;
}

li:hover .tooltip {
  opacity: 1;
}

.imagen{
    margin-top: 9px;
    margin-left: 9px;
    margin-bottom: 9px;
    margin-right: 9px;
 }
.navigationbar{
  position: fixed;
}


</style>
</head>
<body>

  <?php  

  #$col = rand(0,255);
  #$col1 = rand(0,255);
 #$col2 = rand(0,255);

  $col = 0;
  $col1 = 0;
  $col2 = 0;
  echo  '<style type="text/css">.tooltip  {background-color:rgba('.$col.','.$col1.','.$col2.',0.8);}</style>';
  echo  '<style type="text/css">.icon {background-color:rgba('.$col.','.$col1.','.$col2.',1);}</style>';
  ?>
<body>
	<nav id="navigationbar" class="navigationbar">
		<ul>
			<li>
				<span class="icon">
					<img class="imagen" src="<?php echo $host; ?>menu/teheme/1.png"></span>
				<span class="tooltip">Tudex</span>
			</li>

      <li>
        <span class="icon">
          <img class="imagen" src="<?php echo $host; ?>menu/teheme/2.png"></span>
        <span class="tooltip">Buscar</span>
      </li>

      <li>
        <span class="icon">
          <img class="imagen" src="<?php echo $host; ?>menu/teheme/3.png"></span>
        <span class="tooltip">Listas</span>
      </li>

      <li>
        <span class="icon">
          <img class="imagen" src="<?php echo $host; ?>menu/teheme/4.png"></span>
        <span class="tooltip">post</span>
      </li>
      <li>
          <span class="icon">
            <img class="imagen" src="<?php echo $host; ?>menu/teheme/5.png"></span>
          <span class="tooltip">Spotify</span>
      </li>
      <a href="  <?php echo $host; ?>configuraciones/">
	      <li>
	          <span class="icon">
	            <img class="imagen" src="<?php echo $host; ?>menu/teheme/1.png"></span>
	          <span class="tooltip">Configuraciones</span>
	      </li>
      </a>
      <a href="<?php echo $host; ?>">
	      <li>
	        <span class="icon">
	          <img class="imagen" src="  <?php echo $host; ?>menu/teheme/6.png"></span>
	        <span class="tooltip">Salir</span>
	      </li>
    	</a>
	</nav>


</body>  
	

</html>
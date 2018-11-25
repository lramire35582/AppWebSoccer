
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Inicio Sesión</title>




  <!-- <link href="css/font-awesome.min1.css" rel="stylesheet"> -->
  <link href="css/lightbox1.css" rel="stylesheet">
  <link href="css/main1.css" rel="stylesheet">
  <link id="css-preset" href="css/presetss/preset1.css" rel="stylesheet">
  <link href="css/responsive1.css" rel="stylesheet">
  <link href="css/estilin.css" rel="stylesheet">
  <link href="css/ajustar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/stylee.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
    <div class="main-nav">
       <!--   <div class="navbar-header">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.jsp" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><i class="fa fa-home"></i> Inicio</a></li>
          </ul>
        </div>-->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
         <li class="scroll"><h4 class="estilo" style=" font-family: Arial, Rounded MT Bold, sans-serif; font-size: 24px; ">
		 SOCCER CHAMPIONSHIPS
		 </h4></li>
          </ul>
        </div>
    </div>
  <br>
  <br>
  <br>
  <br>
    <div  class="container">
      <div  class="text-center our-services">
        <br>
        <br>
   		<div class="">
    	<form action="validarsesion.php"  name="iniciosesion" method="post" class="form-signin">
		<?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
      	<h2 class="form-signin-heading" style="color:#009900">Iniciar sesi&oacute;n</h2>
      	<input type="text" class="form-control" name="usuario"  placeholder="&#128272; Usuario" required autofocus />
      	<input type="password" class="form-control" name="clave" placeholder="&#128272; Contrase&ntilde;a" required />
      	<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    	</form>
  		</div>
	</div>
</div>
  <script type="text/javascript" src="js/jquery1.js"></script>

<script type="text/javascript" src="js/bootstrap.min1.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min1.js"></script>
  <script type="text/javascript" src="js/wow.min1.js"></script>
  <script type="text/javascript" src="js/mousescroll1.js"></script>
  <script type="text/javascript" src="js/smoothscroll1.js"></script>
  <script type="text/javascript" src="js/jquery.countTo1.js"></script>
  <script type="text/javascript" src="js/lightbox.min1.js"></script>
  <script type="text/javascript" src="js/main1.js"></script>


</body>
</html>

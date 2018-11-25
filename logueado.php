<?php
$cookie_name = $user->getNombre();
$cookie_value = $user->getNombre();
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html >
<head>
<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

?>
<?php
if(!isset($_COOKIE[$cookie_name])) {
   // echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
   // echo "Cookie '" . $cookie_name . "' is set!<br>";
   // echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


<title>PAGINA PRINCIPAL</title>
<link href="css/estilomenu.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
    function contador()
    {
        $archivo = "contador.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }
	$visitante=contador();
	
?>
<body>
<nav class="menu" style="text-align:center">
		
		<ul class="nav" style="text-align:center">
		   <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		    <li style="text-align:center"><a href="index.php." id="menu">INICIO</a></li> 
			<li><a href="Torneo.php" id="menu" >TORNEO</a></li>
		    <li><a href="Amistoso.php" name="menu" id="menu">AMISTOSO</a></li>
		    <li><a href="mapa.php"  id="menu">MAPA</a></li>
			 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
			 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li><a><?php echo "Bienvenido  ".$user->getNombre();  ?></a></li>
		 <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
		</ul>
</nav>

<br/>
<br/>
<div style="text-align:center; font-family:Calibri; font-size:x-large">
<h1>SOCCER CHAMPIONSHIPS</h1>
</div>


<p><img  src="imagenes/panelfutbol.jpg"   alt="futbol" style="width:auto; height:383px" /></p>



<?php echo "Eres el visitante numero:".$visitante;?>
</body>
</html>

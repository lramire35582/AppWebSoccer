<?php
$cookie_name = $_GET['usuario'];
$cookie_value = $_GET['usuario'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRO EXITOSO</title>



<h1>SU REGISTRO FUE EXITOSO</h1>
<br/>
<br/>

<label> SU USUARIO es: <?PHP echo $_GET['usuario']; ?></label>

<br/>
<br/>

<a href="file:///F|/xampp/htdocs/SoccerChampionships - copia3214592501/index.php" >INICIO</a>

</body>
</html>

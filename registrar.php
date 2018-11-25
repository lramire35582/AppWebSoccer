<?php 
include("conexion.php");

////$cc=$_POST['documento'];
//$nombreequipo=$_POST['nombreequipo'];
//$localidad=$_POST['localidad'];
//$estadio=$_POST['estadio'];
//$usuario=$_POST['usuario'];
//$pass=$_POST['pass'];

$sql = "INSERT INTO equipo (id,nombreEquipo,localidad,idestadio) VALUES ('".$_POST['documento']."','".$_POST['nombreequipo']."','".$_POST['localidad']."','".$_POST['estadio']."')";


if (mysqli_query($conn, $sql)) {
//echo("1");
      //echo "se ha creado su registro satisfactoriamente";
} else {
     echo("0");
	 // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//$md5pass = md5($pass);
$sqluser = "INSERT INTO usuarios (usuario,pass) VALUES ('".$_POST['usuario']."','".md5($_POST['pass'])."')";

if (mysqli_query($conn, $sqluser)) {
echo("1");
     //echo "se ha creado su registro satisfactoriamente";
	  
} else {
      echo("0");//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();




?>
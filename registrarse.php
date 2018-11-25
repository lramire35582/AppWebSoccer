<!DOCTYPE html >
<head>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<title>PAGINA PRINCIPAL</title>

	
<link href="css/estilomenu.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilodatospersonales.css" rel="stylesheet" >
<script type="text/javascript" >
function validaForm(){
    // Campos de texto
    if($("#documento").val() == ""){
        alert("No de documento Campo vacio por favor solo digite numeros");
        $("#documento").focus();
		$("#documento").style="border:thin solid red";       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }


 if($("#nombreequipo").val() == ""){
        alert(" nombre equipo Campo vacio por favor diligencie el campo");
        $("#nombreequipo").focus();
		$("#nombreequipo").style="border:thin solid red";       
        return false;
    }

if($("#localidad").val() == ""){
        alert(" nombre equipo Campo vacio por favor diligencie el campo");
        $("#localidad").focus();
		$("#localidad").style="border:thin solid red";       
        return false;
    }

if(!$("#estadio").val().trim() === ''){
        alert("Por favor no ha seleccionado un Estadio por favor seleccione un opcion");
		$("#estadio").style="border:thin solid red";
        return false;
    }

if($("#usuario").val() == ""){
        alert(" nombre equipo Campo vacio por favor diligencie el campo");
        $("#usuario").focus();
		$("#usuario").style="border:thin solid red";       
        return false;
    }
if($("#pass").val() == ""){
        alert(" nombre equipo Campo vacio por favor diligencie el campo");
        $("#pass").focus();
		$("#pass").style="border:thin solid red";       
        return false;
    }

    
    

    return true; // Si todo está correcto
}



$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("registrar.php",$("#formdata").serialize(),function(res){
                $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");    
                }
            });
        }
    });    
});
	



</script>

<?php
include("conexion.php");

?>
</head>

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
		    <li style="text-align:center"><a href="index.php" id="menu">INICIO</a></li> 
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
		 <li><a href="iniciosesion.php"  id="menu">INICIAR SESIÓN</a></li>
		 <li><a href="registrarse.php"  id="menu">REGISTRESE</a></li>
		  
		</ul>
</nav>

<br/>
<br/>
<div style="text-align:center;font-family:Calibri;"  >
<h1 style="font-size:60px">REGISTRESE <img src="imagenes/balon.jpg" align="texttop" alt="balón" >
</h1>
</div>

<br/>
<br/>
<p style="text-align:center">*por favor diligencie los datos del formulario*</p>
<br/>
<br/>
<article id="personal">
<div id="formulario">
            <form method="post" id="formdata">
			<fieldset class="scheduler-border">
  <legend class="scheduler-border" >
	<label>DATOS DEL EQUIPO</label>
  </legend>
  
  <label> No de documento   </label>
  <input type="text" value="" id="documento" name="documento" required="required" >
  <br/>
  <br/>
  <label> Nombre del equipo</label>
  <input maxlength="200" type="text" value=""  id="nombreequipo" name="nombreequipo" required="required">
  <br/>
  <br/>
  <label>localidad</label>
  <input maxlength="200" type="text" value=""  id="localidad" name="localidad" required="required">
   <br/>
   <br/>
   
   <?php 
   echo "<label>Estadio</label>";
   echo "<select name=estadio id=estadio required=required >";
   
   $result = mysqli_query($conn, "SELECT id,nombreEstadio FROM estadios");
mysqli_data_seek ($result, 0);
while($extraido= mysqli_fetch_array($result)){
echo "<option value=".$extraido['id']."     >".$extraido['nombreEstadio']; 

}
echo "</select>";
?>


  <br/>
  <br/> 
  <label> Usuario</label> 
  <input maxlength="200" type="text" value=""  id="usuario" name="usuario" required="required" > 
  <br/> 
   <br/> 
   <label> Contrase&ntilde;a</label> 
   <input maxlength="200" type="password" value=""  id="pass" name="pass" required="required" > 
  <br/> 
  <br/>
 <input type="button" id="botonenviar" value="Registrar">
 
  
</fieldset>
</form>

</div>
        <div id="exito" style="display:none">
            Sus datos han sido recibidos con éxito.
        </div>
        <div id="fracaso" style="display:none">
            Se ha producido un error durante el envío de datos.
        </div>
 </article>








</div>

</body>
</html>

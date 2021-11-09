<?php 


$conex = mysqli_connect("localhost","root","","estudiantes"); 

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1) {

	    $nombre = trim($_POST['nombre']);
		$str= implode(',', $_POST['respuesta']);
		$consulta = "INSERT INTO estudiantes(NOMBRE, RESPUESTAS) VALUES ('$nombre','$str')";

	    $resultado = mysqli_query($conex,$consulta);
	    
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Entregado satisfactoriamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    
	} else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
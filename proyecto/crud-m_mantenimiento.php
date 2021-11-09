<?php 
$conex = mysqli_connect("localhost","root","","estudiantes"); 

if (isset($_POST['insertar'])) {
    $data_size = strlen($_POST['numero'])+ strlen($_POST['pregunta']) + strlen($_POST['a']) + strlen($_POST['b']) + strlen($_POST['c']);
    if ($data_size >= 1) {
	    $numero = trim($_POST['numero']);
	    $pregunta = trim($_POST['pregunta']);
	    $a = trim($_POST['a']);
	    $b = trim($_POST['b']);
        $c = trim($_POST['c']);

		$consulta = "INSERT INTO preguntas_v (NUMERO, PREGUNTA, A, B, C) VALUES ('$numero', '$pregunta', '$a', '$b', '$c')";

	    $resultado = mysqli_query($conex,$consulta);
	    
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Pregunta ingresada satisfactoriamente!</h3>
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

if (isset($_POST['actualizar'])) { //UPDATE 
	$data_size = strlen($_POST['pregunta']) + strlen($_POST['a']) + strlen($_POST['b']) + strlen($_POST['c']);
    if (strlen($_POST['numero'])>= 1 && $data_size >= 1) {
	    $numero = trim($_POST['numero']);
	    $pregunta = trim($_POST['pregunta']);
	    $a = trim($_POST['a']);
	    $b = trim($_POST['b']);
        $c = trim($_POST['c']);

		$consulta = "UPDATE preguntas_v SET 
											PREGUNTA = '$pregunta',
											A = '$a',
											B = '$b',
											C = '$c' 
										WHERE 
											NUMERO LIKE $numero";

	    $resultado = mysqli_query($conex,$consulta);
	    
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Pregunta actualizada satisfactoriamente!</h3>
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

if (isset($_POST['eliminar'])) {
    if (strlen($_POST['numero_e'])>= 1) {
	    $numero = trim($_POST['numero_e']);

		$consulta = "DELETE FROM preguntas_v WHERE NUMERO LIKE $numero";

	    $resultado = mysqli_query($conex,$consulta);
	    
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Pregunta eliminada satisfactoriamente!</h3>
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
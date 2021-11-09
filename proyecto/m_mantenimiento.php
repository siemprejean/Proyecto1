<?php

$conex = mysqli_connect("localhost","root","","estudiantes"); 

?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="/GAELGOMEZPARCIAL1/estilo.css">
	<title>Panel de control de usuario general</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/0af84f18a6.js" crossorigin="anonymous"></script>

</head>
<body>
      <!--Contenido -->
    <br>
    <form method="post">
        <h2 class="title is-2 has-text-centered">Modulo de Mantenimiento Sitio de Encuesta</h2>
        <div class="columns is-multiline">
            <div class="column is-8">
                <br>
                <br>
                <table class="table is-hoverable" >
                    <tr>
                        <td><strong>Numero</strong></td>
                        <td><strong>Pregunta</strong></td>
                        <td><strong>A</strong></td>
                        <td><strong>B</strong></td>
                        <td><strong>C</strong></td>
                    </tr>
                            
                    <?php
                        $sql="SELECT * from preguntas_v";
                        $result=mysqli_query($conex,$sql);
                    ?>

                    <?php foreach($result as $mostrar){?>
                        <tr>
                        <td><?php echo $mostrar['NUMERO'] ?></td>
                            <td><?php echo $mostrar['PREGUNTA'] ?></td>
                            <td><?php echo $mostrar['A'] ?></td>
                            <td><?php echo $mostrar['B'] ?></td>
                            <td><?php echo $mostrar['C'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <?php 
                    include("registrar_bd.php");
                ?>    
            </div>

            <div class="column is-3">
                <br>
                <br>
                <div class="box has-background-dark">
                    <div class="title is-5 has-text-centered has-text-light">Insertar una Pregunta</div>
                        <div class="field">
                            <input class="input" name="numero" type="text" placeholder="Ingrese el Numero (opcional)">
                        </div>
                        <div class="field">
                            <input class="input" name="pregunta" type="text" placeholder="Ingrese la Preunta">
                        </div>
                        <div class="field">
                            <input class="input" name="a" type="text" placeholder="Ingrese la Respuesta A">
                        </div>
                        <div class="field">
                            <input class="input" name="b" type="text" placeholder="Ingrese la Respuesta B">
                        </div>
                        <div class="field">
                            <input class="input" name="c" type="text" placeholder="Ingrese la Respuesta C">
                        </div>                                      
                        <div class="buttons">
                            <button type="submit" name="insertar"  class="button is-success is-large is-fullwidth">Insertar</button>
                            <button type="submit" name="actualizar"  class="button is-warning is-large is-fullwidth">Actualizar</button>
                            
                        </div>  
                    </div>
                <div class="box has-background-dark">
                        <div class="title is-5 has-text-centered has-text-light">Eliminar una Pregunta</div>
                        <div class="field">
                            <input class="input" name="numero_e" type="text" placeholder="Ingrese el Numero a Eliminar">
                        </div>
                        <button type="submit" name="eliminar"  class="button is-danger is-large is-fullwidth">eliminar</button> 
                    </div>
                    <?php 
                            include("crud-m_mantenimiento.php");
                        ?>  
                </div>
            </div>
        </div>
    </form> 
    <a href="nav.html">Volver al Menu</a> 
</body>
</html>
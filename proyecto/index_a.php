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
            <div class="columns ">
                  <div class="column is-offset-one-quarter">
                        <h2 class="title is-2">Encuesta de Conocimiento General</h2>
                        <br>
                        <br>
                        <table class="table is-hoverable" >
                              <tr>
                                    <td><strong>Id</strong></td>
                                          <td><strong>Pregunta</strong></td>
                                          <td><strong>A</strong></td>
                                    <td><strong>B</strong></td>
                                    <td><strong>C</strong></td>
                              </tr>

                              <?php for($i = 1; $i <= 10; $i++){?>
                              <?php 
                                    $sql="SELECT * from preguntas_v ORDER BY RAND() LIMIT 10";
                                    $result=mysqli_query($conex,$sql);

                                    $mostrar=mysqli_fetch_array($result)
                              ?>
                                    <tr>
                                          <td><?php echo $mostrar['NUMERO'] ?></td>
                                          <td><?php echo $mostrar['PREGUNTA'] ?></td>
                                          <td>  <label class="checkbox">
                                                <input type="checkbox" name="respuesta[]" value="a">
                                                <?php echo $mostrar['A'] ?>
                                          </label></td>

                                          <td><label class="checkbox">
                                                <input type="checkbox" name="respuesta[]" value="b">
                                                <?php echo $mostrar['B'] ?>
                                          </label></td>

                                          <td><label class="checkbox">
                                                <input type="checkbox" name="respuesta[]" value="c">
                                                <?php echo $mostrar['C'] ?>
                                          </label></td>
                                    </tr>
                        <?php } ?>
                        </table>

                        <div class="columns">
                              <div class="column is-one-quarter">
                                    <input class="input" name="nombre" type="text" placeholder="Ingrese su nombre">
                              </div>
                        </div>

                        <button type="submit" name="register"  class="button is-success is-large">Entregar</button>
                        <?php 
                              include("registrar_bd.php");
                        ?>    
                  </div>
            </div>
      </form>

      <a href="nav.html">Volver al Menu</a> 
</body>
</html>
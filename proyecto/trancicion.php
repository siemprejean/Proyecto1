<html lang="en">
<head>
    <title>Modulo de reportes</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8 col-xl-6 text-center">
          <br>
        <h1>Modulo de reportes</h1>
        <br>

    <form name="FormEncuesta" method="post" action="trancicion.php" >
        Filtrar por:<select name="filtrar">
        <option value="id"selected >Total encuestados
        <option value="sexo">sexo
        <option value="edad">edad
        <option value="salario">salario
        <option value="provincia" >provincia
        </select>    
        <input type="submit" value="filtro" name="filtro">

    </form> 

    <?php
    require_once("class/datos.php");
    $obj_encuesta = new encuesta();

    if (array_key_exists('insertar', $_POST)){
        $opcion=$_REQUEST['opciones'];
        $edad=$_REQUEST['edad'];
        $salario=$_REQUEST['salario'];
        $provincia=$_REQUEST['provincia'];
        $insertar=$_REQUEST['insertar'];
        $encu1 = $obj_encuesta->insertar_dato_encuestados($opcion,$edad,$salario,$provincia);
        header('Location: index_a.php');

    }elseif(array_key_exists('filtro', $_POST)){
        $parametro= $_REQUEST['filtrar'];;
        if($parametro == "id"){
    

        $encu2 = $obj_encuesta->consultar_datos_encuestados();
        $nfilas= count($encu2); 
        print("<table>\n");
        

            print("<tr>\n");
            print("<th>Encuestados</th>\n");
            print("<th>Cantidad</th>\n");
            print("<th>porcentaje</th>\n");
            print("<th>Representacion Grafica </th>\n");
            print("</tr>\n");
     

            $porcentaje = round (($nfilas/$nfilas)*100,2);

            print("<tr>\n"); 
            print("<td Class='izquierda'>Total</td>\n");
            print("<td Class='derecha'>$nfilas</td>\n");
            print("<td Class='derecha'>$porcentaje%</td>\n");
            print("<td Class='izquierda' width='400'><img src='img/puntoamarillo.gif'height='10' width='".$porcentaje*4 ."'></td>\n");
            print("</tr>\n");

            print("</table>\n");
            print("<p> Numero total de Personas encuestadas: $nfilas </p>");

        }else{

            $datos_totales=0;
            $encu3 = $obj_encuesta->consultar_datos_encuestados_filtro($parametro);

                foreach ($encu3 as  $resultado) {

                    $datos_totales=$datos_totales+ $resultado['cantidad'];
                }

                    $nfilas= count($encu3);
                    if ($nfilas > 0) {
                        print("<table>\n");
                        print("<tr>\n");
                        print("<th  WIDTH='200px' align='center'>$parametro</th>\n");
                        print("<th WIDTH='100px' align='center'>cantidad</th>\n");
                        print("<th WIDTH='100px' align='center'>porcentaje</th>\n");
                        print("<th WIDTH='100px' align='center'>Representacion Grafica </th>\n");
                        print("</tr>\n");

                        foreach ($encu3 as $clave => $resultado) {
                            $porcentaje = round (($resultado['cantidad']/$datos_totales)*100,2);
                            print("<tr>\n"); 
                            print("<td WIDTH='200px'>".$resultado['filtro']."</td> \n");
                            print("<td WIDTH='100px' align='center'>".$resultado['cantidad']."</td>\n");
                            print("<td WIDTH='100px' Class='derecha' align='center'>$porcentaje%</td>\n");
                            print("<td WIDTH='100px' Class='izquierda' width='400'><img src='img/puntoamarillo.gif'height='10' width='".$porcentaje*4 ."'></td>\n");
                            print("</tr>\n");
                        }
                        print("</table>\n");
                    }
                    else{
                        print("No hay Datos");
                        }

            }

        }
?>
<br>
<a href="nav.html">Volver al Menu</a> 
      </div>
    </div>
  </div>
</section>
</body>
</html>

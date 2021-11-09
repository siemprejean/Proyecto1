<html lang="en">
<head>
    
    <title>Proyecto Encuesta</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Encuesta</h1>
    <form name="FormEncuesta" method="post" action="trancicion.php" >
    
    <ol> Selecione su sexo <br><br>
    <input type="radio" name="opciones" id="" value="Masculino" checked > Masculino <br>
    <input type="radio" name="opciones" id="" value="Femenino"> Femenino <br><br>
    </ol>

    Rango de edad:<select name="edad">
        <option value="18 a 25">18 a 25
        <option value="25 a 35">25 a 35
        <option value="35 a 50">35 a 50
        <option value="50 a 70">50 a 70
        <option value="70 en adelante">70 en adelante
        </select> 
    <br><br>

    Rango Salarial:<select name="salario">
        <option value="0 a 500">0 a 500
        <option value="500 a 700">500 a 700
        <option value="700 a 1000">700 a 1000
        <option value="1000 en adelante">1000 en adelante
        </select> 
    <br><br>
    <!--Edad      <input type="text" name="edad"><br><br>-->
    <!--Salario   <input type="text" name="salario"><br><br>-->
    Provincia:<select name="provincia">
        <option value="Bocas del toro">Bocas del toro
        <option value="Cocle">Cocle
        <option value="Colon">Colon
        <option value="Chiriqui">Chiriqui
        <option value="Darien">Darien
        <option value="Herrera">Herrera
        <option value="Los Santos">Los Santos
        <option value="Panama" selected >Panama
        <option value="Veraguas">Veraguas
        <option value="Panama Oeste">Panama Oeste

    </select> 
    <br>
<!--Provincia <input type="text" name="provincia"><br><br> -->
    <input type="submit" value="insertar" name="insertar">
    <input type="submit" value="consultar" name="consultar">
    <br><br><br>

     Filtrar por:<select name="filtrar">
        <option value="A"selected >Total encuestados
        <option value="sexo">sexo
        <option value="edad">edad
        <option value="salario">salario
        <option value="provincia" >provincia
        </select>    
        <input type="submit" value="filtro" name="filtro">

   </form>   
</body>
</html>


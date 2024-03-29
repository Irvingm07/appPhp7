<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Irving René Medina Soto  No. de control: 17091103</h2>
    <img src="selfie.jpeg" alt="" width="120px" height="100px">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
      <h2><center>Problema:</center></h2>
     <p>1. Una piedra de 0.6kg de masa se hace girar mediante una cuerda de 1.5 metros de longitud. si ésta presenta
        en su superficie una velocidad tangencial de 9m/s. ¿cuál es su fuerza centrípeta? </p>
            <p>a) Calcule la fuerza centrípeta de la piedra<br>        
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            Masa = 0.06kg <br>
            velocidad tangencial = 9 m/s<br>
            radio = 1.5 m<br>
            <br>
      </section>

      <section id="formulas">
            <h2>Fórmulas:</h2>
            w = θ / t<br>
            Fc = (m)(vt)^2/r 
           
            <br>
      </section>

      <section id="solucion">
            <h2>Solución: </h2>
            <p> a) Calcule la fuerza centrípeta de la piedra.<br>
                <br>
             Fc = (0.06kg)(9m/s)^2/1.5m <br>
            
             <br>
      </section>

      <section id="resultado">
      <h2>Resultado:</h2>
      <p> a) La fuerza centrípeta de la piedra es:<br>     
         <br>
         <?php
         function solucion(){
         $masa=0.06;
        $vt = 81;
        $radio = 1.5;
        $fc = $masa * $vt / $radio;
       echo "FC = ".$fc." N";
        }
        solucion();
        ?>
        </section>
     </section>

    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>

<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cotiza tu web</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	      <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<br><br>
  <h1 style="color:white; font-size:40px">Cotizacion de la pagina web </h1>

      <div class="row" id="page-wrap" style=" width: 700px; margin-top: 50px; margin: 0 auto;position: relative; background-color: lightgray" >
      <div class="col-sm-8 col-sm-offset-2 text">

        <br>

<!-- Calculando el precio -->
<h1 style="font-family: Agency FB">El costo aproximado para los servicios requeridos es de :</h1>

  <?php
error_reporting(0);

      $answer1 = $_POST["respuesta1"]; 
      $answer2 = $_POST['respuesta2'];
      $answer3 = $_POST['respuesta3'];
      $answer4 = $_POST['respuesta4'];
      $answer5 = $_POST['respuesta5'];
      $answer6 = $_POST['respuesta6'];
      $answer7 = $_POST["respuesta7"];
      $answer8 = $_POST["respuesta8"];
      $answer9 = $_POST["respuesta9"];
      $answer10 = $_POST["respuesta10"];
        
      $FinalPrice = 0;

//Calculando el valor de las respuestas            
      if (in_array($answer1, Array("Si"))) {
       $FinalPrice += 300000; 
       } 
       else if (in_array($answer1, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer2, Array("Si"))) {
       $FinalPrice += 500000; 
       } 
       else if (in_array($answer2, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer3, Array("Si"))) {
       $FinalPrice += 800000; 
      }
      else if (in_array($answer3, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer4, Array("Si"))) {
       $FinalPrice += 700000; 
      }
      else if (in_array($answer4, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer5, Array("Si"))) {
       $FinalPrice += 500000; 
      }
      else if (in_array($answer5, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer6, Array("Si"))) {
       $FinalPrice += 400000;
      }
      else if (in_array($answer6, Array("No"))){
        $FinalPrice += 200000;
       }

      if (in_array($answer7, Array("Si"))) {
       $FinalPrice += 500000; 
      }
      else if (in_array($answer7, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer8, Array("Si"))) {
       $FinalPrice += 1000000; 
      }
      else if (in_array($answer8, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer9, Array("Si"))) {
       $FinalPrice += 50000; 
      }
      else if (in_array($answer9, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer10, Array("Si"))) {
       $FinalPrice += 1000000; 
      }
      else if(in_array($answer10, Array("No"))){
        $FinalPrice += 0;
       }

       echo "Su pagina web tiene un costo aproximado de: $FinalPrice <br>";

       echo "1.Deseas que tu pagina web tenga un icono? $answer1 <br>";
       echo "2.Deseas que tu pagina web tenga una interfaz sencilla? $answer2 <br>";
       echo "3.Deseas que tu pagina web tenga un login y un registro? $answer3 <br>";
       echo "4.Tu web usara un unico lenguaje? $answer4 <br>";
       echo "5.Tu web necesita servicios de SEO? $answer5 <br>";
       echo "6.Tu web tendra menos de 3 paginas? $answer6 <br>";
       echo "7.En tu web se realizaran pagos? $answer7 <br>";
       echo "8.La web necesitara un directorio/ buscador interno? $answer8 <br>";
       echo "9.Tu web se encuentra en fase de desarrollo? $answer9 <br>";
       echo "10.La web estara integrada con otra web o app? $answer10 <br>";

  
  ?>
  <div class="content">
      <?php 
      
        echo "<div id='results'>
        <br><h1> $ {$FinalPrice}  pesos</h1></div>";


      ?> 
<br><br>
  
  
</div>
</div>
<br>
  <a class="btn btn-primary" type="submit" onclick="window.print()">Continuar</a>
</body>

<!-- Footer -->
        <footer>
          <div class="container">
            <div class="row">
              
              <div class="col-sm-8 col-sm-offset-2">
                <div class="footer-border"></div>
                <p>Made by RAFAEL.</p>
              </div>
              
            </div>
          </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</html>


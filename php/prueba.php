<!DOCTYPE html>
<head>
	<title>Cotiza los servicios para tu mascota</title>
  <center>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  
</head>
<style type="text/css">
      body{
            padding:5%;
      }
@media print{
  #imprimir{
    display: none;
  }
}
h1{
  color:;
  font-family:Agency FB;
  font-size:30px;  
}
p{
  font-family: Agency FB;
  font-size: 19px;
}
b{
  font-family: Agency FB;
}

</style>
<body>



<!-- varible de las preguntas -->

      <div id="page-wrap">

	<h1 style="font-family: Agency FB">El costo aproximado para los servicios requeridos es de :</h1>
		
  <?php
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
       $FinalPrice += 20000; 
       } 
       else if (in_array($answer1, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer2, Array("Si"))) {
       $FinalPrice += 25000; 
       } 
       else if (in_array($answer2, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer3, Array("Si"))) {
       $FinalPrice += 50000; 
      }
      else if (in_array($answer3, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer4, Array("Si"))) {
       $FinalPrice += 50000; 
      }
      else if (in_array($answer4, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer5, Array("Si"))) {
       $FinalPrice += 35000; 
      }
      else if (in_array($answer5, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer6, Array("Si"))) {
       $FinalPrice += 42000;
      }
      else if (in_array($answer6, Array("No"))){
        $FinalPrice += 200000;
       }

      if (in_array($answer7, Array("Si"))) {
       $FinalPrice += 15000; 
      }
      else if (in_array($answer7, Array("No"))){
        $FinalPrice += 0;
       }

      if (in_array($answer8, Array("Si"))) {
       $FinalPrice += 30000; 
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

            
            echo "<p><b>Señor(a) cliente sus Respuestas:</b><p/>"; 
            echo "---------------------------------------------------------------------------";
            /* pregunta #1 */
            echo "<p>Necesitas realizar una consulta acerca de tu mascota?
           <b><u> $answer1 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Deseas realizarle profilaxis a tu mascota? <b><u> $answer2 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Necesitas o deseas bañar a tu mascota? <b><u> $answer3 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Quieres o necesitas servicio de peluqueria para tu mascota?<b><u> $answer4 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Tu mascota necesita vacuna triple?<b><u> $answer5 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Necesitas una vacuna octuple para tu mascota?<b><u> $answer6 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Tu mascota necesita ser desparasitada?<b><u> $answer7 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Tu mascota necesita examenes de laboratorio?<b><u> $answer8 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Tu mascota necesita ser desparasitada?<b><u> $answer9 </u></b></p>";
            echo "----------------------------------------------------------------------------";
            echo "<p>Tu mascota necesita ser desparasitada?<b><u> $answer10 </u></b></p>";
            echo "</div>";

  ?>

  <div class="content">
      <?php 
      
        echo "<div id='results'>
        <br><h1> $ {$FinalPrice}  pesos</h1></div>";


      ?> 
     
   <input class="btn" type="submit" name="button" id="button" value="Volver a inicio"
 onclick="location.href = '../index.html' ">
  </div>




   
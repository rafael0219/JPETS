  <?php

$nombre = $_POST['Name'];
$apellido = $_POST['Last Name'];
$correo = $_POST['Email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['Messaje'];

$destinatario = "rhgutierrez1@misena.edu.co";
$asunto = "Comentarios";

$envio = "Nombre de la persona: $nombre";
$envio .= "Apellido de la persona: $apellido";
$envio .= "Correo de la persona: $correo";
$envio .= "Telefono de la persona: $telefono"; 
$envio .= "Mensaje de la persona: $mensaje"; 

mail($destinatario, $asunto, $envio);
header("location:../index.html");


  ?>
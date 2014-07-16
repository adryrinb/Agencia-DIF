<? 
$person_email ="danielangel28@yahoo.es"; 
$cuerpo = $cuerpo .= "nombre: " . $_POST["nombre"] . " ";
$cuerpo = $cuerpo .= "email: " . $_POST["email"] . " "; 
$cuerpo = $cuerpo .= "telefono: " . $_POST["telefono"] . " "; 
$cuerpo = $cuerpo .= "asunto: " . $_POST["asunto"] . " ";
$cuerpo = $cuerpo .= "mensaje: " . $_POST["mensaje"] . " "; 
$email = $_POST["correo"]; 
$headers = "From: agenciadif.com" .			           "Reply-To: $correo" . "rn" .  
           "X-Mailer: PHP/" . phpversion();        
mail("$person_email","Contacto agenciadif.com","$cuerpo","$headers"); 
header('Location: http://agenciadif.com');
?> 
<?php
/* Set e-mail recipient */
$myemail  = "nicoargiz@icloud.com";

$ip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

// Tomar datos del formulario, depende el id, vean que nombre, email, ticket y comentario coinciden con lo q tenemos en contacto.html
$subject .= "Asunto, por ej, contacto desde mi pagina web";
$nombre = $_REQUEST['nombre'] ;
$email = $_REQUEST['email'] ; 
$telefono = $_REQUEST['telefono'] ; 
$checkbox1 = $_REQUEST['checkbox1'] ;
$checkbox2 = $_REQUEST['checkbox2'] ; 
$mensaje = $_REQUEST['mensaje'] ;

/* Poner que información aparecerá en el email, veran que toma las variables deepende lo que configuramos mas arriba */
$message = "Contacto desde mi pagina web:

Nombre: $nombre
E-Mail: $email
Telefono: $telefono
Checkbox1: $checkbox1
Checkbox2: $checkbox2

Mensaje:
 $mensaje

";

// El resto dejarlo como está!
//direcci&oacute;n del remitente 
$headers = "From: $nombre <$email>\r\n"; 

//direcci&oacute;n de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: $email\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: $email\r\n"; 

/* Send the message using mail() function */
// mail($myemail, "Presupuesto solicitado desde SantiagoAV", $message, $headers);
mail($myemail, $subject, $message, $headers);

/* Acá podemos modificar que una vez enviado el mail, ir a otro html, por ej de gracias */
header('Location: gracias.html');
exit();
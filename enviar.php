<?php 

function validar_campo($campo)
{
$campo = trim($campo);
$campo = stripcslashes($campo);
$campo = htmlspecialchars($campo);

return $campo;
}
header('Content-type: application/json');



 if(isset($_POST['nombre'])  && !empty($_POST['nombre']) && 
    isset($_POST['email'])  && !empty($_POST['email']) &&
    isset($_POST['asunto'])  && !empty($_POST['asunto']) &&
    isset($_POST['mensaje'])  && !empty($_POST['mensaje'])) {
        
        
        $destinoMail = "isc.luisandres@gmail.com";
        $nombre = validar_campo($_POST['nombre']);
        $email = validar_campo($_POST['email']);
        $asunto = validar_campo($_POST['asunto']);
        $mensaje = validar_campo($_POST['mensaje']);

        $contenido="Nombre:".$nombre."\n  Asunto".$asunto;
        $contenido.="\n correo: ".$email;
        $contenido.="\n mensaje: ".$mensaje;
        mail($destinoMail, "mensaje de".$asunto,$contenido);
         
        return print(json_encode('ok'));
    
 }
 return print(json_encode('no'));
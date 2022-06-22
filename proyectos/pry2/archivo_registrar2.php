<?php
//se establece una conexion a la base de datos
include 'conexion2.php';
//si se han enviado datos
if (isset($_POST['datos_registrar_usuario2']) and isset($_POST['datos_registrar_contraseña2'])){
    $usuario=mysqli_real_escape_string($conexion,$_POST['datos_registrar_usuario2']);
    $contraseña=password_hash($_POST['datos_registrar_contraseña2'],PASSWORD_DEFAULT);
    $ingresar=mysqli_query($conexion,'insert into login_tec(columna_usuario,columna_password) values
    ("'.$usuario.'","'.$contraseña.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    header ('location:inicio_tec.php');
}//si no se enviaron datos
else{
    header ('location:inicio_tec.php');
}
?>
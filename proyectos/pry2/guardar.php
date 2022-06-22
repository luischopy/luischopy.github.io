<?php
	//conectamos Con el servidor
	$conectar=@mysqli_connect('localhost','root','','base_de_datos');
	//verificamos la conexion
	//if(!$conectar){
		//echo"No Se Pudo Conectar Con El Servidor";
	//}else{

		//$base=mysqli_select_db('base_de_datos');
		//if(!$base){
			//echo"No Se Encontro La Base De Datos";			
		//}
	//}
	//recuperar las variables
	$nombre=$_POST['nombre_cl'];
	$apellido=$_POST['apellido_cl'];
	$matricula=$_POST['matricula_at'];

    $modelo=$_POST['modelo_at'];
	$color=$_POST['color_at'];
	$mensaje=$_POST['mensaje'];
        
    $servicio=$_POST['selServicio'];
	$tiposer=$_POST['tipServicio'];
	
	//hacemos la sentencia de sql
	//$sql="INSERT INTO reporte VALUES('$nombre','$apellido','$matricula','$modelo','$color','$mensaje','$servicio','$tiposer')";
	
	$sql=mysqli_query($conectar,'insert into reporte(nombre_cl,apellido_cl,matricula_at,modelo_at,color_at,descripcion_at,tipo_de_sevicio,modo_alta) values
    ("'.$nombre.'","'.$apellido.'","'.$matricula.'","'.$modelo.'","'.$color.'","'.$mensaje.'","'.$servicio.'","'.$tiposer.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
	
	//ejecutamos la sentencia de sql
	
	//$ejecutar=mysqli_query($sql);
	//verificamos la ejecucion
	if(!$sql){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
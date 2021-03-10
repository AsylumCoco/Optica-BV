<?php 
$conexion = mysqli_connect("localhost","root","","contactos");
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
//Consulta para insertar
$insertar = "INSERT INTO datos (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al Enviar Comentario';
}else {
	header("location:Contactos.html");
}
//Cerrar Conexion
mysqli_close($conexion);
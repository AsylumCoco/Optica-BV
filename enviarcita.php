<?php
$conexion = mysqli_connect("localhost","root","","citas");
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$nota = $_POST["nota"];
//Consulta para insertar
$direccion = $_POST["direccion"];
$insertar = "INSERT INTO cita (nombre, telefono, correo, fecha, hora, nota) VALUES ('$nombre', '$telefono', '$correo', '$fecha', '$hora', '$nota')";
//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al hacer cita';
}else {
	header("location:Confirmacion1.html");
}
//Cerrar Conexion
mysqli_close($conexion);
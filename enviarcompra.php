<?php
$conexion = mysqli_connect("localhost","root","","productos");
//Recibir los datos y almacenarlos en variables
$modelo = $_POST["modelo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$cp = $_POST["cp"];
$correo = $_POST["correo"];
$referencia = $_POST["referencia"];
//Consulta para insertar
$direccion = $_POST["direccion"];
$insertar = "INSERT INTO compras (modelo, nombre, apellido, direccion, cp, correo, referencia) VALUES ('$modelo', '$nombre', '$apellido', '$direccion', '$cp', '$correo', '$referencia')";
//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al hacer compra';
}else {
	header("location:Confirmacion.html");
}
//Cerrar Conexion
mysqli_close($conexion);
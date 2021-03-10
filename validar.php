<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a basa de datos
$conexion=mysqli_connect("localhost","root","","cuentas");
$consulta="SELECT * FROM cuentas WHERE usuario= '$usuario' and clave= '$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("location:Inicio.html");
}
else{
	echo "ERROR DE USUARIO";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
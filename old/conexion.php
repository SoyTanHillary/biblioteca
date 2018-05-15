<?php
	$usuario="root";
	$password="";
	$servidor="localhost"; //"132.128.253.12"
	$basededatos="biblioteca1";
	//mysql_connect();
	//mysqli_connect();
	$conexion = mysqli_connect($servidor, $usuario, $password) or die ("Conexion no establecida".mysqli_error());
	if($conexion){
		echo "Conexion Exitosa";
	}
?>
	
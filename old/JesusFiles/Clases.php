<?php
 
Class Work{
	function Conexion(){
		$usuario = "root";
		$password = "";
		$servidor = "127.0.0.1";
		$conecxion = mysqli_connect($servidor, $usuario, $password) or die 
		("conecxion no establacida:,v ".mysqli_error());

		return $conecxion;
	}
	
	function Selecciona_base($conecxion){
		$baseDD = "biblioteca";
		$bd = mysqli_select_db($conecxion, $baseDD) or die ("La base de datos no a sido seleccionada".mysqli_error());
		return $bd;
	}
}
	
?>
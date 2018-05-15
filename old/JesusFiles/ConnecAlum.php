<?php
	include("Clases.php");

	If(isset($_POST['NumCta'])){
		$no_cuenta=$_POST['NumCta'];
		$password=$_POST['Pass'];

		$conecta= new Work;
		$conexion = $conecta->Conexion();

		$selecciona= new Work;
		$database = $selecciona->Selecciona_base($conexion);

		if($database){
			$query = "SELECT * FROM alumnos where no_cuenta=$no_cuenta;";
			//echo "SELECT * FROM alumnos where no_cuenta=$no_cuenta;";
			$res = mysqli_query($conexion,$query) or die ("Error en la consulta >:v". mysqli_error());

			if(mysqli_num_rows($res))
			{
					echo "<table>
					<th> no_cuenta </th>
					<th> nombre    </th>
					<th> primerApe </th>
					<th> segundoApe</th>
					
					<th> email     </th>
					";
					while ($datos=mysqli_fetch_array($res))
					{
						echo 
						"<tr>
						<td>$datos[no_cuenta]</td>
						<td>$datos[nombre]</td>
						<td>$datos[primerApe]</td>
						<td>$datos[segundoApe]</td>
						
						<td>$datos[email]</td>
						</tr>
						";

					}
				} else {

					echo "Usuario no valido FAVOR DE REGISTRARSE<br>";
					echo "<a href='registro.html'>REGISTRO</a>";
				}
		}
	} else {
		echo "NO HAGAS TRAMPA LOGUEATE!!!!<br>";
		echo "<a href='login.php'>LOGIN</a>";	
	}


?>

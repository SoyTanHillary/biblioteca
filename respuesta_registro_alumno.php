<?php
  $n_cuenta = $_POST['n_cuenta'];
  $contra = $_POST['contra'];
  $nombre_usuario = $_POST['nombre_usuario'];
  $primer_apellido = $_POST['primer_apellido'];
  $segundo_apellido = $_POST['segundo_apellido'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $correo = $_POST['correo'];
  $carrera = $_POST['carrera'];

  include('page/conexion.php');

  $consulta = "INSERT INTO alumno VALUES('$n_cuenta','$contra', '$nombre_usuario','$primer_apellido','$segundo_apellido','$fecha_nacimiento','$correo', '$carrera')";
  //Paso 1 - Prepara la consulta usando la base de datos de la conexion, de ahi viene bd - GENERICO
  $query = $bd->prepare($consulta);

  //Paso 2 - GENERICO
  $query->execute();

  //Paso 3 - INSERT, UPDATE, DELETE -> rowCount | SELECT -> fetchAll
  $resultado_query = $query->rowCount();

  if($resultado_query==1){
    header("Location:registro_alumno.php?success=1");
  }else{
    header("Location:registro_alumno.php?error=1");
  }
  $bd.close();
?>

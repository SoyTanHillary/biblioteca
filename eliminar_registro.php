<?php
  $eliminar = $_POST['eliminar'];

  include('page/conexion.php');

  $consulta = "DELETE FROM libro where ISBN = '$eliminar'; ";
  //Paso 1 - Prepara la consulta usando la base de datos de la conexion, de ahi viene bd - GENERICO
  $query = $bd->prepare($consulta);

  //Paso 2 - GENERICO
  $query->execute();

  //Paso 3 - INSERT, UPDATE, DELETE -> rowCount | SELECT -> fetchAll
  $resultado_query = $query->rowCount();

  if($resultado_query==1){
    header("Location:eliminar_libro.php?success=1");
    //echo "Se ha eliminado el registro";
  }else{
    header("Location:eliminar_libro.php?error=1");
    //echo "No hay registro con ese ISBN";
  }
?>

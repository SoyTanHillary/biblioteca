<?php
  $ISBN = $_POST['ISBN'];
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $editorial = $_POST['editorial'];
  $num_edicion= $_POST['num_edicion'];
  $year_edicion = $_POST['year_edicion'];
  $num_pag = $_POST['num_pag'];
  $catergoria = $_POST['categoria'];

  include('page/conexion.php');

  $consulta = "INSERT INTO libro VALUES('$ISBN','$titulo', '$autor','$editorial','$num_edicion','$year_edicion','$num_pag', '$catergoria')";
  //Paso 1 - Prepara la consulta usando la base de datos de la conexion, de ahi viene bd - GENERICO
  $query = $bd->prepare($consulta);

  //Paso 2 - GENERICO
  $query->execute();

  //Paso 3 - INSERT, UPDATE, DELETE -> rowCount | SELECT -> fetchAll
  $resultado_query = $query->rowCount();

  if($resultado_query==1){
    header("Location:registro_libro.php?success=1");
    //echo "Se agrego correctamente el registro";
  }else{
    header("Location:registro_libro.php?error=1");
    echo "Error";
  }
  //$bd.close();
?>

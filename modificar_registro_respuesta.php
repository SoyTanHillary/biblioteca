<?php
// if(isset($POST['b_modificar'])){
  $ISBN = $_POST['ISBN1'];
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $editorial = $_POST['editorial'];
  $no_edicion= $_POST['num_edicion'];
  $year_edicion = $_POST['year_edicion'];
  $no_pag = $_POST['num_pag'];
  $categoria = $_POST['categoria'];

  include('page/conexion.php');

  $consulta = "UPDATE libro SET titulo = '$titulo', autor = '$autor', editorial = '$editorial', no_edicion = '$no_edicion', year_edicion = '$year_edicion', no_pag = '$no_pag', categoria = '$categoria' where ISBN = '$ISBN'; ";

  //echo $consulta;

  $query = $bd->prepare($consulta);

  //echo $query;

  //Paso 2 - GENERICO
  $query->execute();

// echo $query;
  //Paso 3 - INSERT, UPDATE, DELETE -> rowCount | SELECT -> fetchAll
  $resultado_query = $query->rowCount();

  //echo $resultado_query;

  if($resultado_query == 1){
    header("Location:modificar_libro.php?result=3");
  }else{
    header("Location:modificar_libro.php?result=8");
  }
//}
?>

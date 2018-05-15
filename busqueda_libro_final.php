<?php
if(isset($_GET['b_buscar'])){

$campo = $_GET['opcion'];
$buscar = $_GET['buscar'];
//  if(isset($_GET['b_eliminar'])){

  include('page/conexion.php');

  //$consulta = "SELECT * FROM libro where ".$campo." = ".$buscar."; ";
  $consulta = "SELECT * FROM libro where ".$campo." = '$buscar'; ";
  //echo "<br>".$consulta;

    $query = $bd -> prepare($consulta);

    $query -> execute();

    $resultado_query = $query -> fetchAll();

    if($query){
      if(count($resultado_query) > 0){
        foreach ($resultado_query as $row) {
          echo "<br> ISBN: ".$row['ISBN'];
          echo "<br> Titulo: ".$row['titulo'];
          echo "<br> Autor: ".$row['autor'];
          echo "<br> Editorial: ".$row['editorial'];
          echo "<br> Número de edición: ".$row['no_edicion'];
          echo "<br> Año de edición: ".$row['year_edicion'];
          echo "<br> Número de páginas: ".$row['no_pag'];
          echo "<br> Categoria: ".$row['categoria'];
          echo "<hr>";
        }
      }else{
        echo "No hay resultados de búsqueda alv compa";
      }
    }
  }
  ?>

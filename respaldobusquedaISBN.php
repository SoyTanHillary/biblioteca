<?php
  // session_start();
  // include('page/session.php');
  $buscar = $_GET['buscar'];
  include('page/conexion.php');

  $consulta = "SELECT * FROM libro where ISBN = '$buscar'; ";

  $query = $bd -> prepare($consulta);

  $query -> execute();

  //$resultado_query = $query -> fetchAll();

  // foreach ($resultado_query as $key => $value) {
  //   # code...
  // }

  if(count($query) == 1 ){
    echo "Si se encontró, ahora imprimelooooooo";
    for($i=0; $fila = $query -> fetch(); $i++){
      echo "<br> ISBN: ".$fila['ISBN'];
      echo "<br> Titulo: ".$fila['titulo'];
      echo "<br> Autor: ".$fila['autor'];
      echo "<br> Editorial: ".$fila['editorial'];
      echo "<br> Numero de edición: ".$fila['no_edicion'];
      echo "<br> Año de edición: ".$fila['year_edicion'];
      echo "<br> Número de páginas: ".$fila['no_pag'];
      echo "<br> Catergoria: ".$fila['categoria'];
    }
  }else{
    echo "Mandar alert de que no hay resultados";
  }
?>

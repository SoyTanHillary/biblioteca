<?php
  // session_start();
  // include('page/session.php');
  $buscar = $_GET['buscar'];
  $campo = $_GET['opcion'];

    // if(isset($opcion)){
    //   $campo = $opcion;
    // }

  include('page/conexion.php');

  //$consulta = "SELECT * FROM libro where ".$campo." = ".$buscar."; ";
  $consulta = "SELECT * FROM libro where ".$campo." = '$buscar'; ";
  echo "<br>".$consulta;

  if(isset($campo)){
    $query = $bd -> prepare($consulta);

    $query -> execute();

    if(count($query) == 1 ){
      //echo "Si se encontró, ahora imprimelooooooo";
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
      //header("Location:resultados_busqueda.php?success=1");
      }
    else{
      //header("Location:resultados_busqueda.php?error=1");
      echo "ERROR";
    }

  }
  //$resultado_query = $query -> fetchAll();

  // foreach ($resultado_query as $key => $value) {
  //   # code...
  // }
//echo "buscando query : ".$query;
//if (mysqli_num_rows($query)){
  //  echo $campo."<br>";

?>

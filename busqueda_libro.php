<?php
  $buscar = $_GET['buscar'];
  $campo = $_GET['opcion'];

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
          // $ISBN = $row['ISBN'];
          // $titulo = $row['titulo'];
          // $autor = $row['autor'];
          // $editorial = $row['editorial'];
          // $no_edicion = $row['no_edicion'];
          // $year_edicion = $row['year_edicion'];
          // $no_pag = $row['no_pag'];
          // $categoria = $row['categoria'];
        }
      }else{
        echo "No hay resultados de búsqueda alv compa";
      }
    }
    //$resultado_query = $query -> fetchAll();

    // if(count($resultado_query) == 1 ){
    //   echo "Si se encontró, ahora imprimelooooooo";
      // for($i=0; $fila = $query -> fetch(); $i++){
      //   echo "<br> ISBN: ".$fila['ISBN'];
      //   echo "<br> Titulo: ".$fila['titulo'];
      //   echo "<br> Autor: ".$fila['autor'];
      //   echo "<br> Editorial: ".$fila['editorial'];
      //   echo "<br> Numero de edición: ".$fila['no_edicion'];
      //   echo "<br> Año de edición: ".$fila['year_edicion'];
      //   echo "<br> Número de páginas: ".$fila['no_pag'];
      //   echo "<br> Catergoria: ".$fila['categoria'];
      // }
      //header("Location:resultados_busqueda.php?success=1");
      //}
    // else{
      //header("Location:resultados_busqueda.php?error=1");
      // echo "ERROR";
    // }

  //$resultado_query = $query -> fetchAll();

//echo "buscando query : ".$query;
//if (mysqli_num_rows($query)){
  //  echo $campo."<br>";

?>

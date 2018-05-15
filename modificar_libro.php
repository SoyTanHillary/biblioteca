<html>
  <head>
    <?php
    session_start();
    include('page/session.php');
    include('page/head.php');
    ?>

    <title> Modificar Libro </title>
    <style>
    body{
      background-image: url("pictures/bw.jpg");
    }
    </style>
    </head>
  <body>
    <?php
    if (isset($_GET['result'])){
      $num = $_GET['result'];
      if( $num == 3){
        ?>
        <div class="alert alert-success text-center" role="alert">
          El registro se ha modificado!
        </div>
      <?php } ?>
      <?php
        if( $num == 8){ ?>
          <div class="alert alert-danger text-center" role="alert">
            Error en la modificación del registro
          </div>
      <?php } } ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid text-right">
            <a href="bienvenida.php" class="btn btn-light " > Regresar </a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            ¿Qué libro desea Modificar?
            <li class="nav-link">
              <form action="modificar_libro.php" method="GET" class="form-inline my-2 my-lg-0">
                <li class="nav-item">
                  <select name="opcion">
                  <option value="ISBN"> ISBN </option>
                  <option value="titulo"> Titulo </option>
                  <option value="autor"> Autor </option>
                  <option value="editorial"> Editorial </option>
                  <option value="year_edicion"> Año de edición </option>
                  <option value="categoria"> Categoria </option>
                  </select>
                </li>
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Búsqueda" id="buscar" name="buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="b_buscar" >Búscar</button>
              </form>
            </li>
          </nav>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="ac transparent2">
            <form action="modificar_registro.php" method="POST" class="form-inline my-2 my-lg-0">
              <label for="modificar"> Ingresa el ISBN del libro a Modificar: </label>
              <input class="form-control mr-sm-2" type="text" placeholder="Modificar" aria-label="modificar" id="modificar" name="modificar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="b_modificar"> Modificar </button>
            </form>
          </div>
        </div>
      </div>
    </div>

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
      }
      ?>

    <script src="lib/scripts/jquery-3.3.1.min.js"></script>
    <script src="lib/scripts/bootstrap.min.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>

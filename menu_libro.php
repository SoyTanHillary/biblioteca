<html>
  <head>
    <?php
    session_start();
    include('page/session.php');
    include('page/head.php');
    ?>

    <title> Menú Libro Temp </title>
    <style>
    body{
      background-image: url("pictures/bw.jpg");
    }
    </style>
  </head>
  <body>
    <div class="container" >
      <!-- container || container-fluid -->
        <div class="row">
          <div class="col-md-12">
            <div class="page-header text-center">
              <h1> Menú Principal </h1>
              <div class="container-fluid text-right"> <a href="page/logout.php"> Cerrar sesion </a></div>
              <!-- <div class="jumbotron"> -->
                <?php echo "Bienvenido ".$_SESSION['tipo'] ?>
              <!-- </div> -->
              <!-- <a href="registro_usuario.php"><button class="btn btn-primary">Formulario</button></a> -->
            </div>
          </div>
        </div>
      </div>

    <!--BARRA DE NAVEGACION -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="transparent ac"> -->
            <form action="busqueda_libro.php" method="GET" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Búscar Libro" aria-label="Búsqueda" id="buscar" name="buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búscar</button>
            </form>
          <!-- </div> -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> Inicio </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Libros <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">  </a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>


        </div>
      </div>
    </div>





    <script src="lib/scripts/jquery-3.3.1.min.js"></script>
    <script src="lib/scripts/bootstrap.min.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>

<html>
  <head>
    <?php
    session_start();
    include('page/session.php');
    include('page/head.php');
    ?>

    <title> Eliminar Registro </title>
    <style>
    body{
      background-image: url("pictures/bw.jpg");
    }
    </style>
    </head>
  <body>
    <div class="container">
      <?php
          if(isset($_GET['error'])){
            ?>
            <div class="alert alert-warning text-center" role="alert">
              No se ha podido eliminar el registro
            </div>
          <?php } ?>
          <?php
            if(isset($_GET['success'])){
              ?>
              <div class="alert alert-success text-center" role="alert">
                Se eliminó correctamente el registro
              </div>
          <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            ¿Qué libro desea eliminar?
            <li class="nav-link">
              <form action="eliminar_libro.php" method="GET" class="form-inline my-2 my-lg-0">
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
      <div class="row">
        <div class="transparent">
        <form action="eliminar_registro.php" method="POST" class="form-inline my-2 my-lg-0">
          Ingresa el ISBN del libro a eliminar:
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="eliminar" id="eliminar" name="eliminar" maxlength="13">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="b_buscar"> Búscar </button>

          <!-- <button class="btn btn-large btn-primary" data-toggle="confirmation" data-btn-ok-label="Continue" data-btn-ok-class="btn-success" data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check" data-btn-cancel-label="Stoooop!" data-btn-cancel-class="btn-danger" data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close" data-title="Is it ok?" data-content="This might be dangerous" name="b_eliminar"> Eliminar </button> -->

          <!-- <button class="btn btn-large btn-primary" data-toggle="confirmation"
        data-btn-ok-label="Continue" data-btn-ok-class="btn-success"
        data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
        data-btn-cancel-label="Stoooop!" data-btn-cancel-class="btn-danger"
        data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
        data-title="Is it ok?" data-content="This might be dangerous">
  Confirmation
</button> -->
        </form>
        </div>
      </div>
    </div>

    <?php include('busqueda_libro_final.php'); ?>


    <script src="lib/scripts/jquery-3.3.1.min.js"></script>
    <script src="lib/scripts/bootstrap.min.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>

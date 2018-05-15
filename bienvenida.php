<html>
  <head>
    <?php
    session_start();
    include('page/session.php');
    include('page/head.php');
    ?>

    <title> Página Principal </title>
    <style>
    body{
      background-image: url("pictures/bw.jpg");
    }

    </style>
  </head>
  <body>
    <div class="container" >
      <!-- container || container-fluid -->
      <div class="container-fluid"
        <div class="row">
          <div class="col-md-12">
                <?php
                  include('page/navbar.php');
                ?>
          </div>
        </div>
              <div class="container-fluid text-right">
                <div class="row">
                  <div class="col-md-12">
                  <a href="page/logout.php" class="btn btn-link" > Cerrar sesion </a>
                  </div>
                </div>
              </div>

              <div class="container-fluid text-center ">
                <div class="row">
                  <div class="col-md-12">
                    <h1> Menú Principal </h1>
                    <?php echo "Bienvenido ".$_SESSION['tipo'] ?>
                  </div>
                </div>
              </div>
        </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

              <!-- <button class="btn btn-large btn-primary" data-toggle="confirmation" data-btn-ok-label="Continue" data-btn-ok-class="btn-success" data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check" data-btn-cancel-label="Stoooop!" data-btn-cancel-class="btn-danger" data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close" data-title="Is it ok?" data-content="This might be dangerous"> Confirmation
              </button> -->



        </div>
      </div>
    </div>





    <script src="lib/scripts/jquery-3.3.1.min.js"></script>
    <script src="lib/scripts/bootstrap.min.js"></script>
    <script src="lib/scripts/bootstrap-confirmation.min.js"></script>
    <script src="lib/scripts/popper.min.js"> </script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  </body>
</html>

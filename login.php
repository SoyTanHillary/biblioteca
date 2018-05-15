<html>
  <head>
    <style>
      body{
        background-image: url("pictures/bw.jpg");
      }
    </style>
    <?php include('page/head.php'); ?>
      <title> Login </title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- container || container-fluid
      error 2 es que no inicio sesion y quiere entrar a una pagina restringida
      error 2 es que tiene mal usuario o contraseña
    -->
      <?php
      if (isset($_GET['error'])){
        $num_error = $_GET['error'];
        if( $num_error == 2){
          ?>
          <div class="alert alert-warning text-center" role="alert">
            Por favor inicie sesión primero
          </div>
        <?php } ?>
        <?php
          if( $num_error == 1){ ?>
            <div class="alert alert-warning text-center" role="alert">
              Nombre de usuario y/o contraseña incorrecta
            </div>
        <?php } } ?>

      <div class="row">
        <div class="col-md-12">
          <div class="page-header text-center">
            <h1> Hello Header </h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 colo-sm-12 col-xs-12">
            <div class="transparent loginsize ac  ">
              <h3>Inicio de Sesión</h3>
                    <form action="respuesta_login.php" method="POST">
                      <div class="form-group">
                        <label for="n_cuenta"> Numero de Cuenta: </label>
                        <input type="text" class="form-control" id="n_cuenta" name="n_cuenta"
                        placeholder="Ingresa el numero de cuenta" required pattern="[0-9]{9}" oninvalid="setCustomValidity('Por favor, ingrese el formato correcto')" onchange="try{setCustomValidity('')}catch(e){}" maxlength="9">
                          <small id="n_cuenta_help" class="form-text text-muted">El numero de cuenta debe contener 9 digitos </small>
                      </div>
                      <div class="form-group">
                          <label for="password">Contraseña</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese password" required pattern="{6-16}" required="required" oninvalid="setCustomValidity('Por favor, ingresa tu contraseña')" maxlength="16">
                      </div>
                      <button class="btn btn-primary" name="login">Ingresar</button>
            </div>
          </div>
        <div>
      </div>
      <div class="container text-center">
        <div class="row" text-center>
          <div class="col-md-12">
            <div>
              ¿Aún no tienes una cuenta? <a href="registro_alumno.php"><strong> Registrate </strong></a>
            </div>
          </div>
        </div>
      </div>
<!--BOTON QUE LLEVA A FORMULARIO DE REGISTRO <a href="registro_usuario.php"><button class="btn btn-primary">Registro</button></a> -->


    <script src="lib/scripts/jquery-3.3.1.min.js"></script>
    <script src="lib/scripts/bootstrap.min.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>

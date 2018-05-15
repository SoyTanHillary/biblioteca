<html>
<head>
  <style>
  body{
    background-image: url("pictures/bw.jpg");
  }
  </style>
    <?php
      include('page/head.php');
    ?>
  <title> Registro Usuario </title>
</head>
<body>
  <div class="container" >
    <?php
        if(isset($_GET['error'])){
          ?>
          <div class="alert alert-warning text-center" role="alert">
            No se ha podido agregar el registro, revise los campos
          </div>
        <?php } ?>
        <?php
          if(isset($_GET['success'])){
            ?>
            <div class="alert alert-success text-center" role="alert">
              Se agregó correctamente el registro
            </div>
        <?php } ?>
    <!-- container || container-fluid -->
      <div class="row">
        <div class="col-md-12">
          <div class="page-header text-center">
            <h1>Registro Usuario</h1>
            <!-- <a href="registro_usuario.php"><button class="btn btn-primary">Formulario</button></a> -->
          </div>
        </div>
      </div>
    </div>
<!-- Variable de sesion, header location recarga la pagina despues de una accion session_start(); -->



  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="transparent loginsize ac">
        <form action="respuesta_registro_alumno.php" method="POST">
          <div class="form-group">
            <!-- <fieldset> <legend> Formulario de registro </legend> -->
              <label for="n_cuenta"> Numero de Cuenta: </label>
              <input type="text" class="form-control" id="n_cuenta" name="n_cuenta" placeholder="Ingresa el numero de cuenta" required pattern="[0-9]{9}" oninvalid="setCustomValidity('Por favor, ingrese el formato correcto')"
      onchange="try{setCustomValidity('')}catch(e){}" maxlength="9">
              <small id="n_cuenta_help" class="form-text text-muted">El numero de cuenta debe contener 9 digitos </small>
            </div>
            <div class="form-group">
              <label for="contra">Contraseña</label>
              <input type="password" class="form-control" id="contra" name="contra" placeholder="Ingrese Contraseña" maxlength="16" required>
            </div>
            <div class="form-group">
              <label for="nombre_usuario"> Nombre:  </label>
              <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu nombre:" maxlength="50"
              required pattern="[A-Za-z]{1,50}" oninvalid="setCustomValidity('El campo no debe contener caracteres especiales ni números')"
      onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="form-group">
              <label for="primer_apellido"> Primer Apellido: </label>
              <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Ingresa tu primer apellido" maxlength="50" required pattern="[A-Za-z]{1,50}" oninvalid="setCustomValidity('El campo no debe contener caracteres especiales ni números')" onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="form-group">
              <label for="segundo_apellido"> Segundo Apellido: </label>
              <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Ingresa tu segundo apellido" maxlength="50" required pattern="[A-Za-z]{1,50}" oninvalid="setCustomValidity('El campo no debe contener caracteres especiales ni números')" onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="form-group">
              <label for="fecha_nacimiento"> Fecha de nacimiento:  </label>
              <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="AAAAMMDD" requred>
              </div>
              <div class="form-group">
                <label for="correo"> Correo Electrónico:  </label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required maxlength="80">
              </div>
              <div class="form-group">
              <label for="carrera"> Carrera:  </label>
              <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Carrera" required maxlength="70" >
            </div>
            <button type="submit" class="btn btn-primary">Envíar</button>
          <!-- </fieldset> -->
        </form>
      </div>
      </div>
    </div>
  </div>
  <script src="lib/scripts/jquery-3.3.1.min.js"></script>
  <script src="lib/scripts/bootstrap.min.js"> </script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>
<form-group

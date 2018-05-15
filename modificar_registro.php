<html>
<head>
  <style>
  body{
    background-image: url("pictures/bw.jpg");
  }
  </style>
    <?php
      include('page/head.php');
      session_start();
      include('page/session.php');
      $ISBNN = $_POST['modificar'];
      //$ISBN = $ISBNN;
    ?>
  <title> Modificar Registro </title>
</head>
<body>
  <div class="container" >
    <!-- container || container-fluid -->
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid text-right">
            <a href="modificar_libro.php" class="btn btn-light" > Regresar </a>
          </div>
          <div class="page-header text-center">
            <h1>Modificar Registro</h1>
            <!-- <a href="registro_usuario.php"><button class="btn btn-primary">Formulario</button></a> -->
          </div>
        </div>
      </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="transparent loginsize ac">
        <form action="modificar_registro_respuesta.php" method="POST">
          <div class="form-group">
            <label for="titulo"> ISBN: </label>
            <input type="text" class="form-control" name="ISBN1" id="ISBN1" value=<?php echo"$ISBNN"; ?> disabled>
          </div>
            <div class="form-group">
              <label for="titulo"> Titulo: </label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el titúlo del libro">
            </div>
            <div class="form-group">
              <label for="autor"> Autor:  </label><input type="text" class="form-control" id="autor" name="autor" placeholder="Ingresa el nombre del autor del libro">
            </div>
            <div class="form-group">
              <label for="editorial"> Editorial </label>
              <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingresa la editorial del libro">
            </div>
            <div class="form-group">
              <label for="num_edicion"> Número de edición: </label>
              <input type="text" maxlength="2" class="form-control" id="num_edicion" name="num_edicion" placeholder="Ingresa el numero de edición" required pattern="[0-9]" oninvalid="setCustomValidity('Por favor, ingrese el formato correcto')" onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="form-group">
              <label for="year_edicion"> Año de edición: </label>
              <input type="text" maxlength="4" class="form-control" id="year_edicion" name="year_edicion" placeholder="Ingresa el año de edicion de libro" required pattern="[0-9]{4}" oninvalid="setCustomValidity('Por favor, ingrese el formato correcto')" onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="form-group">
              <label for="num_pag"> Número de páginas: </label>
              <input type="text" maxlength="6" class="form-control" id="num_pag" name="num_pag" placeholder="Ingresa el numero de páginas del libro">
              <!-- //PORQUE CARAJOS ME LO MARCA MAL?  -->
            </div>
            <div class="form-group">
              <label for="categoria"> Categoria </label>
              <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary" name="b_modificar">Modificar</button>
          <!-- </fieldset> -->
          <input type="hidden" name="ISBN1" id="ISBN1" value=<?php echo $ISBNN; ?> />
        </form>
      </div>
      </div>
    </div>
  </div>
  <script src="lib/scripts/jquery-3.3.1.min.js"></script>
  <script src="lib/scripts/bootstrap.min.js"> </script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->s
  </body>
</html>

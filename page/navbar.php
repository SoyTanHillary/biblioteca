<!-- NAVBAR ALULMNO -->

<?php
if( $_SESSION['tipo'] == "Alumno" ){ ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="bienvenida.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#"> Libros <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="libros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Libros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="catalogo_libros.php">Cátalogo Completo</a>
          <a class="dropdown-item" href="perfil_alumno.php"> Libros en préstamo </a> -->
          <a class="dropdown-item disabled" href="#"> Agregar Libro </a>
          <a class="dropdown-item disabled" href="#"> Modificar Libro </a>
          <a class="dropdown-item disabled" href="#"> Eliminar Libro </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="alumno" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alumno
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="perfil_alumno.php"> Perfil del Alumno </a>
          <a class="dropdown-item" href="devolucion.php"> Devolución Libro </a>
          <a class="dropdown-item" href="noseadonde.php"> Libros en préstamo </a> -->
          <a class="dropdown-item" href="#"> Agregar Alumno </a>
          <a class="dropdown-item" href="#"> Modificar Alumno </a>
          <a class="dropdown-item" href="#"> Eliminar Alumno </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empleado
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="perfil_profesor.php"> Prestamo de Libro </a>
          <a class="dropdown-item" href="devolucion.php"> Devolución Libro </a> -->
          <a class="dropdown-item" href="#"> Agregar Empleado </a>
          <a class="dropdown-item" href="#"> Modificar Empleado </a>
          <a class="dropdown-item" href="#"> Eliminar Empleado </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="alumno" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> Agregar Administrador </a>
          <a class="dropdown-item" href="#"> Modificar Administrador </a>
          <a class="dropdown-item" href="#"> Eliminar Administrador </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <li class="nav-link">
      <form action="busqueda_libro.php" method="GET" class="form-inline my-2 my-lg-0">
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
        <li class="nav-link">

        </li>
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Búsqueda" id="buscar" name="buscar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búscar</button>
      </form>
    </li>
  </div>
</nav>

<?php }

// NAV BAR ADMIN

  if( $_SESSION['tipo'] == "Administrador" ){ ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="bienvenida.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#"> Libros <span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="libros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Libros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="registro_libro.php"> Agregar Libro </a>
              <a class="dropdown-item" href="modificar_libro.php"> Modificar Libro </a>
              <a class="dropdown-item" href="eliminar_libro.php"> Eliminar Libro </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="alumno" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alumno
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="perfil_alumno.php"> Perfil del Alumno </a>
              <a class="dropdown-item" href="devolucion.php"> Devolución Libro </a>
              <a class="dropdown-item" href="noseadonde.php"> Libros en préstamo </a> -->
              <a class="dropdown-item" href="registro_alumno.php"> Agregar Alumno </a>
              <a class="dropdown-item" href="modificar_alumno.php"> Modificar Alumno </a>
              <a class="dropdown-item" href="eliminar_alumno.php"> Eliminar Alumno </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Empleado
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="perfil_profesor.php"> Prestamo de Libro </a>
              <a class="dropdown-item" href="devolucion.php"> Devolución Libro </a> -->
              <a class="dropdown-item" href="#"> Agregar Empleado </a>
              <a class="dropdown-item" href="#"> Modificar Empleado </a>
              <a class="dropdown-item" href="#"> Eliminar Empleado </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="alumno" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administrador
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"> Agregar Administrador </a>
              <a class="dropdown-item" href="#"> Modificar Administrador </a>
              <a class="dropdown-item" href="#"> Eliminar Administrador </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <li class="nav-link">
          <form action="busqueda_libro.php" method="GET" class="form-inline my-2 my-lg-0">
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
            <li class="nav-link">

            </li>
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Búsqueda" id="buscar" name="buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búscar</button>
          </form>
        </li>
      </div>
    </nav>

<?php } ?>

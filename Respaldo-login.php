<?php
  $n_cuenta = $_POST['n_cuenta'];
  $pass = $_POST['password'];

  include('page/conexion.php');

  $consulta = "SELECT nombre FROM alumno where num_cta = '$n_cuenta' AND password='$pass'; ";

  $query = $bd -> prepare($consulta);

  $query -> execute();

  $resultado_query = $query -> fetchAll();

  if(count($resultado_query)==1){
    echo "correcto ". $resultado_query[0][0];
    session_start();

    $_SESSION['id'] = $n_cuenta;
    $_SESSION['nombre'] = $resultado_query[0][0];

    header("Location:bienvenidaAlumno.php");

  }else{
    echo "incorrecto";
  }

  echo "<br> Password:".$consulta;

?>


3 optativas
Minimo de 24 creditos
Seminarios Espacialidad

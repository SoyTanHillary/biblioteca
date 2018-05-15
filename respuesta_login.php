<?php
  $n_cuenta = $_POST['n_cuenta'];
  $pass = $_POST['password'];

  include('page/conexion.php');

  $consulta1 = "SELECT nombre FROM alumno where num_cta = '$n_cuenta' AND password='$pass'; ";
  $consulta2 = "SELECT nombre FROM profesor where no_cuenta = '$n_cuenta' AND password='$pass'; ";
  $consulta3 = "SELECT nombre FROM admin where id_admin = '$n_cuenta' AND password='$pass'; ";

  $query1 = $bd -> prepare($consulta1);
  $query2 = $bd -> prepare($consulta2);
  $query3 = $bd -> prepare($consulta3);

  $query1 -> execute();
  $query2 -> execute();
  $query3 -> execute();

  $resultado_query1 = $query1 -> fetchAll();
  $resultado_query2 = $query2 -> fetchAll();
  $resultado_query3 = $query3 -> fetchAll();

  if(count($resultado_query1)==1){
    echo "correcto ". $resultado_query1[0][0];
    session_start();

    $_SESSION['id'] = $n_cuenta;
    $_SESSION['tipo'] = "Alumno";
    $_SESSION['nombre'] = $resultado_query1[0][0];

    header("Location:bienvenida.php");

  }
  else if(count($resultado_query2)==1){
    echo "correcto ". $resultado_query2[0][0];
    session_start();

    $_SESSION['id'] = $n_cuenta;
    $_SESSION['tipo'] = "Profesor";
    $_SESSION['nombre'] = $resultado_query2[0][0];

    header("Location:bienvenida.php");
  }
  else if(count($resultado_query3)==1){
    echo "correcto ". $resultado_query3[0][0];
    session_start();

    $_SESSION['id'] = $n_cuenta;
    $_SESSION['tipo'] = "Administrador";
    $_SESSION['nombre'] = $resultado_query3[0][0];

    header("Location:bienvenida.php");
  }
  else{
    header("Location:login.php?error=1");
  }
?>

<?php
    $host = "127.0.0.1";
    $basedatos = "biblioteca";
    $usuario = "root";
    $password = "";
    $puerto = "3306";

    try{
        $bd = new PDO("mysql:host=$host;dbname=$basedatos;port=$puerto",$usuario,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        $bd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<br>Conexion Lista";
    }catch(PDOException $e){
        echo "<br> Ocurrio un error: <br> ".$e->getMessage();
        // die("Ocurrio un error en la base de datos ");
        // $e -> getMessage();
        // echo $e;
    }
?>

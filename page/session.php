<?php
  if(isset($_SESSION['id'])){

  }else{
    header("Location:login.php?error=2");
  }
?>

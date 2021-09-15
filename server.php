<?php
  $servidor = "localhost";
  $dbname = "formulario";
  $dbusuario = "root";
  $dbsenha = "";
  $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);

  if (!$conn){
      die("Falha na conexão:".mysqli_connect_error());
  }


?>
<?php

    /* funcão que abre a conexão com o banco*/
    function open_database(){
      $con = mysqli_connect("localhost", "root", "", "trabalhophp");
      if (!$con) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        //echo "banco conectado";
        return $con;
    }

  //  $con = conectar();

  function close_database($con){
    mysqli_close($con);
  }
/* 
$con = open_database();
if($con){
    echo "Deu certo!";
}
else{
    echo "ERRO";
} */

?>
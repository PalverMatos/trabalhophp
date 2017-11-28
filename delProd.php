<?php

session_start();
if(isset($_SESSION["user"])){
    $id = $_GET['id'];
    //echo $id;

    require_once "conexao.php";
    $con = open_database();
    $sql = "DELETE FROM item WHERE id=$id";
    $rs = $con->query($sql);
    close_database($con);

    header("location:listaItens.php");
}
else{
    header("location:frmLogin.html");
    die();
}

?>
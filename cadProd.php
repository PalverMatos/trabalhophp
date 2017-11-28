<?php

session_start();
if(isset($_SESSION["user"])){
    
    $desc = trim($_GET['desc']);
    $preco = trim($_GET['preco']);
    $qtd = trim($_GET['qtd']);

    echo "$desc, $preco, $qtd";


    require_once "conexao.php";

    $con = open_database();
    $sql = "INSERT INTO item (descricao, preco, qtd) VALUES ('$desc', $preco, '$qtd')";
    $rs = $con->query($sql);
    close_database($con);

    header("location: listaItens.php");
}
else{
    header("location:frmLogin.html");
    die();
}


?>
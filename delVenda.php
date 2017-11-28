<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $cli = $_GET['cliente'];
        $item = $_GET['item'];

        require_once "conexao.php";
        $con = open_database();
        $sql = "DELETE FROM venda WHERE idCliente=$cli AND idItem=$item;";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaVendas.php");
    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
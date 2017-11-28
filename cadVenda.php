<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $cli = trim($_POST['cliente']);
        $item = trim($_POST['item']);
        $data =  date($_POST['data']);

        //echo "$cli, $item, $data";
        require_once "conexao.php";
        $con = open_database();
        $sql = "INSERT INTO venda (idCliente, idItem, dataCompra) VALUES ($cli, $item, '$data');";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaVendas.php");
    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
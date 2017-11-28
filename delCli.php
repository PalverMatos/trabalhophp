<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $id = $_GET['id'];

        require_once "conexao.php";
        $con = open_database();
        $sql = "DELETE FROM cliente WHERE id=$id";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaClientes.php");
    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
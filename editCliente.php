<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $id = trim($_POST['id']);
        $nome = trim($_POST['nome']);
        $tel = trim($_POST['tel']);
        $end = trim($_POST['end']);

        require_once "conexao.php";
        $con = open_database();
        $sql = "UPDATE cliente SET nome='$nome', telefone='$tel', endereco='$end' WHERE id=$id";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaClientes.php");

    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
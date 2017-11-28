<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $nome = trim($_POST['nome']);
        $tel = trim($_POST['tel']);
        $end = trim($_POST['end']);

        require_once "conexao.php";
        $con = open_database();
        $sql = "INSERT INTO cliente (nome, telefone, endereco) VALUES ('$nome', '$tel', '$end')";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaClientes.php");
    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
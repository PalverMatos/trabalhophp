<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        $id = trim($_POST['id']);
        $desc = trim($_POST['desc']);
        $preco = trim($_POST['preco']);
        $qtd = trim($_POST['qtd']);

        //echo "$id, $desc, $preco, $qtd";

        require_once "conexao.php";

        $con = open_database();
        $sql = "UPDATE item set descricao='$desc', preco='$preco', qtd='$qtd' WHERE id=$id";
        $rs = $con->query($sql);
        close_database($con);

        header("location: listaItens.php");

    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>
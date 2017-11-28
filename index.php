<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];
    }
    else{
        header("location:frmLogin.html");
        die();
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Home</title>

  </head>
  <body>
    
    <div class="container">
        <div class="page-header">   
            <a href="index.php" class="btn btn-link">Home</a> <br/>
            <?php echo "<span>Bem vindo $u! </span>"; ?>
            <a href="sair.php" style="float: right;" class="btn btn-link">Deslogar</a>
        </div>
        <h2> Sistema de Venda</h2>

        <a href="listaItens.php" class="btn btn-primary"> Itens </a> 
        <a href="listaClientes.php" class="btn btn-danger"> Clientes </a>
        <a href="listaVendas.php" class="btn btn-warning"> Vendas </a>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
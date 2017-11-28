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

    <title>Sistema de vendas</title>


  </head>
  <body>
    
    <div class="container">
        <h1>Cadastro de Clientes</h1>

        <div class="col-md-4">            
        <form action="cadCli.php" method="POST">
                <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" maxlength="35" class="form-control" id="nome" name="nome" placeholder="informe o nome..."
                required>
                </div>
                <div class="form-group">
                <label for="tel">Telefone</label>
                <input type="text" maxlenth="15" class="form-control" id="tel" name="tel" placeholder="Informe o telefone..."
                required>
                </div>
                
                <div class="form-group">
                <label for="end">Endereço</label>
                <input type="text" maxlength="50"  class="form-control" id="end" name="end" 
                placeholder="Informe o endereço..." required>
                </div>
                    <input type="submit" class="btn btn-default" value="Gravar">
                    <a href="listaClientes.php" class="btn btn-warning">Voltar</a>
                    
            </form>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
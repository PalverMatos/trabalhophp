<?php 

    session_start();
    if(isset($_SESSION["user"])){
        $u = $_SESSION['user'];

        require_once "conexao.php";
        $con = open_database();
        $sql = "select from query...";
        $rs = $con->query($sql);
        close_database($con);
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

    <title>Bootstrap 101 Template</title>


  </head>
  <body>
    
    <div class="container">
        <h1>Hello, world!</h1>

    </div>


    
<form action="" method="">
        <div class="form-group">
          <label for="desc">Descricao</label>
          <input type="text" maxlength="100" class="form-control" id="desc" name="desc" placeholder="Descreva o item..."
          required>
        </div>
        <div class="form-group">
          <label for="preco">Preço</label>
          <input type="text" maxlenth="7" class="form-control" id="preco" name="preco" placeholder="Informe o preço"
          required>
        </div>
        
        <div class="form-group">
          <label for="qtd">Quantidade</label>
          <input type="number" max="1000" min="1" value="1" class="form-control" id="qtd" name="qtd" 
          placeholder="Informe a quantidade disponível..." required>
        </div>
              <input type="submit" class="btn btn-default" value="Gravar">
              <a href="index.php" class="btn btn-warning">Voltar</a>
            
      </form>
      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
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

    <title>Sistema de Venda</title>


  </head>
  <body>
    
    <div class="container">
        <h1>Cadastro de Venda</h1>

        <div class="col-md-4">
        <form action="cadVenda.php" method="POST">
        <div class="form-group">
            <label for="">Clientes</label>
            <select name="cliente" class="form-control">

              <?php
                    require_once "conexao.php";
                    $con = open_database();
                    $sql = "SELECT * FROM cliente;";
                    $rs = $con->query($sql);
                    close_database($con);

                    while($row = $rs->fetch_array()){
                      $id = $row['id'];
                      echo "<option value='$id'>". $row['nome']. "</option>";
                    }
              ?>
            </select>
        </div>

        <div class="form-group" >
            <label for="">Itens</label>
            <select name="item" class="form-control">

              <?php
                    $con = open_database();
                    $sql = "SELECT * FROM item;";
                    $rs = $con->query($sql);
                    close_database($con);

                    while($row = $rs->fetch_array()){
                      $id = $row['id'];
                      echo "<option value='$id'>". $row['descricao']. "</option>";
                    }
              ?>
            </select>
        </div>
        <div class="form-group">
          <label for="data">Data</label>
          <input type="date" class="form-control" id="data" name="data" 
          required>
        </div>
        
              <input type="submit" class="btn btn-default" value="Gravar">
              <a href="listaVendas.php" class="btn btn-warning">Voltar</a>
            
      </form>
      
      
        </div>

    </div>


    

      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
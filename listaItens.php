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

    <title>Lista de itens</title>

  </head>
  <body>
    
    <div class="container">
        
        
        <div class="page-header">  
            <a href="index.php" class="btn btn-link">Home</a> <br/>
            <?php echo "<span>Bem vindo $u! </span>"; ?>
            <a href="sair.php" style="float: right;" class="btn btn-link">Deslogar</a>  
        </div>

        <h1 >Itens</h1>
        <a href="frmCadProd.php" class="btn btn-link" >Novo item</a>

        <table class="table">
            <th>Descrição</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Excluir</th>

<?php 
             require_once("conexao.php");
             $con = open_database();
             
                 $sql = "SELECT * FROM item";
                 $rs = $con->query($sql);
                 close_database($con);
                 
            if($rs->num_rows > 0 ){
                /* retorna os dados de todas as linhas da tabela */
                while($row = $rs->fetch_array()){
                    echo "<tr>";
                    echo "<td>". $row['descricao'] . "</td>";
                    echo "<td>". $row['preco'] . "</td>";
                    echo "<td>". $row['qtd'] . "</td>";
                    $id = $row['id'];
                    echo "<td><a href='frmEditItem.php?id=$id' class='btn btn-primary'> <i class='material-icons'>create</i> </a></td>";
                    echo "<td><button class='btn btn-danger' onclick='deletar($id);'> <i class='material-icons'>&#xE872;</i> </button></td>";
                    echo "</tr>";
                }
            }
?>
        </table>

    </div>


<script>

    /* o nome delete é reservado do javascript */
    function deletar(id){
       if(confirm("Clique em OK para excluir!!!")){
           window.location.href = "delProd.php?id=" + id;
       }
    }
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
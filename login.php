<?php 
    
    require_once("conexao.php");
    $username = trim( $_POST["username"]);
    $senha = trim($_POST["senha"]);

   // echo "$nome, $senha";

    $senhamd5 = md5($senha); /* md5() função que retorna a senha criptografada */

    $con = open_database();

    $sql = "SELECT * FROM adm WHERE username='$username' and senha='$senhamd5'";
    $rs = $con->query($sql);
    close_database($con);

    if($rs->num_rows > 0){
        /* a função fetch array retorna os dados de uma linha da tabela */
        $row = $rs->fetch_array();
       // var_dump($row);
       session_start();
       $_SESSION["user"] = $row["username"];  
       header("location:index.php");
    }else{
        header("location:frmLogin.html");
    }

?>
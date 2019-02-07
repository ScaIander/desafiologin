<?php 

INCLUDE 'connection.php';

$nome = $_GET['nome'];
$senha = $_GET['senha'];

$sql = "SELECT  nome, senha FROM cliente WHERE
nome = '$nome' AND senha = '$senha'";

$result = $conn->query($sql);

if($result){

    $row = $result->fetch_assoc();

    if($row){

        // header ("Location: teste.php");
        die("Logado com sucesso!");
    }
    else {

        die("Nome ou senha inválido!!");
    }
}
else{

    die("ERRO NA EXECUÇÃO");
}


?>
<?php 

INCLUDE 'connection.php';

$cpf = $_GET['cpf'];
$senha = $_GET['senha'];

$sql = "SELECT  cpf, senha FROM cliente WHERE
cpf = '$cpf' AND senha = '$senha'";

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
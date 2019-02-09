<?php 

INCLUDE 'connection.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];



$consulta = "SELECT cpf FROM cliente WHERE cpf='$cpf'";

$check = $conn->query($consulta);

$check->fetch_assoc();


if($nome=="" or $senha=="" or $cpf=="" ){


die("Algum campo ficou em branco, por favor tente novamente.");


}

else{

if($check->num_rows>0){

die("CPF já cadastrado no sistema");

}

else{

$inserirdados = "INSERT INTO cliente (nome,senha,cpf) VALUES ('$nome','$senha','$cpf') ";

$result = $conn->query($inserirdados);


if($inserirdados){

    die("Cadastrado com Sucesso!!");
}
 else{
    die("Infelizmente um erro ocorreu");
}

}

}

?>
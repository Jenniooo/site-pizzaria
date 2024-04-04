<?php

include_once("conn.php");

$method = $_SERVER['REQUEST_METHOD'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];

$sql = "INSERT INTO cadastro_cliente(nome, email, senha, bairro, rua, numero) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Use bindParam for each parameter separately
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $bairro);
$stmt->bindParam(5, $rua);
$stmt->bindParam(6, $numero);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: ";
}


?>
<?php
include_once('conn.php');

$method = $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

  
    $sql = "SELECT email, senha FROM cadastro_cliente WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

if($result){
    header("Location:../index1.php");
    exit();
}else{
    echo "Usuário ou senha inválidos!";
}
}
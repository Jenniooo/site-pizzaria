<?php
include_once("process/orders.php");
include_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Personalizado</title>
    <link rel="stylesheet" href="css/cadastrarSabor.css">
	<link rel="icon" href="img/logo2.png" type="image/x-icon">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="title-master">
<h2><span>Personalize</span> o seu</h2>
</div>
<div class="container">
        <form action="process/orders.php" method="POST">
            <label for="nome_sabor">Nome do Sabor:</label>
            <input type="text" id="nome_sabor" name="nome_sabor" required>
            <label for="preco_sabor">Preço:</label>
            <input type="text" id="preco_sabor" name="preco_sabor" required>
            <input type="submit" value="Cadastrar ">
        </form>
    </div>
</body>
</html>

<?php
include_once("templates/footer.php");
?>
<?php
  include("process/conn.php");
  $msg = "";
  
    if(isset($_SESSION['msg'])){
      $msg = $_SESSION['msg'];
      $status = $_SESSION['status'];
      //limpar a msg
      $_SESSION['msg'] = "";
      $_SESSION['status'] = "";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria do João</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo2.png" type="image/x-icon">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

	<!-- header section -->
	<header>
		<!-- <a href="#" class="logo">Food<span>Fun</span></a> -->
		<a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="index1.php">Home</a></li>
			<li><a href="dashboard.php">Pedidos</a></li>
			<li><a href="dashboard2.php">Entregues e concluídos</a></li>
			<li><a href="cadastrarSabor.php">Sabores personalizados</a></li>
			<li><a href="register.php">Relatório</a></li>
		</ul>

		<div class="h-icons">
			<a href="#"><i class='bx bx-search' ></i></a>
			<a href="index2.php"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>
	<?php 
  if ($msg !=""):?>
    <div class="alert alert-<?=$status ?>"> 
      <p> <?= $msg ?></p>
    </div>
    <?php endif; ?>



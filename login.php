<? 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <header>
  </header>
  <div class="login-container">
    <div class="right-half">
    </div>
    <div class="left-half">
      <form action="process/loginsecurity.php" method="POST">
        <span>Login</span>
        <div class="input-box">
          <input type="email" id="email" name="email" placeholder="Email" required>
          <i class='bx bxs-user' aria-hidden="true"></i>
        </div>
        <div class="input-box">
          <input type="password" id="senha" name="senha" placeholder="Senha" required>
          <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="link-container">
            <div class="input-group">
              <input type="submit" value="Entrar"></input>
          </div>
          <div class="create-account">
          <a href="cadastro.php">Não possui uma conta?
            <i class='bx bx-right-arrow-alt' style='color:#615454' ></i>
          </a>
        </div>
       
      </form>
    </div>
  </div>
  
</body>
</html>

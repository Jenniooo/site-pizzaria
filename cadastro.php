

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Já é um cliente? <a href="login.php">Login</a></p>
            <form action="process/cadastrosecurity.php" method="POST">
                <div class="input-group">
                    <label for="nome" class="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email" class="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
                </div>
                
                <div class="input-group">
                    <label for="bairro" class="bairro">Endereço(Bairro)</label>
                    <input type="endereco" id="bairro" name="bairro" placeholder="Bairro" required>
                </div>

                <div class="input-group">
                    <label for="rua" class="rua">Endereço(Rua)</label>
                    <input type="endereco" id="rua" name="rua" placeholder="Rua" required>
                </div>
                <div class="input-group">
                    <label for="numero" class="numero">Número da casa:</label>
                    <input type="endereco" id="numero" name="numero" placeholder="Número" required>
                </div>

                <div class="input-group">
                    <label for="senha" class="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <input type="submit" value="Cadastrar">
                

                

            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurorus Automóveis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/logo.fundo.png" type="image/x-icon"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">


</head>
<body>
    <?php
    include("header.php");
    ?>

    <main class="login-main">
    <div class="login-card">
        <h2 class="login-title">Criar Perfil Aurorus</h2>
        
        <form method="POST" action="perfil.php" class="login-form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome" class="login-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="login-input" required>
            </div>

            <div class="form-group">
                <label for="email" class="login-label">Email:</label>
                <input type="email" id="email" name="email" class="login-input" required>
            </div>

            <div class="form-group">
                <label for="foto" class="login-label">Foto de Perfil:</label>
                <input type="file" id="foto" name="foto" class="login-input" accept="image/*">

            </div>
            

            <div class="form-group">
                <label for="telefone" class="login-label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="login-input"> 
            </div>

            <div class="form-group">
                <label for="senha" class="login-label">Senha:</label>
                <input type="password" id="senha" name="senha" class="login-input" required>
            </div>

            <button type="submit" name="tipo_perfil" value="admin" class="btn-submit-login">Criar como Admin</button>

            <button type="submit" name="tipo_perfil" value="usuario" class="btn-submit-login">Criar Perfil</button>
            
        </form>
    </div>
</main>

</body>
</html>
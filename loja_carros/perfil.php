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

<?php
    include("header.php");
    if (!isset($_POST['nome']) || !isset($_POST['email'])) {
        header("Location: login.php");
        exit();
    }
    $thereIsAFoto = false;

    $isAdmin = $_POST['tipo_perfil'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $thereIsAFoto = true;
        $arquivo = $_FILES['foto'];
        $path = $arquivo['name'];
        
        $extensao = pathinfo($path, PATHINFO_EXTENSION);
        
        $novo_nome = md5(uniqid(time(), true)) .".$extensao";
        $diretorio = "img_contas/" . $novo_nome;

        move_uploaded_file($arquivo['tmp_name'], $diretorio);
    }
    $nome = $_POST['nome'] ?? 'Não informado';
    $email = $_POST['email'] ?? 'Não informado';
    $telefone = $_POST['telefone'] ?? 'Não informado'; 

    $arqLogin = fopen("registro_login.txt", "a");
    if ($arqLogin) {
        $dadosUsuario = ["Nome: $nome","Email: $email","Telefone: $telefone","--------------------"];

        foreach ($dadosUsuario as $linha) {
            fwrite($arqLogin, $linha . "\n");
        }

        fclose($arqLogin);
    }
?>

    <main class="perfil-main">
        <div class="perfil-card">
            
            <div class="perfil-avatar-container">
                <img src="img_contas/<?php if($thereIsAFoto): echo $novo_nome; else: echo 'pessoa.png'; endif;?>" alt="Foto de Perfil" class="perfil-avatar">
            </div>

            <h2 class="perfil-title">Perfil do Proprietário</h2>

            <div class="perfil-info-list">
                <div class="perfil-info-item">
                    <span class="perfil-label">Nome Completo</span>
                    <span class="perfil-value"><?php echo $nome; ?></span>
                </div>

                <div class="perfil-info-item">
                    <span class="perfil-label">Endereço de E-mail</span>
                    <span class="perfil-value"><?php echo $email; ?></span>
                </div>

                <div class="perfil-info-item">
                    <span class="perfil-label">Telefone de Contato</span>
                    <span class="perfil-value"><?php echo $telefone; ?></span>
                </div>

                <?php if($isAdmin){ ?>
                <div class="perfil-links-adicionais">
                    <a href="registro_login.txt" target="_blank" class="btn-logs">Ver registros de login</a>
                </div>
                <?php } ?>
            </div>
            <a href="car persona.php" class="btn-personalizar perfil-btn">Configurar Novo Opus</a>
        </div>
    </main>
    
</body>
</html>
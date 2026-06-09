<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurorus Automóveis - Configuração</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/logo.fundo.png" type="image/x-icon"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    include("header.php"); 

    if (!isset($_GET['color']) || !isset($_GET['interior'])) {
        header("Location: car persona.php");
    }
    $color = $_GET['color'];
    $interior = $_GET['interior'];
    $air = isset($_GET['air']) ? "com" : "sem";
    $banco = isset($_GET['banco']) ? "com" : "sem";
    $obs = $_GET['obs'] ?? '';
?>

    <main class="compra-main">
        <div class="compra-card">
            <h2>Pedido Confirmado!</h2>
            
            <p class="compra-resumo">
                O seu carro de cor <span class="destaque"><?php echo $color; ?></span>, 
                com interior de cor <span class="destaque"><?php echo $interior; ?></span>, 
                <span class="destaque"><?php echo $air; ?></span> ar-condicionado de última geração e 
                <span class="destaque"><?php echo $banco; ?></span> bancos aquecidos.
            </p>

            <?php if(!empty(trim($obs))): ?>
                <p class="compra-obs" style="margin-top: 15px; font-style: italic;">
                    <strong>Observações do pedido:</strong> "<?php echo htmlspecialchars($obs); ?>"
                </p>
            <?php endif; ?>

            <div class="compra-imagens">
                <?php if($color == "azul sangue de alien"): ?>
                    <div class="img-box">
                        <span class="img-label">Exterior</span>
                        <img src="imagens/BLUE_CARR.png" alt="Carro Azul">
                    </div>
                <?php elseif($color == "vermelho sangue de humano"): ?>
                    <div class="img-box">
                        <span class="img-label">Exterior</span>
                        <img src="imagens/CAR_VERMELHOR.png" alt="Carro Vermelho">
                    </div>
                <?php elseif($color == "preto da morte"): ?>
                    <div class="img-box">
                        <span class="img-label">Exterior</span>
                        <img src="imagens/CAR_BLACK.png" alt="Carro Preto">
                    </div>
                <?php elseif($color == "branco osso exposto"): ?>
                    <div class="img-box">
                        <span class="img-label">Exterior</span>
                        <img src="imagens/CARRIINHO_BLANCO.png" alt="Carro Branco">
                    </div>
                <?php endif; ?>

                <?php if($interior == "azul sangue de alien"): ?>
                    <div class="img-box">
                        <span class="img-label">Interior</span>
                        <img src="imagens/interior_azul.png" alt="Interior Azul">
                    </div>
                <?php elseif($interior == "vermelho sangue de humano"): ?>
                    <div class="img-box">
                        <span class="img-label">Interior</span>
                        <img src="imagens/assento_vermelhor.png" alt="Interior Vermelho">
                    </div>
                <?php elseif($interior == "cinza deprimido"): ?>
                    <div class="img-box">
                        <span class="img-label">Interior</span>
                        <img src="imagens/banco_cinza.png" alt="Interior Cinza">
                    </div>
                <?php endif; ?>
            </div>
            
            <a href="index.php" class="btn-personalizar">Voltar ao Início</a>
        </div>
    </main>
</body>
</html>
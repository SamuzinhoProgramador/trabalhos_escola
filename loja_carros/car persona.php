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
    <main class="conteudo-principal">
        <div class="container-form">
            <form action="compra.php" method="get">
                <h2>Personalize seu Veículo</h2>
                
                <label for="color" class="form-section-title">Cor do Exterior</label>
                <select name="color" id="color">
                    <option value="azul sangue de alien">Azul Sangue de Alien</option>
                    <option value="vermelho sangue de humano">Vermelho Sangue de Humano</option>
                    <option value="preto da morte">Preto da Morte</option>
                    <option value="branco osso exposto">Branco Osso Exposto</option>
                </select>

                <label for="interior" class="form-section-title">Acabamento Interno</label>
                <select name="interior" id="interior">
                    <option value="azul sangue de alien">Azul Sangue de Alien</option>
                    <option value="vermelho sangue de humano">Vermelho Sangue de Humano</option>
                    <option value="cinza deprimido">Cinza Deprimido</option>
                </select>

                <label class="form-section-title">Upgrades Disponíveis</label>
                <div class="radio-group">
                    <label class="radio-card">
                        <input type="checkbox" name="air"> Ar-condicionado de última geração
                    </label>

                    <label class="radio-card">
                        <input type="checkbox" name="banco"> Sistema de aquecimento de bancos
                    </label>
                </div>

                <label for="obs" class="form-section-title">Pedidos Especiais ou Observações</label>
                <textarea name="obs" id="obs" placeholder="Ex: Detalhes específicos sobre a entrega ou preferências adicionais..."></textarea>

                <button type="submit" class="btn-enviar">Confirmar Configuração</button>
            </form>
        </div>
    </main>
</body>
</html>
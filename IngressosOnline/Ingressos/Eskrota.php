<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eskrota Ingresso</title>
    
</head>
<body>
    <div class="container">
        <h1>Eskrota</h1>
        <div class="imagem">
            <img src="../img/eskrota.webp" alt="eskrota_banda">
        </div>

        <h2>Descrição do show</h2>
        <div class="descricao">
            <p>A Eskrota é uma banda brasileira de metal que mistura agressividade e técnica, com letras cruas e uma sonoridade poderosa. Com sua abordagem única e sem censura, eles estão se destacando no cenário underground com um estilo irreverente e cheio de atitude.</p>
        </div>

        <hr>

        <div class="precoGeral">
            <h3>Informações do Show</h3>
            <p class="price">Preço por ingresso: R$ 150,00</p>
            <p class="descricao">Prepare-se para uma experiência inesquecível com a banda Eskrota ao vivo no <strong>porão do rock</strong>!</p>
            <p><strong>Data:</strong> 16 de dezembro de 2024</p>
            <p><strong>Hora:</strong> 21:00 (Abertura dos portões: 18:00)</p>
            <p><strong>Local:</strong> Porão do rock,No CSB 2 Lote 8 Loja 2 Atrás do Alameda Shopping - Taguatinga, Brasília - DF.</p>
            <p><strong>Descrição:</strong>A Eskrota é uma banda brasileira de metal que se destaca por sua combinação única de brutalidade sonora e letras provocativas. Com uma proposta agressiva, a banda mistura elementos do death metal, grindcore e hardcore, criando uma identidade sonora pesada e impactante. O vocal imponente e os riffs cortantes são a marca registrada do grupo, que também se destaca por sua atitude irreverente e sem censura. Com uma presença de palco explosiva, a Eskrota está conquistando cada vez mais fãs no cenário underground, sendo uma das principais representações do metal brasileiro mais extremo.</p>

            <div class="quantity-controls">
                <button onclick="decreaseQuantity()">-</button>
                <span class="quantity" id="ticket-quantity">1</span>
                <button onclick="increaseQuantity()">+</button>
            </div>

            <a href="../carrinho/carrinho.php"><button class="buy-button" onclick="addToCart()">Adicionar ao carrinho</button></a>
        </div>
    </div>

    <footer>&copy; Direitos autorais reservados ao André. Todos os direitos reservados.</footer>

    <style>
        /* Estilos Gerais */
        body {
            background-color: #1e1e1e;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1, h2, h3, h4 {
            text-align: center;
            color: #f5a623;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #2c2c2c;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }

        .imagem img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
            display: block;
            margin: 0 auto;
        }

        .descricao {
            font-size: 16px;
            line-height: 1.6;
            text-align: center;
            margin: 20px 0;
        }

        hr {
            border: none;
            border-top: 2px solid #444;
            margin: 20px 0;
        }

        .precoGeral {
            border: 2px solid #444;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .quantity-controls button {
            width: 30px;
            height: 30px;
            font-size: 20px;
            color: #e0e0e0;
            background-color: #f5a623;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .quantity-controls button:hover {
            background-color: #d48e1d;
        }

        .quantity {
            font-size: 18px;
            width: 30px;
            text-align: center;
        }

        .price {
            font-size: 20px;
            color: #f5a623;
        }

        .buy-button {
            background-color: #f5a623;
            color: #1e1e1e;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .buy-button:hover {
            background-color: #d48e1d;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
            text-align: center;
        }
    </style>

    <script>
    const ticketPrice = 150; // Atualizado para o preço correto
    let quantity = 1;

    function updateTotalPrice() {
        document.getElementById("total-price").textContent = (ticketPrice * quantity).toFixed(2);
    }

    function increaseQuantity() {
        quantity++;
        document.getElementById("ticket-quantity").textContent = quantity;
        updateTotalPrice();
    }

    function decreaseQuantity() {
        if (quantity > 1) {
            quantity--;
            document.getElementById("ticket-quantity").textContent = quantity;
            updateTotalPrice();
        }
    }

    function buyTickets() {
        // Redirecionar diretamente para a página de vendas
        window.location.href = './Vendas/visao/index.php';
    }
    </script>
</body>
</html>

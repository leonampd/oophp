Vamos criar um checkout de uma loja virtual utilizando orientação a objetos! Seu objetivo é receber os dados de um formulário html contendo:

- 3 Produtos
    - nome
    - valor
    - valor do frete
    - quantidade
- Cliente
    - nome
    - email
- Dados de pagamento (cartão de crédito)
    - número do cartão
    - código verificador
    - data de expiração
    - nome do titular

Recebidos os dados, você precisa criar abstrações para operar cada uma dessas informações. Exemplo de possíveis abstrações para este problema:

- Cliente.php
- Produto.php
- CartaoCredito.php

Definidas as abstrações básicas, crie uma classe responsável pelo carrinho de compras. Essa classe deve conseguir:

- listar os itens do carrinho (produtos)
- retornar a quantidade de itens dentro do carrinho
- calcular o valor total da compra baseado no valor dos produtos + frete

Obs: Lembre-se de usar todo o seu conhecimento adquirido sobre OO até aqui (desde que faça sentido é claro):

- abstração (classes - abstratas ou não)
- composição de objetos
- herança
- encapsulamento
- polimorfismo

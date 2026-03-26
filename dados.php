<?php

//daods de menu
$colecaoMenu = array(
    "teste2" => "Home",
    "produtos" => "Produtos",
    "contato" => "Contato",
    "sobre" => "Sobre",
    "servicos" => "Serviços",
    "blog" => "Blog",
    "portfolio" => "Portfólio"
);
$colecaoProdutos = array(
    array(
        "nome" => "Amendoim japonês Dori 90g",
        "preco" => '2.90',
        "descricao" => "Amendoim japonês crocante e saboroso, perfeito para petiscar a qualquer hora do dia.",
        "img" => "img/amendoim.webp"
    ),
    array(
        "nome" => "Biscoito de arroz japonês Sanko 100g",
        "preco" => '4.50',
        "descricao" => "Biscoito de arroz japonês crocante e saboroso, ideal para acompanhar uma xícara de chá.",
        "img" => "img/biscoito_de_arroz.webp"
    ),
    array(
        "nome" => "Chá verde em pó Matcha 50g",
        "preco" => '15.00',
        "descricao" => "Chá verde em pó Matcha 50g, perfeito para momentos de tranquilidade.",
        "img" => "img/chaverde.jpg"
    ),
    array(
        "nome" => "Salgadinho de peixe japonês Kameda 80g",
        "preco" => '3.20',
        "descricao" => "Salgadinho de peixe japonês Kameda 80g, crocante e cheio de sabor, ideal para petiscar.",
        "img" => "img/salgadinho.jpg"
    ),
    array(
        "nome" => "Algas marinhas nori para sushi 10 folhas",
        "preco" => '8.00',
        "descricao" => "Algas marinhas nori para sushi 10 folhas, perfeitas para preparar deliciosos sushis em casa.",
        "img" => "img/alga.jpg"
    )
);
   function exibirProdutos() {
    foreach ($colecaoProdutos as $key => $value) {
        echo '<div>';
        echo '<img src="'. $value['img'] . '" alt="' . $value['nome'] . '">';
        echo '<h3>' . $value['nome'] . '</h3>';
        echo '<p>' . $value['descricao'] . '</p>';
        echo '<h4><strong>R$ ' . $value['preco'] . '</strong></h4>';
        echo '</div>';
    }
    }
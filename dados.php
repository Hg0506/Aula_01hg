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
        "img" => "/Aula_01hg/img/amendoim.webp"
    ),
    array(
        "nome" => "Biscoito de arroz japonês Sanko 100g",
        "preco" => '4.50',
        "descricao" => "Biscoito de arroz japonês crocante e saboroso, ideal para acompanhar uma xícara de chá.",
        "img" => "/Aula_01hg/img/biscoito_de_arroz.webp"
    ),
    array(
        "nome" => "Chá verde em pó Matcha 50g",
        "preco" => '15.00',
        "descricao" => "Chá verde em pó Matcha 50g, perfeito para momentos de tranquilidade.",
        "img" => "/Aula_01hg/img/chaverde.jpg"
    ),
    array(
        "nome" => "Salgadinho de peixe japonês Kameda 80g",
        "preco" => '3.20',
        "descricao" => "Salgadinho de peixe japonês Kameda 80g, crocante e cheio de sabor, ideal para petiscar.",
        'img' => "/Aula_01hg/img/salgadinhoKameda.jpg"
    ),
    array(
        "nome" => "Algas marinhas nori para sushi 10 folhas",
        "preco" => '8.00',
        "descricao" => "Algas marinhas nori para sushi 10 folhas, perfeitas para preparar deliciosos sushis em casa.",
        "img" => "/Aula_01hg/img/alga.jpg"
    )
);
   function exibirProdutos() {
    global $colecaoProdutos;
    echo '<div class="products">';
    foreach ($colecaoProdutos as $key => $value) {
        echo '<div> <a href="produto.php?id=' . $key . '">';
        echo '<img src="'. $value['img'] . '" alt="' . $value['nome'] . '">';
        echo '<h3>' . $value['nome'] . '</h3>';
        echo '<h3><strong>R$ ' . $value['preco'] . '</strong></h3>';
        echo '</a></div>';
    }
    echo '</div>';
   }
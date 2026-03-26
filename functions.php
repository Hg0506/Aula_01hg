<?php

function EscreverTela($texto) {
    //bloco de código
echo $texto . "<br>";
}

function SomarValores($valor1, $valor2) {
    //recebe os valores, soma e retorna o resultado
    return $valor1 + $valor2;
}

// $total = SomarValores(10, 20);
// EscreverTela($total);

function HeaderSite($titulo, $menu) {
   $header =
   '<!DOCTYPE html>
    <html lang="PT-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $titulo . '</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
<nav>
    <ul>';
    // Gerar os itens do menu dinamicamente
        foreach ($menu as $key => $value) {
          $header .= '  <li><a href="' . $key . '.php">' . $value . '</a></li>';
        }
        $header .='</ul>
</nav>
</header>
<body>';
// Imprime o header do site
echo $header;

function FooterSite() {
    $footer = '<footer>
    <p>©Copyright &copy; 2024 - Loja de Japonesas</p>
</footer>';
    echo $footer;

}

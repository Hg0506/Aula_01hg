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

function HeaderSite($titulo) {
   echo
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
    <ul>
        <li><a href="teste2.php">Home</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="sobre.php">Sobre</a></li>
    </ul>
</nav>
</header>

<footer>
    <p>©Copyright &copy; 2024 - Loja de Japonesas</p>
</footer>
<body>';

}

?>
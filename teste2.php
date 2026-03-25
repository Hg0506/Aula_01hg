<?php
include_once 'functions.php';
include_once 'dados.php';

// Chamando a função para exibir o header do site
HeaderSite('Loja de Japonesas');

EscreverTela('<h1>Bem-vindo à loja de japonesas!</h1>');
$total = SomarValores(10, 20);
EscreverTela('<h2>Total: R$ ' . $total . '</h2>');

for ($i = 0; $i < 10; $i++) {
?>
<div>
    <img src="img/amendoim.webp" alt="Amendoim">
    <h3>Amendoim japonês Dori 90g</h3>
    <h3><strong>R$ 2,90</strong></h3>
</div>
<?php 
}
?>

<footer>
    <p>©Copyright &copy; 2024 - Loja de Japonesas</p>
</footer>

</body>
</html>
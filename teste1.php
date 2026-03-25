<?php

// Comentário de linha única
/*
Comentário de múltiplas linhas
*/  

// Imprime "Olá Mundo!" na tela
echo "Olá Mundo!";
print "<h1>Olá Mundo!</h1>";
print_r("Olá Mundo!");

// Variáveis
$nome = "João";
$sobrenome = 'Silva';
$nomeCompleto = $nome.$sobrenome;
$idade = (int) 30;

echo 'Olá, $nomeCompleto!';
echo "Olá, $nomeCompleto!";

// Constantes
define('PI', 3.14);

define('DBHOST', 'localhost');
define('DBNAME', 'hgbanco');
define('DBUSER', 'root');
define('DBPASS', '');

// Constantes de sistema
TRUE; 
FALSE;
NULL;

//Arrays
$colecaoAnimais = array("cachorro", "gato", "pássaro");
$frutas = array("maçã", "banana", "laranja");   
$numeros = [1, 2, 3, 4, 5];

var_dump($colecaoAnimais); // Exibe informações detalhadas sobre a variável, incluindo tipo e valor
print_r($frutas); // Exibe informações legíveis sobre a variável, útil para arrays e objetos
var_dump($numeros);

//prá bunito
echo '<pre>';
print_r($colecaoAnimais);
echo '</pre>';


?>



<ul>

<?php
for ($i = 0; $i < count($colecaoAnimais); $i++) {
    $animal = $colecaoAnimais[$i];
?>
<li><?php echo $animal; ?></li>
<?php 
}
?>

</ul>
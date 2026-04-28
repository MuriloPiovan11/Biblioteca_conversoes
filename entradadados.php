<?php

require_once "bibliotecafuncoes.php";

use function conversao\dolar;
use function conversao\iene;
use function conversao\peso;
use function conversao\euro;
use function conversao\libra;

echo "A conversão do dólar deu: ", dolar(1, 5);
echo "\nA conversão do iene deu: ", iene(100, 0.031);
echo "\nA conversão do peso deu: ", peso(1000, 0.0035);
echo "\nA conversão do euro deu: ", euro(1, 5.85);
echo "\nA conversão da libra deu: ", libra(1, 6.74);
?>
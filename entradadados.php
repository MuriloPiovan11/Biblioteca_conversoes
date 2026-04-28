<?php

require_once "bibliotecafuncoes.php";

use function conversao\dolar;
use function conversao\iene;
use function conversao\peso;
use function conversao\euro;
use function conversao\libra;
use function geometria\Ar_circulo;
use function geometria\Ar_quadrado;
use function geometria\Ar_triangulo;
use function geometria\Ar_trapezio;
use function geometria\Ar_retangulo;

echo "A conversão do dólar deu: ", dolar(1, 5);
echo "\nA conversão do iene deu: ", iene(100, 0.031);
echo "\nA conversão do peso deu: ", peso(1000, 0.0035);
echo "\nA conversão do euro deu: ", euro(1, 5.85);
echo "\nA conversão da libra deu: ", libra(1, 6.74);

echo "\nA area do quadrado é: ", Ar_quadrado(5);
echo "\nA area do circulo é: ", Ar_circulo(5);
echo "\nA area do triangulo é: ", Ar_triangulo(5,6);
echo "\nA area do trapezio é: ", Ar_trapezio(5, 6, 7);
echo "\nA area do retangulo é: ", Ar_retangulo(5, 6);

?>
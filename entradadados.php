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
use function saude\IMC;
use function saude\Ideal_agua;
use function saude\frequencia_caria;
use function saude\libras_quilo;
use function saude\calorias_basais;

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

echo "\nO seu imc é: ", IMC(70, 1.70);
echo "\nSeu consumo ideal de agua é: ", Ideal_agua(70);
echo "\nO peso em quilo é: ", libras_quilo(120);
echo "\nSua frequencia cardiaca é: ", frequencia_caria(19);
echo "\nSuas calorias basais é: ", calorias_basais(170, 80, "Masculino",20);

?>
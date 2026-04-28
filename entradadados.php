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

$op = " ";
while ($op != 5){
    echo "\n====Menu de principal====\n1-Conversão para reais\n2-Geometria\n3-Saúde\n5-Sair\n";
    $op = readline("Digite sua opção: ");
    switch ($op) {
        case 1:
            echo "\n====Menu de Conversão====\n1-Dolar\n2-Iene\n3-Peso argentino\n4-Euro\n5-Libra esterlina\n6-Sair\n";
            $op = readline("Digite sua opção: ");
            switch($op){    
            case 1: 
                $dolar = readline("Digite o valor em dólar: ");
                $cotacao = readline("Digite o valor da cotação: ");
                echo "O valor em reais é: ", dolar($dolar, $cotacao);
                break;
            case 2:
                $iene = readline ("Digite o valor em iene: ");
                $cotacao = readline("Digite o valor da cotação: ");
                echo "O valor em reais é: ", iene($iene, $cotacao);
                break;
            case 3:
                $peso = readline ("Digite o valor em peso: ");
                $cotacao = readline("Digite o valor da cotação: ");
                echo "O valor em reais é: ", peso($peso, $cotacao);
                break;
            case 4:
                $euro = readline ("Digite o valor em euro: ");
                $cotacao = readline("Digite o valor da cotação: ");
                echo "O valor em reais é: ", euro($euro, $cotacao);
                break;
            case 5:
                $iene = readline ("Digite o valor em libra: ");
                $cotacao = readline("Digite o valor da cotação: ");
                echo "O valor em reais é: ", libra($iene, $cotacao);
                break;
            default:
            echo "OPção inávalida...";
                break;
                }
            
            case 2:
                echo "\n====Menu de Geometria====\n1-Area do quadrado\n2-Area do circulo\n3-Area do triangulo\n4-Area do trapezio\n5-Area do retangulo\n";
                $op = readline("Digite sua opção: ");   
                switch ($op){
                case 1: 
                    $Ar_quad = readline("Digite o valor do lado: ");
                    echo "O valor da area do quadrado é: ", Ar_quadrado($Ar_quad);
                    break;
                case 2:
                    $Ar_circulo = readline ("Digite o valor do raio: ");
                    echo "O valor da area do circulo é: ", Ar_circulo($Ar_circulo);
                    break;
                case 3:
                    $Ar_triangulo = readline ("Digite o valor da base do triangulo: ");
                    $Ab_triangulo = readline("Digite o valor da altura do triangulo: ");
                    echo "O valor da area do triangulo é: ", Ar_triangulo($Ar_triangulo, $Ab_triangulo);
                    break;
                case 4:
                    $Ar_trapezio = readline ("Digite o valor da base (B): ");
                    $Ab_trapezio = readline ("Digite o valor da base (b): ");
                    $Ac_trapezio = readline ("Digite o valor da altura: ");
                    echo "O valor da area do trapezio é: ", Ar_trapezio($Ar_trapezio, $Ab_trapezio, $Ac_trapezio);
                    break;
                case 5:
                    $Ab_retangulo = readline ("Digite o valor da base do retangulo: ");
                    $Ac_retangulo = readline ("Digite o valor da altura do retangulo: ");
                    echo "O valor da area do retangulo é: ", Ar_retangulo($Ac_retangulo, $Ab_retangulo);
                    break;
                default:
                echo "OPção inávalida...";
                break;
            }
            case 3:
                echo "\n====Menu de conversão====\n1-IMC\n2-Consumo ideal de água\n3-Frequncia cardiaca\n4-Libra pra Quilo\n5-Calorias basais\n";
                $op = readline("Digite sua opção: ");
                switch ($op){
                case 1: 
                    $Altura = readline("Digite sua altura: ");
                    $peso = readline("Digite o seu peso");
                    echo "O seu IMC é: ", IMC($peso, $Altura);
                    break;
                case 2:
                    $peso = readline ("Digite o seu peso: ");
                    echo "O seu consumo idela de água é: ", Ideal_agua($peso);
                    break;
                case 3:
                    $idade = readline ("Digite sua idade: ");
                    echo "A sua frequencia cardiaca maximo é: ", frequencia_caria($idade);
                    break;
                case 4:
                    $libra = readline ("Digite o valor em libra: ");
                    echo "O valor em quilo é: ", libras_quilo($libra);
                    break;
                case 5:
                    $altura = readline ("Digite sua altura: ");
                    $peso = readline ("Digite seu peso: ");
                    $sexo = readline("Digite seu sexo: ");
                    $idade = readline ("Digite sua idade: ");
                    echo "O Seu consumo de calorias basais é: ", calorias_basais($altura, $peso, $sexo, $idade);
                    break;
                default:
                echo "OPção inávalida...";
                break;
            }
        }
    }

?>
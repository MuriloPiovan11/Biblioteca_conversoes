<?php
namespace conversao {
    function dolar($valor, $cotadolar){
        return $valor * $cotadolar;
    }
    function iene($valor, $cotaiene){
        return $valor * $cotaiene;
    }
    function peso($valor, $cotapeso){
        return $valor * $cotapeso;
    }
    function euro($valor, $cotaeuro){
        return $valor * $cotaeuro;
    }
    function libra ($valor, $cotalibra){
        return $valor * $cotalibra;
    }
}
namespace geometria{
    function Ar_quadrado($lado){
        return $lado * $lado;
    }
    function Ar_retangulo($altura, $base){
        return $altura * $base; 
    }
    function Ar_triangulo($base, $altura){
        return ($base * $altura)/2;
    }
    function Ar_circulo($raio){
        return 3.14 * ($raio * $raio);
    }
    function Ar_trapezio($base_menor, $base_maior, $altura){
        return (($base_maior + $base_menor)*$altura)/2;
    
    }
}
namespace saude{
    function IMC($peso, $altura){
        return $peso / ($altura * $altura);
    }
    function Ideal_agua($peso){
        return $peso * 0.035;
    }
    function frequencia_caria($idade){
        return 220 - $idade;
    }
    function libras_quilo($libra){
        return $libra * 0.453592;
    }
    function calorias_basais($altura, $peso, $sexo, $idade){
    if ($sexo == "Masculino"){
        return 66.5 + (13.75 * $peso)+(5.003 * $altura) - (6.75 * $idade);
    }else {
        return 655.1 + (9.563 * $peso)+(1.85 * $altura) - (4.676 * $idade);
}
}
}

?>
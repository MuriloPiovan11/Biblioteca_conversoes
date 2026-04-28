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
?>
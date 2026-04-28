<?php

namespace matematica{
    function somar($a, $b){
        return $a+$b;
        }
    function Subtrair($a, $b){
        return $a - $b;
        }
    function Dividir($a, $b){
        return $a/$b;
        }
    function multiplicar($a,$b){
        return $a*$b;
        }
    function quadrado($a, $b){
        return $a*$a ." ". $b*$b;
        }

    }

namespace texto{
    function concatenar($nome, $sobrenome){
        return $nome . " " . $sobrenome;
        }
    }

namespace logica {
    function verifica_idade($idade){
        if ($idade >= 18){
            return "Você é maior de idade";
        }else {
            return "Você é menor de idade";
        }

        }
    function TG($idade, $sexo){
        if ($idade >= 18 && $sexo = "Masculino"){
            return "Você está apto a servir";
        } else{
            return "Você não poderá servir";
        } 
    }
}

?>
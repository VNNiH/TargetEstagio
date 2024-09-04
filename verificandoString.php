<?php 
    //ENTRADA PRÉ DEFINIDA
    $stringDef = "Ananindeua";
    //CONTADOR PARA AS OCORRENCIAS DA LETRA A
    $count = 0;
    for($i = 0; $i < strlen($stringDef); $i++){
        //TRANSFORMANDO TODAS AS LETRAS PARA UM PADRÃO PARA QUE NAO OCORRA CASE SENSITIVE
        if(strtolower($stringDef[$i])== 'a'){
            $count++;
        }
    }
    //IMPRIMINDO OCORRENCIAS JUNTO COM A ENTRADA DEFINIDA PELO USUARIO
    echo "Em {$stringDef}, a letra 'a' aparece $count" . " vezes";
?>

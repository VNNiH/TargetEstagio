<?php 
    // Função para verificar se um número pertence à sequência de Fibonacci
    function pertenceFibonacci($numero) {
        // Definindo os dois primeiros valores da sequência
        $a = 0;
        $b = 1;
    
        // Caso o número informado seja 0 ou 1, ele pertence à sequência
        if ($numero == $a || $numero == $b) {
            return true;
        }
    
        // Calculando os próximos valores da sequência de Fibonacci
        while ($b < $numero) {
            $temp = $b;
            $b = $a + $b;
            $a = $temp;
        }
    
        // Verifica se o número informado é igual ao último número da sequência calculada
        return $b == $numero;
    }
    
    // Número a ser verificado
    $numero = 123123;
    
    // Verificando se o número pertence à sequência de Fibonacci
    if (pertenceFibonacci($numero)) {
        echo "O número $numero pertence à sequência de Fibonacci.";
    } else {
        echo "O número $numero NÃO pertence à sequência de Fibonacci.";
    }
  
?>

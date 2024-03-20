<?php

Copy code
<?php

// Função para verificar aceitação com base no sexo e idade
function verificarAceitacao($nome, $sexo, $idade) {
    if ($sexo == 'maria' && $idade < 25) {
        echo "$nome ACEITA";
    } else {
        echo "$nome NÃO ACEITA";
    }
}

// Função para imprimir números em ordem decrescente
function imprimirDecrescente($num1, $num2, $num3) {
    $numeros = array($num1, $num2, $num3);
    rsort($numeros);
    echo implode(", ", $numeros);
}

// Função para calcular e verificar aprovação do aluno
function verificarAprovacao($notas) {
    $media = array_sum($notas) / count($notas);
    if ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}

?>
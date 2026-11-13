<?php

$min = (int) readline("Informe o valor mínimo do intervalo: ");
$max = (int) readline("Informe o valor máximo do intervalo: ");

$numAleatorio = random_int($min, $max);
$numTentativas = 0;

do {
    $chute = (int) readline("\nDigite um número: ");
    $numTentativas++;

    if ($chute === $numAleatorio) {
        echo "Você venceu\n";
        echo "Você precisou de $numTentativas para acertar o número\n";
    } else {
        echo "Você perdeu\n";

        if ($chute > $numAleatorio) {
            echo "Você chutou mais alto que o número certo\n";
        } else {
            echo "Você chutou mais baixo que o número certo\n";
        }
    }
} while ($chute !== $numAleatorio);

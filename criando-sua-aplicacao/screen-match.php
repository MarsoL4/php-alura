<?php

echo "Bem-vindo ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 9 + 6 + 7 + 5;
$somaDeNotas += 7.5;

// Outros Exemplos:
// $somaDeNotas -= 2; 
// $somaDeNotas /= 2; 
// $somaDeNotas *= 2; 
// $somaDeNotas **= 2;  // Potência
// $somaDeNotas %= 2; // Resto da Divisão

$notaFilme = $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2010;

// Outros Exemplos:
// $incluidoNoPlano = $planoPrime && $anoLancamento < 2010; // Se ambas condições true

echo $nomeFilme . " - " . $anoLancamento . " (" . $notaFilme . ")";
<?php

echo "Bem-vindo ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; // $argv contém os argumentos passados via terminal ao script; $argv[1] é o primeiro valor informado após o nome do arquivo

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

echo "Nome do Filme: $nomeFilme \nNota do Filme: $notaFilme \nAno de Lançamento: $anoLancamento";
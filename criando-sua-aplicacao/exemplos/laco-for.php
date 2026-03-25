<?php

// Explicação do For em PHP:
// for (inicializacao; condicao da repeticao; incremento) {

// }

// Exemplo de uso:
for ($contador = 1; $contador < $argc; $contador += 1) { // O laço For só irá parar quando o contador for maior que a quantidade de parametros recebidos no terminal ao executar o codigo
    $somaDeNotas += $argv[$contador];
}
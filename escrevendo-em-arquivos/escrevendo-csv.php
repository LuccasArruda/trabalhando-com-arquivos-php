<?php

$testesInsercao = file('arquivo-gerado.txt');

$arquivoCsv = fopen('csv-teste-insercao.csv', 'rw');

foreach($testesInsercao as $teste){
    $linha = [$teste, 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
}
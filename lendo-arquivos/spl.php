<?php

$arquivo = new SplFileObject('../escrevendo-em-arquivos/csv-teste-insercao.csv');

while(!$arquivo->eof()){
    $linha = $arquivo->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivo->getCTime());

echo 'Criado em: ' . $data->format('d/m/y - h:m:s');
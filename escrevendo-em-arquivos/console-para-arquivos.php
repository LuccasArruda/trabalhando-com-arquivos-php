<?php

// $teclado = fopen('php://stdin', 'r'); //independente do modo será modo de leitura por causa do stdin

// $teclado = fopen('php://stdin', 'r'); // É a mesma coisa que o STDIN

$novaString = PHP_EOL . fgets(STDIN);

file_put_contents('arquivo-gerado.txt', $novaString, FILE_APPEND);

echo file_get_contents('arquivo-gerado.txt');
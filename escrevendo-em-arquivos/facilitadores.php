<?php

$arquivo = "arquivo-gerado.txt";
$curso = "\nTeste de Inserчуo";

file_put_contents($arquivo, $curso, FILE_APPEND); // Utiliziar | para concatenar flags
echo file_get_contents($arquivo);
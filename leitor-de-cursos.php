<?php
$arquivo = fopen('lista-de-cursos.txt', 'read');

while(!feof($arquivo)){
    $curso = fgets($arquivo);
    echo $curso.PHP_EOL;
}

fclose($arquivo);
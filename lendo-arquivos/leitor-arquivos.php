<?php

$arquivo = fopen('lista-de-cursos.txt', 'r');

$qtdBytesCaracteres = filesize('lista-de-cursos.txt');

$conteudo = fread($arquivo, $qtdBytesCaracteres);
//limite de memória utilizado pelo PHP = 128mb

echo $conteudo;


fclose($arquivo);
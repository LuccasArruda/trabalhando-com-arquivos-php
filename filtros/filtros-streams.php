<?php
require 'meu-filtro.php';

$arquivo = fopen('lorem-ipsum.txt', 'r');

stream_filter_register('alura.filtro', MeuFiltro::class);
// stream_filter_append($arquivo, 'string.toupper'); //transforma todos os caracteres em maiúsculo
stream_filter_append($arquivo, 'alura.filtro'); //transforma todos os caracteres em maiúsculo


echo fread($arquivo, filesize('lorem-ipsum.txt'));
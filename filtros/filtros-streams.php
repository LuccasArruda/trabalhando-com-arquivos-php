<?php
require 'meu-filtro.php';

$arquivo = fopen('lorem-ipsum.txt', 'r');

stream_filter_register('alura.filtro', MeuFiltro::class);
// stream_filter_append($arquivo, 'string.toupper'); //transforma todos os caracteres em mai�sculo
stream_filter_append($arquivo, 'alura.filtro'); //transforma todos os caracteres em mai�sculo


echo fread($arquivo, filesize('lorem-ipsum.txt'));
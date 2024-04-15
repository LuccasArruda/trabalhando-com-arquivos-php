<?php

// $arquivo = fopen('arquivo-gerado.txt', 'w'); // coloca o cursor no início do arquivo
$arquivo = fopen('arquivo-gerado.txt', 'a'); // coloca o cursor no final do arquivo

$curso = "\nCurso de Delphi bÃ¡sico para iniciantes";

fwrite($arquivo, $curso, 29);

fclose($arquivo);
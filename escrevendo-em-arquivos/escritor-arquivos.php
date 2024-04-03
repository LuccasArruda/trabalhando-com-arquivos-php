<?php

$arquivo = fopen('arquivo-gerado.txt', 'w');

$curso = 'Curso de Delphi básico para iniciantes';

fwrite($arquivo, $curso, 29);

fclose($arquivo);
<?php

// $tela = fopen('php://stderr', 'w');
// $tela = fopen('php://stdout', 'w');

// fwrite($tela, 'Olá mundo!');
// fwrite(STDOUT, 'Olá mundo!');
fwrite(STDERR, 'Olá mundo!'); 

// ao utilizar o STDERR (ou o wrapper php://stderr), os passam pelo buffer ob_start(); (output buffer)
// caso utilize o STDOUT (ou o wrapper php://stdout), os valores NÃO passam pelo buffer ob_start(); 

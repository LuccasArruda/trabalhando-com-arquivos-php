<?php

// $tela = fopen('php://stderr', 'w');
// $tela = fopen('php://stdout', 'w');

// fwrite($tela, 'Ol� mundo!');
// fwrite(STDOUT, 'Ol� mundo!');
fwrite(STDERR, 'Ol� mundo!'); 

// ao utilizar o STDERR (ou o wrapper php://stderr), os passam pelo buffer ob_start(); (output buffer)
// caso utilize o STDOUT (ou o wrapper php://stdout), os valores N�O passam pelo buffer ob_start(); 

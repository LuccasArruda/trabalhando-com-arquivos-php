<?php

$pasta = dir('../escrevendo-em-arquivos');

echo '=================================' . PHP_EOL; 
echo 'Conteúdos da pasta: ' . $pasta->path . PHP_EOL;
echo '=================================' . PHP_EOL; 

while($arquivo = $pasta->read()){
    echo $arquivo . PHP_EOL;
}
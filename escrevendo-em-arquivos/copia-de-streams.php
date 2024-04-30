<?php

$zip = fopen('zip://lendo-arquivos.zip', 'r');
stream_copy_to_stream($zip, STDOUT);
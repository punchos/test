<?php
function readMyFile($file) {
    $handler = fopen($file, 'r');
    //$lines = [];
    while(!feof($handler)) {
        @yield trim(fread($handler, 20044));
    }

    fclose($handler);
    //return $lines;
}
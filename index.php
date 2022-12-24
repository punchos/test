<?php
$time = microtime();
require 'readfile.php';

$file = 'file.csvsdfsdf';
$cnt = 0;
foreach (readMyFile($file) as $line) {
    preg_match("/\n{3}/", $buffer, $matches);

    if (count($matches)) {
        print ".";
        $buffer = "";
    } else {
        
    }

    $cnt++;
}
echo $cnt.PHP_EOL;

require 'memomry.php';

echo microtime() - $time.' sec';

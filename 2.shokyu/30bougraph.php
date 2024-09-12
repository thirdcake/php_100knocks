<?php

echo 'input number: ';
$num = trim(fgets(STDIN));
echo array_reduce(range(1,$num), fn($c,$i)=>($c.'*'), '').PHP_EOL;


<?php

echo "Hello" . "\n";

$name = 'Jurgita';
echo <<<EOS
Hello $name.
Goodbye!
EOS;

print("\n");
$a = 5;
$b = 10;
echo ($a - $b);

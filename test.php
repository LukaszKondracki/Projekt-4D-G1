<?php 

$a = 64;
$b = 'Bob';

echo 'Person named {$b} is $a years old';
echo '<br>';
echo "Person named $b is $a years old"; # interpolacja
echo '<br>';
echo 'Person named ' . $b . ' is ' . $a . ' years old'; # konkatenacja
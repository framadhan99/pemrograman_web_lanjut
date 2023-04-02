<?php
function sayHello(string $name, $filter)
{
    $fullName = $filter($name);
    echo "Hi $fullName" . PHP_EOL;
}

function sampleName(string $name)
{
    return "My name is $name";
}

sayHello("Gina", "strtoupper");
sayHello("Gina", "strtolower");
?>
<?php
function sayGoodBye(string $nama, $filter)
{
    $fullName = $filter($nama);
    echo "Good Bye $fullName" . PHP_EOL;

}

sayGoodBye("Gina", function (string $nama): string {
    return strtoupper($nama);
});
?>
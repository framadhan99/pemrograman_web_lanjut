<?php
function perkenalan($nama, $salam = "Assalammualaikum")
{
    echo $salam . ", ";
    echo "perkenalkan, nama saya " . $nama . PHP_EOL;
    echo "senang berkenalkan dengan anda";
}

?>

<?php
perkenalan("Gina");
?>
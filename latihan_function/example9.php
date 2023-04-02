<?php
$nama_depan = "Gina";
$nama_belakang = "Nufus";

$sayHi = function () use ($nama_depan, $nama_belakang) {
    echo "Hi $nama_depan $nama_belakang" . PHP_EOL;
};

$sayHi();
?>
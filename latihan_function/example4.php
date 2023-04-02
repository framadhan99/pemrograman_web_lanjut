<?php
function nilaiAkhir(int $nilai): string
{
    if ($nilai >= 88) {
        return "A";

    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";

    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$totalNilai = nilaiAkhir(30);
var_dump($totalNilai);
?>
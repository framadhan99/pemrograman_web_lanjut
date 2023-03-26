<?php
$nilai = "E";

switch ($nilai) {
    case "A":
        echo "Selamat anda lulus dengan predikat sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Mohon maaf, anda belum lulus" . PHP_EOL;
        break;
    default:
        echo "Silahkan coba lagi di semester depan" . PHP_EOL;

}
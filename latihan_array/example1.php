<?php
$nama = ["Gina", "Khayatun", "Nufus"];
var_dump($nama[0]);
// mengubah index ke 0
$nama[0] = "Gita";
var_dump($nama);
// menghapus data
unset($nama[1]);
var_dump($nama);
// menambahkan data array
$nama[] = "Gina";
var_dump($nama);
var_dump(count($nama));
?>
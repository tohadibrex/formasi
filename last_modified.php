<?php
// Menentukan path ke file CSV
$file = 'semua_data_gabungan.csv';

// Mendapatkan waktu modifikasi terakhir dari file CSV
$lastModified = filemtime($file);

// Mengembalikan waktu dalam format UTC
echo $lastModified;
?>

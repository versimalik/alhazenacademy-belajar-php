<?php

$teks = " Selamat datang di kelas PHP ";

echo "Panjang string pada variable \$teks adalah " . strlen($teks) . PHP_EOL;
echo "Jumlah kata pada variable \$teks adalah " . str_word_count($teks) . PHP_EOL;
echo "Posisi kata 'di' ada pada posisi ke-" . strpos($teks, "di") . PHP_EOL;
echo "$teks = " . strtoupper($teks) . PHP_EOL;
echo "$teks = " . strtolower($teks) . PHP_EOL;
echo strrev($teks) . PHP_EOL;
echo trim($teks) . PHP_EOL;
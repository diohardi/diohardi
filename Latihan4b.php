<?php

echo "<b>Daftar Negara ASEAN awal</b>";
$negara = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<ul>";
foreach ($negara as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";

echo "<b> Daftar Negara ASEAN baru</b>";
array_push($negara, "Laos", "Filipina", "Myanmar");

echo "<ul>";
foreach ($negara as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";

?>
<?php

$negara = array();
$negara ["indonesia"] = array("ibukota" => "DKI jakarta", "kode_telepon", =>"+62");
$negara ["singapura"] = array("ibukota" => "singapura", "kode_telepon", =>"+65");
$negara ["malaysia"] = array("ibukota" => "kuala lumpur", "kode_telepon", =>"+60");
$negara ["brunei"] = array("ibukota" => "bandar seri bagawan", "kode_telepon", =>"+673");
$negara ["thailand"] = array("ibukota" => "bangkok", "kode_telepon", =>"+66");
$negara ["laos"] = array("ibukota" => "vientiane", "kode_telepon", =>"+856");
$negara ["philipina"] = array("ibukota" => "manila", "kode_telepon", =>"+63");
$negara ["myanmar"] = array("ibukota" => "naypyidaw", "kode_telepon", =>"+95");

//Urutkan array berdasarkan negara
ksort($negara);

//Tampilkan array dalam bentuk tabel

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibu Kota</th><th>Kode Telepon</th>";
foreach ($negara as $negara => $data) {
    echo "<tr><td>$negara</td><td>$data[ibukota]</td><td>$data[kode_telepon]</td></tr>";
}

echo "</table>";

?>
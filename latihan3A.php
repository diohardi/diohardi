<?php
function ubahGayaTulisan($tulisan, $kelas) {
    
    $style = 'font-size: 28px; font-family: Arial; color: #1A0547; font-style: italic; font-weight: bolder;';
    
    return "<span class='$kelas' style='$style'>$tulisan</span>";
}

$tulisan = "Hello World! Here I Come!";
$kelas = "ganti-style";

echo ubahGayaTulisan($tulisan, $kelas);

?>
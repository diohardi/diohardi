<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar negara asean awal</title>
</head>
<body>
    <?php

    $negara1 = array ('indonesia', 'singapura', 'malaysia', 'brunei', 'thailand');

    echo "<h1>Daftar negara asean awal</h1";
    echo "<ul>";
    foreach ($negara1 as $negara2) {
        echo "<li>$negara2</li>";
    }
    echo "</ul>";

    array_push($negara1,'laos', 'piliphina', 'mmyanmar');

    echo "<h1>Daftar negara asean baru</h1>";
    echo "<ul>";
    foreach($negara1 as $negara2) {
        echo "<li>$negara2</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>
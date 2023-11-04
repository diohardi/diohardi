<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar negara asean dan ibu kotanya</title>
</head>

<body>
    <?php
    $negara_ibukota = array(
        'indonesia' => 'DKI Jakarta',
        'singapura' => 'singapura',
        'malaysia' => 'kuala lumpur',
        'brunei' => 'BandarSeriBagawan',
        "thailand" => 'bangkok',
        'laos' => 'vientiane',
        'philipina' => 'manila',
        'myanmar' =>'naypyidaw'
    );

    echo "<h1>Daftar negara asean dan ibu kotanya</h1>";
    echo "<ul>";
    foreach($negara_ibukota as $negara => $ibu_kota) {
        echo "<li>$negara : $ibu_kota</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
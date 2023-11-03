<?php
function Even($number) {
    return $number % 2 == 0;
}

function Prima($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

echo '<ul>';

for ($i = 1; $i <= 20; $i++) {
    echo '<li>';
    echo "Angka $i adalah bilangan ";

    if (Even($i)) {
        echo 'genap';
        if (Prima($i)) {
            echo ' dan sekaligus bilangan prima';
        }
    } else {
        echo 'ganjil';
        if (Prima($i)) {
            echo ' dan sekaligus bilangan prima';
        }
    }

    echo '</li>';
}

echo '</ul>';
?>
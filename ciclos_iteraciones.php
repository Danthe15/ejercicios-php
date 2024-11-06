<?php
// for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// foreach
$array = [1, 2, 3];
foreach ($array as $valor) {
    echo $valor;
}

// while
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

// do..while
do {
    echo $i;
    $i--;
} while ($i > 0);
?>
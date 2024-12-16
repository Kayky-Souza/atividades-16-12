<?php
$matriz = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

echo "<h3>Matriz 4x4 com números aleatórios:</h3>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h3>Números pares na matriz:</h3>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($matriz[$i][$j] % 2 == 0) {
            echo $matriz[$i][$j] . " ";
        }
    }
}
?>

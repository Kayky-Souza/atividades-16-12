<?php
$numeros=[5,10,15,20,25];
$soma = 0;
foreach($numeros as $key => $value) {
    $soma = $soma + $value;
}
echo $soma;
?>
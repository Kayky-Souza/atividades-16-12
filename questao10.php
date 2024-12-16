<?php
$produtos = [
    ["nome" => "Arroz", "preco" => 20],
    ["nome" => "Feijão", "preco" => 10],
    ["nome" => "Açúcar", "preco" => 5]
];

$total = 0;

foreach ($produtos as $produto) {
    $total += $produto["preco"];
}

echo "O valor total dos produtos é: R$ " . number_format($total, 2, ',', '.');
?>

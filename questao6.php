<?php
// $idades = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

// $menor = min($idades);
// $maior = max($idades);

// echo "Idades: " . implode(", ", $idades) . "<br>";
// echo "O menor número é: $menor<br>";
// echo "O maior número é: $maior";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 6</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form class="formulario" action="questao6.php" method="POST">

            <?php
            $idades = [];
            for ($i = 0; $i < 10; $i++) {
                echo "<label for='idade$i'>idade " . ($i + 1) . ": </label>";
                echo "<input name='idade[]' id='idade$i' type='number'>";
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idade"])) {
                foreach ($_POST["idade"] as $idade) {
                    $idades[] = $idade;
                }
                $menor = min($idades);
                $maior = max($idades);

                echo "Idades: " . implode(", ", $idades) . "<br>";
                echo "O menor número é: $menor<br>";
                echo "O maior número é: $maior";
            }
            ?>

            <input type="submit" name="submit" id="submit" value="ENVIAR">
        </form>
    </div>
</body>


</html>
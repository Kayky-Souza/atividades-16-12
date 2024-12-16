<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form class="formulario" action="questao1.php" method="POST">
            <label for="num1">Nota: </label>
            <input name="nota" step="0.1" id="nota" type="number">

            <input type="submit" name="submit" id="submit" value="ENVIAR">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nota"])) {
                $nota = $_POST["nota"];
            }
            if ($nota) {
                if ($nota >= 7) {
                    echo "<h2>Aprovado</h2>";
                } else if ($nota >= 5 && $nota < 7) {
                    echo "<h2>Recuperacao</h2>";
                } else if ($nota < 5) {
                    echo "<h2>Reprovado</h2>";
                } else {
                    echo "<h2>Erro</h2>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>
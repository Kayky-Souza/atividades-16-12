<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 9</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form action="questao9.php" method="POST">
            <h1>Cadastro de Notas</h1>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <label for="matematica">Nota de Matemática:</label><br>
            <input type="number" name="matematica" id="matematica" step="0.01" required><br><br>

            <label for="portugues">Nota de Português:</label><br>
            <input type="number" name="portugues" id="portugues" step="0.01" required><br><br>

            <label for="ciencias">Nota de Ciências:</label><br>
            <input type="number" name="ciencias" id="ciencias" step="0.01" required><br><br>

            <input type="submit" value="Calcular Média">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST['nome'];
                $matematica = $_POST['matematica'];
                $portugues = $_POST['portugues'];
                $ciencias = $_POST['ciencias'];

                $media = ($matematica + $portugues + $ciencias) / 3;

                echo "<h3>Notas de " . htmlspecialchars($nome) . ":</h3>";
                echo "Matemática: " . htmlspecialchars($matematica) . "<br>";
                echo "Português: " . htmlspecialchars($portugues) . "<br>";
                echo "Ciências: " . htmlspecialchars($ciencias) . "<br>";

                echo "<h3>Média das notas: " . number_format($media, 2, ',', '.') . "</h3>";
            }
            ?>
        </form>
    </div>

</body>

</html>
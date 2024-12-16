<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 7</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form action="questao7.php" method="POST">
            <h1>Cadastro de Livro</h1>
            <label for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required><br><br>

            <label for="autor">Autor:</label><br>
            <input type="text" name="autor" id="autor" required><br><br>

            <label for="ano_publicacao">Ano de Publicação:</label><br>
            <input type="number" name="ano_publicacao" id="ano_publicacao" required><br><br>

            <label for="preco">Preço:</label><br>
            <input type="number" step="0.01" name="preco" id="preco" required><br><br>

            <input type="submit" value="Cadastrar Livro">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $livro = [
                    'titulo' => $_POST['titulo'],
                    'autor' => $_POST['autor'],
                    'ano_publicacao' => $_POST['ano_publicacao'],
                    'preco' => $_POST['preco']
                ];

                echo "<h2>Informações do Livro Cadastrado</h2>";
                echo "<ul>";
                echo "<li><strong>Título:</strong> " . htmlspecialchars($livro['titulo']) . "</li>";
                echo "<li><strong>Autor:</strong> " . htmlspecialchars($livro['autor']) . "</li>";
                echo "<li><strong>Ano de Publicação:</strong> " . htmlspecialchars($livro['ano_publicacao']) . "</li>";
                echo "<li><strong>Preço:</strong> R$ " . number_format($livro['preco'], 2, ',', '.') . "</li>";
                echo "</ul>";
            }
            ?>
        </form>
    </div>



</body>

</html>
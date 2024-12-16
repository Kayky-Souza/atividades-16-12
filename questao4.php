<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 4</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form class="formulario" action="questao4.php" method="POST">

            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<label for='cidade$i'>Cidade " . ($i + 1) . ": </label>";
                echo "<input name='cidade[]' id='cidade$i' type='text'>"; 
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cidade"])) {
                echo "<h3>Cidades enviadas:</h3>";
                foreach ($_POST["cidade"] as $cidade) {
                    echo "<p>" . htmlspecialchars($cidade) . "</p>";
                }
            }
            ?>
            
            <input type="submit" name="submit" id="submit" value="ENVIAR">
        </form>
    </div>
</body>


</html>
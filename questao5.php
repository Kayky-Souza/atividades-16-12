<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 5</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="conteiner">
        <form class="formulario" action="questao5.php" method="POST">

            <?php
            for ($i = 0; $i < 3; $i++) {
                echo "<div class='aluno'>";
                echo "<h3>Aluno " . ($i + 1) . "</h3>";
                echo "<label for='aluno$i'>Nome: </label>";
                echo "<input name='aluno[]' id='aluno$i' type='text' required>";

                for ($j = 0; $j < 3; $j++) {
                    echo "<label for='nota$i$j'>Nota " . ($j + 1) . ": </label>";
                    echo "<input step='0.1' name='notas[$i][]' id='nota$i$j' type='number' required>"; 
                } 
                echo "</div>";
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["aluno"]) && isset($_POST["notas"])) {
                    echo "<h3>Alunos e suas notas:</h3>";

                    foreach ($_POST["aluno"] as $index => $aluno) {
                        echo "<p><strong>Aluno: </strong>" . htmlspecialchars($aluno) . "</p>";
                        
                        if (isset($_POST["notas"][$index])) {
                            echo "<ul>";
                            foreach ($_POST["notas"][$index] as $nota) {
                                echo "<li>" . htmlspecialchars($nota) . "</li>";
                            }
                            echo "</ul>";
                        }
                    }
                }
            }
            ?>
            
            <input type="submit" name="submit" id="submit" value="ENVIAR">
        </form>
    </div>

    <style>
        .conteiner {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .formulario {
            display: flex;
            flex-direction: column;
        }

        .aluno {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .aluno h3 {
            margin-top: 0;
        }

        label {
            margin-right: 10px;
        }

        input[type="text"], input[type="number"] {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</body>



</html>
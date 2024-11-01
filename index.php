<?php
    include 'database.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <title>Centro Universitário Estácio de Sá</title>
</head>
<body>
    <h1>Onde Será Minha Aula?</h1>
    <div id="card-container">
        <?php
            $query = $pdo -> query('SELECT * FROM horario ORDER BY dia_semana, curso');
            $horario = $query -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($horario as $horario_item) {
                echo "<div class='card'>";
                    echo "<h2>{$horario_item["curso"]}</h2>";
                    echo "<p>{$horario_item["materia"]}</p>";
                    echo "<p>{$horario_item["id_professor"]}</p>";
                    echo "<p>{$horario_item["ara"]}</p>";
                    echo "<p>{$horario_item["tipo"]} {$horario_item["sala"]}</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
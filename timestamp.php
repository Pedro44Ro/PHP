<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Timestamp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .timestamp {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Timestamp Atual</h1>
    <p class="timestamp">
        <?php
        // Obtém o timestamp atual
        $timestampAtual = time();
        echo $timestampAtual;
    ?>
    </p>
</body>
</html>

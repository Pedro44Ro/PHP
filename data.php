<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .data {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Atual</h1>
    <p class="data">
        <?php
        // Formata a data atual como dd/mm/aaaa
        $dataFormatada = date('d/m/Y');
        echo $dataFormatada;
        ?>
    </p>
</body>
</html>
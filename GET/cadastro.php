<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro - Processamento</title>
</head>
<body>
    <?php

    //Captura os valores dos campos do formulário 
    $nome = $_GET['nome'];
    $endereco = $_GET['endereco'];
    $cidade = $_GET['cidade'];

    //exibir os dados na tela
    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong>$cidade</p>";

    ?>
    
</body>
</html>
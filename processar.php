<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Processados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Dados Recebidos</h2>
    
    <?php
    $metodo = $_SERVER['REQUEST_METHOD'];
    echo "<h3>Método utilizado: $metodo</h3>";
    echo "<h3>Dados do formulário:</h3>";
    if ($metodo === 'POST') {
        $dados = $_POST;
    } else {
        $dados = $_GET;
    }
    
    if (!empty($dados)) {
        echo "<pre>";
        echo "Nome: " . htmlspecialchars($dados['nome']) . "\n";
        echo "Telefone: " . htmlspecialchars($dados['telefone']) . "\n";
        echo "E-mail: " . htmlspecialchars($dados['email']) . "\n";
        echo "Mensagem: " . htmlspecialchars($dados['mensagem']) . "\n";
        echo "</pre>";
    } else {
        echo "<p>Nenhum dado recebido</p>";
    }
    <p><a href="formulario.php">Voltar ao formulário</a></p>
</body>
</html>

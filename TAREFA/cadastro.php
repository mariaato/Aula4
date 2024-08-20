<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de cadastro - Processamento</title>
</head>
<body>
    <?php

    //Verifica se o metodo de requisição é post
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Recebe os dados enviados pelo formulário 
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $CEP = $_POST['CEP'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $horas = $_POST['horas'];
        $carga = $_POST['carga'];

        //Validação simples dos campos
        if(empty($nome) || empty($email)) {
            //Se alguns dos campos estiver vazio. redireciona para a página de falha
            header("Location: falha.php");
            exit;
        } else {
            //se os campos estiverem preenchidos. voce pode armazenar ou processar os dados aqui
            //POr exemplo, você pode armazenar em um banco de dados ou exibir uma mensagem de sucesso
            header("Location: sucesso.php");
            exit;
        }
    } else {
        //Se a página for acessada diretamente sem submissão do formulário, redireciona para a pag de agradecimento
        header("Location: agradecimento.php");
        exit;
    }
    ?>
    
</body>
</html>
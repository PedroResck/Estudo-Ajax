<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCOLA</title>
</head>
<body>
    <h1>CADASTRO DE ALUNOS</h1>
    <form method="post">
        <input type="text" id="nome" name="nome" placeholder="Digite o nome completo">
        <br/>
        <br/>
        <input type="text" id="email" name="email" placeholder="Digite o e-mail">
        <br/>
        <br/>
        <input type="button" id="btn_gravar" value="Salvar">
    </form>
    <div id="resposta"></div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
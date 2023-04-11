<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCOLA</title>
</head>
<body>
    <h1>ATUALIZAR CADASTRO DO ALUNO</h1>
    <form method="post">
        <?php 
            require("conecta.php");

            if(isset($_GET["id"])){
                $id = $_GET["id"];

            $sql = "SELECT * FROM aluno WHERE id=\"$id\"";
            $exec = $pdo->query($sql);

            $regAtualiza = $exec->fetch();

            }
        ?>
        <input type="text" id="nome" name="nome" value="<?php echo $regAtualiza["nome"] ?>"/>
        <br/>
        <br/>
        <input type="text" id="email" name="email" value="<?php echo $regAtualiza["email"] ?>"/>
        <br/>
        <br/>
        <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" />
        <br/>
        <input type="button" id="btn_atualizar" value="Atualizar">
        
    </form>
    <div id="resposta"></div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
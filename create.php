<?php
require("conecta.php");

if(isset($_POST["nome"]) || isset($_POST["email"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO aluno (nome, email) VALUES ('$nome', '$email')";
    $exec = $pdo->query($sql);
}
?>

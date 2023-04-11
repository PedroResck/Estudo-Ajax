<?php
require("conecta.php");

if(isset($_POST["nome"]) || isset($_POST["email"]) || isset($_POST["id"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $sql = "UPDATE aluno SET nome=\"$nome\", email=\"$email\" WHERE id=$id";
    $exec = $pdo->query($sql);
}
?>
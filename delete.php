<?php 
require("conecta.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM aluno where id=\"$id\"";
    $exec = $pdo->query($sql);

    header("location: read.php");
?>
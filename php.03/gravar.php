<?php

$nome         = $_POST["nome"];
$email        = $_POST["email"];
$telefone     = $_POST["telefone"];

include_once 'conexao.php';

$sql = "INSERT INTO aluno VALUES(null, '{$nome}', '{$email}', '{$telefone}')";

$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

header("location:msg.php?msg=".$msg);

?>
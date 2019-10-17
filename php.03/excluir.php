<?php

$mat = $_GET["mat"];

include_once 'conexao.php';

$sql = "DELETE FROM aluno WHERE mat = $mat";

$msg = (mysqli_query($con, $sql)) ? "Excluido com sucesso" : "Erro ao excluir";

mysqli_close($con);

header("location:msg.php?msg=".$msg);

?>
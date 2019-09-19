<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <?php include 'import.php'?>
    
    <title>HogInacio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
       <h3>Cadastro de Alunos</h3>
       <hr>
        <form action="gravar.php" method="post">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control col-md-4" required>
            <label>E-mail: </label>
            <input type="email" name="email" class="form-control col-md-4" required>
            <label>Telefone</label>
            <input type="tell" name="telefone" class="form-control col-md-4" required>
            <br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
    </div>
</body>
</html>
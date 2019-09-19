<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <?php include 'import.php'; ?>
    
    <title>HogInacio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h3>Consulta de Alunos</h3>
        <hr>
        <form class="form-inline">
            <div class="form-group">
                <label  class="col-sm-2">Nome: </label>
                <input type="text" name="nome" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-info ml-2">
            </div>
        </form>
        <hr>
        <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                
                include_once 'conexao.php';
                
                $sql = "SELECT * FROM aluno WHERE nome
                LIKE '{$nome}%'";
                
                $result = mysqli_query($con, $sql);
                
                $totalRegistros = mysqli_num_rows($result);
                
                if($totalRegistros > 0){?>
                    
                    <table class="table table-hover">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        
                        
                        <?php
                        
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>{$row['nome']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['telefone']}</td>";
                            echo "<td><button class='btn'><i class='fa fa-edit'></i></button></td>";
                            echo "<td><button class='btn' onclick='confirma_exclusao()'><i class='fa fa-trash'></i></button></td>";
                            echo "</tr>";
                        }
                        
                        ?>
                        
                    </table>
                    
                    
                <?php   
                }else{
                    echo "Nenhum registro encontrado";
                }
                
                
                
            }           
        ?>
    </div>
    
    <script>
        function confirma_exclusao($row){
            var r = confirm("Tem certeza que deseja excluir?");
            if (r)
              {
                <?php $sql = "DELETE FROM aluno WHERE = $row" ?>
                alert("Aluno excluido com sucesso");
              }
            }
    </script>
</body>
</html>
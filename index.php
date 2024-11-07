<?php
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM tarefa";
$tarefas = mysqli_query($conn, $sql);

?>  
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Lista de Tarefas <i class="bi bi-list-task"></i>
                            <a href="tarefas-create.php" class="btn btn-outline-primary float-end">Adicionar Tarefa</a>
                        </h4>
                    </div>
                        <div class= "card-body">
                            <?php include('mensagem.php'); ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Nome</td>
                                        <td>Descrição</td>
                                        <td>Data Limite</td>
                                        <td>Status</td>
                                        <td>Ações</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tarefas as $tarefa): ?>
                                        <tr>
                                            <td><?php echo $tarefa['id']; ?></td>
                                            <td><?php echo $tarefa['nome']; ?></td>
                                            <td><?php echo $tarefa['descricao']; ?></td>
                                            <td><?php echo date ('d/m/Y', strtotime($tarefa['data_limite'])); ?></td>
                                            <td><?php echo $tarefa ['status']; ?></td>
                                            <td>
                                                <a href="tarefas-edit.php?id=<?=$tarefa['id']?>" class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                                <form action="acoes.php" method="POST" class="d-inline">
                                                    <button onclick="return confirm('Tem certeza que deseja excluir?')" name="delete_tarefa" type="submit" value="<?=$tarefa['id']?>" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
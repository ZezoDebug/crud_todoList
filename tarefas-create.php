<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar - Tarefas</title>
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
                            Adicionar Tarefas <i class="bi bi-file-earmark-plus"></i>
                            <a href="index.php" class="btn btn-outline-dark float-end">Voltar</a>
                        </h4>    
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input type="text" name="txtNome" id="txtNome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtDescricao">Descrição</label>
                                <input type="text" name="txtDescricao" id="txtDescricao" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtDataLimite">Data Limite</label>
                                <input type="date" name="txtDataLimite" id="txtDataLimite" class="form-control">
                            </div>
                            <label for="txtStatus">Status</label>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="txtStatus" id="btnradio1" value="Pendente" autocomplete="off" checked>
                                    <label class="btn btn-outline-danger" for="btnradio1">Pendente</label>

                                    <input type="radio" class="btn-check" name="txtStatus" id="btnradio2" value="em Andamento" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btnradio2">em Andamento</label>

                                    <input type="radio" class="btn-check" name="txtStatus" id="btnradio3" value="Concluido" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btnradio3">Concluido</label>
                                </div>
                            <div class="mb-3">
                                <button type="submit" name="create_tarefa" class="btn btn-outline-primary float-end">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('homeview');?>">BlackDragons</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?=base_url('listaCliente');?>">Listagem dos clientes</a>
                <a class="nav-link" href="<?=base_url('cadastro');?>">Cadastro</a>
                <a class="nav-link" href="<?=base_url('listaFilmes');?>">Listagem dos Filmes</a>
                <a class="nav-link" href="<?=base_url('cadastroFilme')?>">Cadastro de Filmes</a>
                <a class="nav-link" href="<?=base_url('login');?>">Login</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="editToDo.php" method="POST">
                <div class="form-group">
                    <label for="id">#</label>
                    <input id="id" name="id" class="form-control" value="<?php echo $usuario['id']; ?>" type="text" readonly></input>
                </div>
                <div class="form-group">
                    <label for="titulo">Nome</label>
                    <input id="nome" name="nome" class="form-control" value="<?php echo $usuario['nome'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="descricao">Email</label>
                    <input id="Email" name="email" class="form-control" value="<?php echo $usuario['email'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id="Senha" name="senha" class="form-control" value="<?php echo $usuario['senha'];?>" type="password"></input>
                </div>
                <div class="form-group">
                    <input id="btnAtualizar" class="btn btn-success" name="btnAtualizar" type="submit" value="Atualizar"></input>
                </div>
            </form>
        </div>
    </div>

</body>
</html>


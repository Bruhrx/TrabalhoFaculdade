<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel='stylesheet' href='public/bootstrap/css/bootstrap.css'>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(''); ?>">BlackDragons</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url('listaCliente'); ?>">Listagem dos clientes</a>
                    <a class="nav-link" href="<?= base_url('cadastro'); ?>">Cadastro</a>
                    <a class="nav-link" href="<?= base_url('listaFilmes'); ?>">Listagem dos Filmes</a>
                    <a class="nav-link" href="<?= base_url('cadastroFilme') ?>">Cadastro de Filmes</a>
                    <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Genero</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ListaFilmes as $filme) : ?>
            <tr>
                <td><?= $filme['id'] ?></td>
                <td><?= $filme['nomeFilme'] ?></td>
                <td><?= $filme['categoria'] ?></td>
                <td><a href="javascript:deletarPlataforma(<?= $filme['id'] ?>)" class="btn btn-danger btn-sm" id="btnDelete"><i class="fas fa-times"></i> Excluir</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<script>

    // $("#btnDelete").click(function(){

    //     deletarPlataforma(id)

    // });


    // function getId()
    // {
    //     $.post(
    //     base + '/cadastraUsuario',{
    //         id: $('#btnDelete').val()
    //         }
    //     );
    // }

    function deletarPlataforma(id)
    {
        var myUrl = 'listafilmes/deleteFilme/'+id
        if (confirm("Deseja realmente apagar essa plataforma?")) {
            window.location.href = myUrl;
            alert("A plataforma foi deletado.");
        } else {
            alert("Processo não realizado.");
            return;
        }
    }
</script>
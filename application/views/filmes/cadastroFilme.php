

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('');?>">BlackDragons</a>
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
            <form action="createCategoriasToDo.php" method="POST">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input id="txtTitulo" class="form-control" name="titulo" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input id="txtGenero" class="form-control" name="genero" type="text"></input>
                </div>

                <div class="form-group">
                    <input id="btnCadastraFilme" class="btn btn-success" name="btnCadastrar" type="button" value="Cadastrar"></input>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<script src = 'public/js/jquery-3.6.0.min.js'></script>
<script>
    var base = '<?=base_url('cadastroFilme')?>'

    $('#txtTitulo').val('Ultimate Go Horse Project');
    $('#txtGenero').val('Genero GO HORSE');

    $("#btnCadastraFilme").click(function()
    {
        getDadosCadastro()
        redirect()
    });

    function getDadosCadastro()
    {
        $.post(
        base + '/getFilmes',{
            titulo: $('#txtTitulo').val(),
            genero: $('#txtGenero').val(),
            }
        );
    }

    function redirect()
    {
        // alert(123);
        window.location.replace('<?=base_url('listaFilmes')?>')
    }
</script>

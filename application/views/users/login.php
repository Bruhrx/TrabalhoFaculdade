<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='<?=base_url('public/bootstrap/css/bootstrap.css')?>'>
</head>
<body>
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="doLogin.php" method="POST">

                <?php if($this->session->flashdata("danger")):?>
                    <p class= "alert alert-danger"><?= $this->session->flashdata("danger"); ?></p>
                <?php endif?>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="txtEmail" name="email" type="email" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id="txtSenha" name="senha" type="password" class="form-control" required></input>
                </div>
                <input id="btnLogin" name="btnLogin" type="button" class="btn btn-primary" value="Entrar"></input>
            </form>
        </div>
    </div>

</body>
</html>

<script src = '<?=base_url('public/js/jquery-3.6.0.min.js')?>'></script>
<script>
    var base = '<?=base_url('login')?>'

    $("#btnLogin").click(function()
    {
        getDadosCadastro()

        if($('#txtSenha').length >= 8)
        {
            redirect()
        }

    });

    function getDadosCadastro()
    {
        $.post(
        base + '/autenticacao',{

            email:$('#txtEmail').val(),
            senha:$('#txtSenha').val()

            },function(data)
            {
                alert(data);
                if(data == "Usuario Logado")
                {
                    window.location.href = "homecontroller";
                }

            }
        );
    }
</script>
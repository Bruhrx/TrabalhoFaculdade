<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='public/bootstrap/css/bootstrap.css'
</head>
<body>
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">

            <?php if($this->session->flashdata("success")):?>
                <p class= "alert alert-success"><?= $this->session->flashdata("success"); ?></p>
            <?php endif?>

                
            <?php if($this->session->flashdata("danger")):?>
                <p class= "alert alert-danger"><?= $this->session->flashdata("danger"); ?></p>
            <?php endif?>

            <?php if($this->session->userdata("usuario logado")):?>
                <?redirect('cadastro')?>
            <?php endif ?>


            <?php 
            
                echo form_open('login/autenticar');

                echo form_label("Email", "email");
                echo form_input(array(
                    'name'=>"email",
                    "id"=>"email",
                    "class"=> "form-control",
                    "maxlength"=>"255"
                ));

                echo form_label("Senha", "senha");
                echo form_input(array(
                    'name'=>"senha",
                    "id"=>"senha",
                    "class"=> "form-control",
                    "type"=>"password",
                    "maxlength"=>"255"
                ));

                echo form_button(array(
                    "class"=>"btn btn-primary",
                    "type"=>"submit",
                    "content"=>"Login"
                ));
                
                echo form_close();
            ?>
        </div>
    </div>

</body>
</html>

<script src = 'public/js/jquery-3.6.0.min.js'></script>
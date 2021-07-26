<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->getTitle(); ?></title>
        <meta name="author" content="Rodrigo Lima Aluno Método Ágora - mjailton">
        <meta name="description" content="<?php echo $this->getDescription(); ?>">
        <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
        <link rel="stylesheet" type="text/css" href="<?= URL_BASE ?>assets/css/auxiliar.css">
        <link rel="stylesheet" type="text/css" href="<?= URL_BASE ?>assets/css/grade.css">
        <link rel="stylesheet" type="text/css" href="<?= URL_BASE ?>assets/css/style.css">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!--font icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <script src="<?= URL_BASE ?>assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $('.senha').click(function () {
                    $('#form .dg_senha').slideToggle();
                    $(this).toggleClass('active');
                    return false;
                });
            });
        </script>	
    </head>
    <body class="base-login">
        <div class="caixa-login">
            <?=
            $this->verMsg();
            $this->verErro();
            ?>
            <h1>Login</h1>
            <form action="<?= URL_BASE ?>login/logar" method="post">
                <label>
                    <span>Login</span>
                    <input type="text" name="login" placeholder="Digite seu login" class="form-campo">
                </label>
                <label>
                    <span>Senha</span>
                    <input type="password" name="senha" placeholder="Digite sua senha" class="form-campo">
                </label>
                <input type="submit"  value="Entrar" class="btn width-100">
            </form>
            <a href="" class="senha">Esqueci minha senha</a>
            <div id="form">
                <div class="dg_senha">
                    <a href="" class="senha"><i class="fas fa-angle-left"></i> Voltar</a>
                    <p>Esquceu sua senha? digite um email para recupera-lo.</p>
                    <label>
                        <span>Digite seu email</span>
                        <input type="text" placeholder="Digite seu email" class="form-campo">
                    </label>
                    <input type="submit" name="" value="Enviar" class="btn width-100">
                    </label>
                    <br/>
                </div>
            </div>
        </div>
    </body>
</html>
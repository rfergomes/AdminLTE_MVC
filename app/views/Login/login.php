    <!-- login-box -->
    <div class="login-box">
        <?=
        $this->verMsg();
        $this->verErro();
        ?>
        <!-- /.login-logo -->

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= URL_BASE ?>" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Faça login para iniciar sua sessão</p>

                <form action="<?= URL_BASE ?>login/logar" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="<?= isset($usuario) ? $usuario->email : null; ?>" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="senha" value="<?= isset($usuario) ? $usuario->senha : null; ?>" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Faça login usando o Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Faça login usando o Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="<?= URL_BASE ?>login/esqueci">Esqueci a minha senha</a>
                </p>
                <p class="mb-0">
                    <a href="<?= URL_BASE ?>login/registrar" class="text-center">Registre uma nova assinatura</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
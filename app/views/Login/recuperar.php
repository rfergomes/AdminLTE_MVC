<div class="login-box">
  <?=
  $this->verMsg();
  $this->verErro();
  ?>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= URL_BASE ?>login" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Você está a apenas um passo de sua nova senha, recupere sua senha agora.</p>
      <form action="<?= URL_BASE ?>login/novaSenha" method="post">
        <div class="input-group mb-3">
          <input type="password" name="senha1" class="form-control" placeholder="Nova Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha2" class="form-control" placeholder="Confirmar Nova Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div>
          <input type="hidden" name="token" value="<?= isset($token) ? $token : null ?>">
          <input type="hidden" name="id_usuario" value="<?= isset($id_usuario) ? $id_usuario : null ?>">
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="<?= URL_BASE ?>login">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $this->getPage(); ?></h1>
            </div><!-- /.col -->
            <!-- Breadcrumb -->
            <div class="col-sm-6">
                <?= $breadcrumb ?>
            </div>
            <!-- Breadcrumb -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php
                $this->verMsg();
                $this->verErro();
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-list-alt"></i> <?= isset($usuario) ? " Alterar Dados" : " Novo Cadastro" ?></h3>
                        <div class="text-right">
                            <!--<a href="" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i> Novo</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>-->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= URL_BASE . "usuario/salvar" ?>" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="usuario">Nome</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?= isset($usuario->usuario) ? $usuario->usuario : null ?>" placeholder="Nome">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="nascimento" id="nascimento" value="<?= isset($usuario->nascimento) ? $usuario->nascimento : null ?>" placeholder="Nascimento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control mascara-cpf" name="cpf" id="cpf" value="<?= isset($usuario->cpf) ? $usuario->cpf : null ?>" placeholder="CPF">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control mascara-cep busca_cep" name="cep" id="cep" value="<?= isset($usuario->cep) ? $usuario->cep : null ?>" placeholder="CEP">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control rua" name="endereco" id="endereco" value="<?= isset($usuario->endereco) ? $usuario->endereco : null ?>" placeholder="Logradouro">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="<?= isset($usuario->numero) ? $usuario->numero : null ?>" placeholder="Número">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control complemento" name="complemento" id="complemento" value="<?= isset($usuario->complemento) ? $usuario->complemento : null ?>" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control bairro" name="bairro" id="bairro" value="<?= isset($usuario->bairro) ? $usuario->bairro : null ?>" placeholder="Bairro">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control cidade" name="cidade" id="cidade" value="<?= isset($usuario->cidade) ? $usuario->cidade : null ?>" placeholder="Cidade">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="uf_sigla">UF</label>
                                    <select name="uf_sigla" id="uf_sigla" class="form-control estado">
                                        <?php foreach($estados as $uf){ ?>
                                            <option value="<?= $uf->uf_estado ?>"<?= isset($usuario->uf_sigla) && $usuario->uf_sigla == $uf->uf_estado ? "selected" : "" ?>><?= $uf->uf_estado ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="id_nivel">Nível</label>
                                    <select name="id_nivel" id="id_nivel" class="form-control">
                                        <?php foreach($niveis as $nivel){ ?>
                                            <option value="<?= $nivel->id_nivel ?>"<?= isset($usuario->id_nivel) && $usuario->id_nivel == $nivel->id_nivel ? "selected" : "" ?>><?= $nivel->nivel ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control mascara-fone ddd" name="telefone" id="telefone" value="<?= isset($usuario->telefone) ? $usuario->telefone : null ?>" placeholder="Telefone">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control mascara-celular ddd" name="celular" id="celular" value="<?= isset($usuario->celular) ? $usuario->celular : null ?>" placeholder="Celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?= isset($usuario->email) ? $usuario->email : null ?>" placeholder="E-mail">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="id_usuario" value="<?= isset($usuario->id_usuario) ? $usuario->id_usuario : null ?>" />
                                <button type="submit" class="btn btn-primary"><?= isset($usuario->id_usuario) ? "Salvar" : "Cadastrar" ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
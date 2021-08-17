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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-list-alt"></i> Novo Usuário</h3>
                        <div class="text-right">
                            <!--<a href="<?= URL_BASE ?>usuario/cadastro" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i> Novo</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>-->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="logradouro">Endereço</label>
                                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="uf">UF</label>
                                    <select name="uf" id="uf" class="form-control">
                                        <option selected>Selecione...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="id_cliente" value="" />
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
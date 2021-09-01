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
                <?=
                $this->verMsg();
                $this->verErro();
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Usuários</h3>
                        <div class="text-right">
                            <a href="<?= URL_BASE ?>usuario/cadastro" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i> Novo</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="text-center" width="8%">id</th>
                                    <th class="text-left" width="50%">Usuario</th>
                                    <th class="text-center">Duração</th>
                                    <th class="text-center">Embed</th>
                                    <th class="text-center">Editar</th>
                                    <th class="text-center">Excluir </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $lista) { ?>
                                    <tr>
                                        <td class="text-center"><?= $lista->id_usuario ?></td>
                                        <td class="text-left"><?= $lista->usuario ?></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><a href="<?= URL_BASE ?>usuario/editar/<?= $lista->id_usuario ?>" class="btn btn-xs btn-warning"><i class="fas fa-user-edit"></i> Editar</a></td>
                                        <td class="text-center"><a href="<?= URL_BASE ?>usuario/excluir/<?= $lista->id_usuario ?>" class="btn btn-xs btn-danger"><i class="fas fa-user-minus"></i> Excluir</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->


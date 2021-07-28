<?php foreach ($erros as $erro) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong><i class="icon fas fa-ban"></i></strong>&nbsp;
        <?= $erro ?>
    </div>
<?php } ?>

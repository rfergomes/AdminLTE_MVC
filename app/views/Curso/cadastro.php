<h1 class="titulo"><i class="fas fa-list-alt"></i> CADASTRO DE CURSO</h1>
<div class="base-form">
    <form action="<?= URL_BASE ?>" method="Post" enctype="multipart/form-data">				
        <div class="rows">
            <div class="col-4 mb-3">
                <div class="foto">
                    <img src="<?= URL_BASE ?>assets/img/formacao-matematica.jpg" id="imgUp" class="img-fluido">
                </div>
            </div>
            <div class="col-8 mb-3">
                <label class="label">IMAGEM DO CURSO</label>
                <input type="file" name="arquivo" id="arquivo" class="form-campo">
                <small class="d-block pt-2">Escolha uma imagem referente ao curso</small>
                <small class="d-block pt-1">Tamanho não pode ultrapassar 100KB (860 x 600 pixels)</small>
            </div>
            <div class="col-12 mb-3">
                <label class="label">Titulo do curso</label>
                <input type="text" name="curso" value="" placeholder="Titulo do curso" class="form-campo">
            </div>

            <div class="col-6 mb-3">
                <label class="label">Embed do vídeo</label>
                <input type="text" name="embed" value="" placeholder="Embed do vídeo" class="form-campo">
            </div>

            <div class="col-2 mb-3">
                <label class="label">Ativo</label>
                <select name="ativo_curso" class="form-campo">    							
                    <option value="S"  >Sim</option>
                    <option value="N"  >Não</option>
                </select>
            </div>
            <div class="col-4 mb-3">
                <label class="label">Duração do vídeo</label>
                <input type="text" name="duracao" value="" placeholder="Duração do vídeo" class="form-campo">
            </div>
            <div class="col-12 mt-3">
                <input type="hidden" name="id_curso" value="" >    										
                <input type="submit" name="" value="cadastrar" class="btn d-table m-auto">
            </div>
        </div>
    </form>
</div>

<h1 class="titulo"><i class="fas fa-list-alt"></i> CADASTRO DE DOWNLOADS</h1>			
<div class="base-form alt">
    <div class="p-3 border radius-4 px-4">
        <span class="titulo2 h5 text-uppercase pt-3 mb-3">Cadastrar Download</span>
        <form action="<?= URL_BASE ?>aula/salvar" method="Post">
            <div class="rows">
                <div class="col-12">
                    <span class="label">Titulo do arquivo</span> 
                    <input type="text" name="titulo" id="titulo" class="form-campo mb-3" />
                </div>

                <div class="col-10">
                    <span class="label">Carregar arquivo</span>
                    <input type="file" id="arquivo"  class="form-campo mb-3"> 
                </div>
                <div class="col-2">
                    <input type="button"  id="bt_arquivo" value="Enviar" onclick="upload_download_aula()" class="btn width-100 btn-medio" />
                </div>
        </form>
    </div>
    <span class="titulo2 h5 text-uppercase pt-3 mb-3 mt-4">Lista de downloads</span>
    <div class="rows">	
        <div class="lista col-12">
            <table cellpadding="0" cellspacing="0" border="0" class="tabela width-100">
                <thead>
                    <tr>
                        <th align="center">ID</th>
                        <th align="center">Titulo</th>
                        <th align="center">Path</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td align="center">Download</td>
                        <td align="center">90304493405ijr4566rrtt</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="center">Download</td>
                        <td align="center">90304493405ijr4566rrtt</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="center">Download</td>
                        <td align="center">90304493405ijr4566rrtt</td>
                    </tr>	
                </tbody>
            </table>
        </div>
    </div>
</div>
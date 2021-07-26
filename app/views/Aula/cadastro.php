<h1 class="titulo"><i class="fas fa-list-alt"></i> CADASTRO DE AULAS</h1>			
<div class="base-form">
    <ul class="tabs alt">
        <li class="current" data-tab="tab-1">Dados</li>
        <li data-tab="tab-2">Downloads</li>
    </ul>
    <div id="tab-1" class="tab-content current">
        <div class="p-3">
            <span class="titulo2 h5 text-uppercase pt-3 mb-3">Dados</span>
            <form action="http://mjailton.com.br/agora2020/ead_admin/aula/salvar" method="Post">
                <div class="rows">
                    <div class="col-12 mb-3">
                        <label class="label">Titulo da aula</label> <input type="text"
                                                                           name="aula"
                                                                           value="Aula 01 - Apresentação"
                                                                           class="form-campo">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="label">Escolha um Curso</label> 
                        <select	name="id_curso" id="id_curso" class="form-campo">
                            <option value='3' >Formação JQuery</option><option value='4' >Projeto PHP Prime</option><option value='5' >CSS Prime</option><option value='6' >Android Prime</option><option value='7' >JSF Prime</option><option value='8' >ASPNET</option><option value='9' >Formação Front-End Completo</option><option value='16' >sasa</option><option value='17' >dsds</option><option value='18' >rererere</option>					</select>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="label">Embed do vídeo</label> <input type="text"
                                                                           name="embed"
                                                                           value="mNXr3Pstz64"
                                                                           placeholder="Embed do vídeo" class="form-campo">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="label">Duração do vídeo</label> <input type="text"
                                                                             name="duracao_aula"
                                                                             value="07min18s"
                                                                             placeholder="Embed do vídeo" class="form-campo">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="label">Ativo</label> <select name="ativo_aula"
                                                                   class="form-campo">
                            <option value="S"
                                    >Sim</option>
                            <option value="N"
                                    >Não</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <input type="hidden" name="id_aula" id="id_aula" value="3237">
                        <input type="submit" name="" value="cadastrar" 	class="btn d-table m-auto">
                    </div>

            </form>
        </div>
    </div>
</div>

<div id="tab-2" class="tab-content">	
    <div class="width-100">
        <div class="p-3">
            <span class="titulo2 h5 text-uppercase pt-3 mb-3">Enviar um arquivo	(opcional)</span>
            <div class="rows">
                <div class="col-12">
                    <span class="label">Arquivo</span> 
                    <input type="text" name="titulo" id="titulo" class="form-campo mb-3" />
                </div>

                <div class="col-10">
                    <span class="label">Carregar do arquivo</span>
                    <input type="file" id="arquivo"  class="form-campo mb-3"> 
                </div>
                <div class="mt-4 col-2">
                    <input type="button"  id="bt_arquivo" value="Enviar" onclick="upload_download_aula()" class="btn width-100 bt_download" />
                </div>

                <div class="lista col-12 mt-4">
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
                                <td align="center">90304493405ijr</td>
                            </tr>	
                        </tbody>
                    </table>
                </div>
            </div>	
        </div>				
    </div>
</div>
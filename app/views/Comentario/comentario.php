<h1 class="titulo"><i class="fas fa-list-alt"></i> LISTA DE COMENTÁRIOS</h1>
<div class="base-lista">
    <div class="rows">
        <div class="col-12 d-flex text-justify-end mb-2">
            <a href="" class="filtro btn btn-azul d-inline-block">Filtrar</a>
        </div>
        <div class="col-12">
            <div class="mostraFiltro">
                <form action="" method="">
                    <div class="rows">
                        <div class="col-10"><input type="text" placeholder="Curso" class="form-campo"></div>
                        <div class="col-2"><input type="submit" value="Buscar" class="btn width-100"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12">
            <table cellpadding="0" cellspacing="0" border="0" id="dataTable">
                <thead>
                    <tr>
                        <th width="8%">id</th>
                        <th width="40%" align="left">Título</th>
                        <th align="center">Data</th>
                        <th align="center">Hora</th>
                        <th >Editar</th>
                        <th>Excluir </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">2</td>
                        <td align="left">Este é o segundo comentário</td>
                        <td align="center">2020-03-08</td>
                        <td align="center">18:37:48</td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn editar">Ver</a></td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn excluir">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td align="left">Este é o segundo comentário</td>
                        <td align="center">2020-03-08</td>
                        <td align="center">18:37:48</td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn editar">Ver</a></td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn excluir">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td align="left">Este é o segundo comentário</td>
                        <td align="center">2020-03-08</td>
                        <td align="center">18:37:48</td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn editar">Ver</a></td>
                        <td><a href="<?= URL_BASE ?>comentario/mensagem" class="btn excluir">Excluir</a></td>
                    </tr>	
                </tbody>
            </table>
        </div>
    </div>
</div>
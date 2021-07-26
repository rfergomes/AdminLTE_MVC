<h1 class="titulo"><i class="fas fa-list-alt"></i> LISTA DE CURSOS</h1>
<div class="base-lista">
    <div class="rows">
        <div class="col-12 d-flex text-justify-end mb-2">
            <a href="<?= URL_BASE ?>curso/cadastro" class="btn mx-1">Adicionar novo</a>
            <a href="" class="filtro btn btn-azul d-inline-block">Filtrar</a>
        </div>
        <div class="col-12">
            <div class="mostraFiltro">
                <form action="<?= URL_BASE ?>" method="">
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
                        <th width="50%" align="left">Curso</th>
                        <th align="center">Duração</th>
                        <th >Aulas</th>
                        <th >Editar</th>
                        <th>Excluir </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">3</td>
                        <td align="left">Formação JQuery</td>
                        <td align="center"></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn btn-verde">Curso</a></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn editar">Editar</a></td>
                        <td><a href="" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td align="left">Projeto PHP Prime</td>
                        <td align="center"></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn btn-verde">Curso</a></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn editar">Editar</a></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">5</td>
                        <td align="left">CSS Prime</td>
                        <td align="center"></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn btn-verde">Curso</a></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn editar">Editar</a></td>
                        <td><a href="<?= URL_BASE ?>curso/cadastro" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

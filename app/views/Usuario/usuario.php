<h1 class="titulo"> LISTA DE USUÁRIOS</h1>
<div class="base-lista">
    <div class="rows">
        <div class="col-12 d-flex text-justify-end mb-2">
            <a href="<?= URL_BASE ?>usuario/cadastro" class="btn mx-1">Adicionar novo</a>
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
                        <th width="50%" align="left">Usuario</th>
                        <th align="center">Duração</th>
                        <th align="center">Embed</th>
                        <th >Editar</th>
                        <th>Excluir </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td align="left">Mano Jailton</td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td><a href="<?= URL_BASE ?>usuario/cadastro" class="btn editar">Editar</a></td>
                        <td><a href="<?= URL_BASE ?>usuario/cadastro" class="btn btn-vermelho">Excluir</a></td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>
</div>            	

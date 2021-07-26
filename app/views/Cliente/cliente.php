<h1 class="titulo"><i class="fas fa-list-alt"></i> LISTA DE CLIENTES</h1>
<div class="base-lista">
    <div class="rows">
        <div class="col-12 d-flex text-justify-end mb-2">
            <a href="<?= URL_BASE ?>cliente/cadastro" class="btn d-inline-block mx-1">Adicionar novo</a>
            <a href="" class="filtro btn btn-azul d-inline-block">Filtrar</a>
        </div>	
        <div class="col-12">
            <div class="mostraFiltro">
                <form action="" method="">
                    <div class="rows">
                        <div class="col-4"><input type="text" placeholder="Nome" class="form-campo"></div>
                        <div class="col-6"><input type="text" placeholder="Email" class="form-campo"></div>
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
                        <th align="left">Nome</th>
                        <th align="left">Email</th>
                        <th align="center">telefone</th>
                        <th >Matricular</th>
                        <th >Editar</th>
                        <th>Excluir </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td align="left">Manoel Jailton Sousa do Nascimento</td>
                        <td align="left">mjailton@gmail.com</td>
                        <td align="center"></td>
                        <td align="center"><a href="#janela" rel="modal" class="btn btn-verde">Matricular</a></td>
                        <td align="center"><a href="<?= URL_BASE ?>cliente/cadastro" class="btn editar">Editar</a></td>
                        <td align="center"><a href="" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="left">Manoel Jailton Sousa do Nascimento</td>
                        <td align="left">mjailton@gmail.com</td>
                        <td align="center"></td>
                        <td align="center"><a href="#janela2" rel="modal" class="btn btn-verde">Matricular</a></td>
                        <td align="center"><a href="<?= URL_BASE ?>cliente/cadastro" class="btn editar">Editar</a></td>
                        <td align="center"><a href="" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="left">Manoel Jailton Sousa do Nascimento</td>
                        <td align="left">mjailton@gmail.com</td>
                        <td align="center"></td>
                        <td align="center"><a href="#janela" rel="modal" class="btn btn-verde">Matricular</a></td>
                        <td align="center"><a href="<?= URL_BASE ?>cliente/cadastro" class="btn editar">Editar</a></td>
                        <td align="center"><a href="" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="left">Manoel Jailton Sousa do Nascimento</td>
                        <td align="left">mjailton@gmail.com</td>
                        <td align="center"></td>
                        <td align="center"><a href="#janela2" rel="modal" class="btn btn-verde">Matricular</a></td>
                        <td align="center"><a href="<?= URL_BASE ?>cliente/cadastro" class="btn editar">Editar</a></td>
                        <td align="center"><a href="" class="btn btn-vermelho">Excluir</a></td>
                    </tr>
                </tbody>
            </table>				
        </div>
    </div>
</div>
<div class="window md-modal" id="janela">
    <a href="" class="fechar">X</a>
    <div class="rows p-2">
        <div class="col-10">
            <label class="d-block pb-1">Selecionar Curso</label>
            <select class="form-campo">
                <option>Opção 01</option>
                <option>Opção 01</option>
                <option>Opção 01</option>
            </select>
        </div>
        <div class="col-2 mt-3 pt-1">
            <input type="submit" class="btn btn-azul" value="Matricular">
        </div>
    </div>
    <div class="rows">
        <div class="col-12">
            <h1 class="titulo border-top"><i class="fas fa-list-alt"></i> Meus cursos cursos</h1>
            <div  class="base-lista px-1">
                <table cellpadding="0" cellspacing="0" border="0" id="dataTable">
                    <thead>
                        <tr>
                            <th align="left" width="80%">Curso</th>
                            <th align="center">Excluir </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>
                        <tr>
                            <td align="left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>
                        <tr>
                            <td align="left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>						
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="mascara"></div>
<!--testemodal-->
<div class="window md-table" id="janela2">
    <a href="" class="fechar">X</a>
    <div class="border mb-3 radius-4 p-2 bg-gray">
        <div class="rows">			
            <div class="col-6">
                <label class="d-block pb-1">Selecionar Curso</label>
                <select class="form-campo">
                    <option>Opção 01</option>
                    <option>Opção 01</option>
                    <option>Opção 01</option>
                </select>
            </div>

            <div class="col-4 mt-3 pt-1">
                <input type="text" class="form-campo">
            </div>

            <div class="col-2 mt-3 pt-1">
                <input type="submit" class="btn btn-azul" value="Matricular">
            </div>
        </div>
    </div>
    <div class="rows">
        <div class="col-12">
            <div class="border radius-4">
                <h1 class="titulo"><i class="fas fa-list-alt"></i> Meus cursos cursos</h1>
                <div class="tabela-scroll p-1">
                    <table cellpadding="0" cellspacing="0" border="0" id="dataTable" class="width-100 tabela">
                        <thead>
                            <tr>
                                <th align="left" width="90%" style="text-align:left">Curso</th>
                                <th align="center">Excluir </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left" style="text-align:left">Curso</td>
                                <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                            </tr>
                            <tr>
                                <td align="left" style="text-align:left">Curso</td>
                                <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                            </tr>
                            <tr>
                                <td align="left" style="text-align:left">Curso</td>
                                <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                            </tr>	
                            <tr>
                                <td align="left" style="text-align:left">Curso</td>
                                <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                            </tr>	
                            <tr>
                                <td align="left" style="text-align:left">Curso</td>
                                <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                            </tr>						
                        </tbody>
                        <tr>
                            <td align="left" style="text-align:left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>	
                        <tr>
                            <td align="left" style="text-align:left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>	
                        <tr>
                            <td align="left" style="text-align:left">Curso</td>
                            <td align="center"><a href="" class="btn btn-vermelho d-inline-block">Excluir</a></td>
                        </tr>						
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>            	

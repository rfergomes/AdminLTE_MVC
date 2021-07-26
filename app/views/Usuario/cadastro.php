<h1 class="titulo"><i class="fas fa-list-alt"></i> Inserir novo cadastro</h1>
<div class="base-form">
    <form action="" method="POST">
        <div class="rows">
            <div class="col-12 mb-3">
                <label class="label">Nome</label>
                <input name="cliente" value="" type="text" placeholder="Insira um nome" class="form-campo">
            </div>
            <div class="col-3 mb-3">
                <label class="label">Cep</label>
                <input name="cep" value="" type="text" placeholder="Insira seu CEP" class="form-campo">
            </div>

            <div class="col-4 mb-3">				
                <label class="label">Endereço</label>
                <input name="endereco" value="" type="text" placeholder="Insira seu endereço" class="form-campo">
            </div>
            <div class="col-5 mb-3">
                <label class="label">Complemento</label>
                <input name="complemento" value="" type="text" placeholder="Insira um Número" class="form-campo">	
            </div>			
            <div class="col-2 mb-3">
                <label class="label">Número</label>
                <input name="numero" value="" type="text" placeholder="Insira um Número" class="form-campo">	
            </div>									
            <div class="col-6 mb-3">
                <label class="label">Bairro</label>
                <input name="bairro" value="" type="text" placeholder="Insira seu bairro" class="form-campo">
            </div>
            <div class="col-4 mb-3">
                <label class="label">Cidade</label>
                <input name="cidade" value="" type="text" placeholder="Insira sua cidade" class="form-campo">	
            </div>	

            <div class="col-3 mb-3">
                <label class="label">UF</label>
                <select name="id_estado" class="form-campo">

                </select>						
            </div>								

            <div class="col-3 mb-3">
                <label class="label">Celular</label>
                <input name="celular" value="" type="text" placeholder="Insira seu celular" class="form-campo">
            </div>
            <div class="col-3 mb-3">
                <label class="label">CPF</label>
                <input name="cpf" value="" type="text" placeholder="Insira seu CPF" class="form-campo">
            </div>

            <div class="col-3 mb-3">
                <label class="label">Data de cadastro</label>
                <input name="data_cadastro" value="" type="date" placeholder="Insira sua data" class="form-campo">
            </div>
            <div class="col-8 mb-3">
                <label class="label">Email</label>
                <input name="email" value="" type="text" placeholder="Insira um email" class="form-campo">
            </div>
            <div class="col-4 mb-3">
                <label class="label">Senha</label>
                <input name="senha" value="" type="password" placeholder="Insira seu Site" class="form-campo">
            </div>
            <div class="col-12 mt-3">
                <input type="hidden" name="id_cliente" value="" />
                <input type="submit" value="Cadastrar" class="btn d-table m-auto">
            </div>
        </div>
    </form>
</div>

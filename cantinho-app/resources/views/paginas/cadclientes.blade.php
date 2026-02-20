<x-layout titulo="Cadastro de Cliente">
    <form class="form-produto" action="cadclientes/SalvarC" method="GET">

        <!-- NOME -->
        <div class="campo">
            <label>Nome</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" name="nomeCliente" class="form-control" placeholder="Digite Seu Nome..." id="nomeCliente" required>
            </div>
        </div>

        <!-- EMAIL -->
        <div class="campo">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" name="email" class="form-control" placeholder="Digite Seu Email..." id="email" required>
            </div>
        </div>

        <!-- CPF -->
        <div class="campo">
            <label>CPF</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-vcard"></i>
                </span>
                <input type="text" name="cpf" class="form-control" placeholder="Dgite Seu CPF..." id="cpf" required>
            </div>
        </div>

        <!-- TELEFONE -->
        <div class="campo">
            <label>Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="text" name="telefone" class="form-control" placeholder="Digite Seu Telefone..." id="telefone" required>
            </div>
        </div>

        <div class="campo">
            <label>Dívida</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="text" name="divida" class="form-control" placeholder="Dívida do Cliente..." id="divida" required>
            </div>
        </div>

        <div class="area-botoes">
            <button type="submit" class="btn-confirmar">
                <i class="bi bi-check-circle"></i> Finalizar Cadastro
            </button>
        </div>

        <div class="area-botoes">
            <a class="btn-voltar" href="homeclientes">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
</form>
</x-layout>

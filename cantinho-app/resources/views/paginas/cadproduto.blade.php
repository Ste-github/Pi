<x-layout titulo="Cadastro de Produto">

    <form class="form-produto">

        <!-- Nome do Produto -->
        <div class="campo">
            <label>Nome do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-box-seam"></i>
                </span>
                <input type="text" class="form-control" placeholder="Nome...">
            </div>
        </div>

        <!-- Valor do Produto -->
        <div class="campo">
            <label>Valor do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <input type="text" class="form-control" placeholder="Valor com desconto...">
            </div>
        </div>

        <!-- Valor com Desconto -->
        <div class="campo">
            <label>Valor do produto com desconto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-tag"></i>
                </span>
                <input type="text" class="form-control" placeholder="Valor...">
            </div>
        </div>

        <!-- Quantidade em Estoque -->
        <div class="campo">
            <label>Quantidade de Produto Em Estoque</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-boxes"></i>
                </span>
                <input type="text" class="form-control" placeholder="Em estoque...">
            </div>
        </div>

        <div class="area-botoes">
            <button class="btn-confirmar">
                <i class="bi bi-check-circle"></i> Finalizar Cadastro
            </button>
        </div>
        
        <div class="area-botoes">
            <a class="btn-voltar" href="homeprodutos">
               <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </form>
</x-layout>
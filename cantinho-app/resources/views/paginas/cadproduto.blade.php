<x-layout titulo="Cadastro de Produto">
    <form class="form-produto" action="cadProduto/salvarP" method="GET">

        <!-- Nome do Produto -->
        <div class="campo">
            <label>Nome do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-box-seam"></i>
                </span>
                <input type="text" name="nomeProduto" class="form-control" placeholder="Nome do Produto..." id="nomeProduto" required>
            </div>
        </div>

        <!-- Valor do Produto -->
        <div class="campo">
            <label>Valor do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <input type="text" name="valor" class="form-control" placeholder="Valor do Produto..." id="valor" required>
            </div>
        </div>

        <!-- Valor com Desconto -->
        <div class="campo">
            <label>Valor do produto com desconto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-tag"></i>
                </span>
                <input type="text" name="valorDesconto" class="form-control" placeholder="Valor com Desconto..." id="valorDesconto">
            </div>
        </div>

        <!-- Quantidade em Estoque -->
        <div class="campo">
            <label>Quantidade de Produto Em Estoque</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-boxes"></i>
                </span>
                <input type="number" name="estoque" class="form-control" placeholder="Em estoque..." id="estoque" required>
            </div>
        </div>

        <div class="area-botoes">
            <button type="submit" class="btn-confirmar">
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
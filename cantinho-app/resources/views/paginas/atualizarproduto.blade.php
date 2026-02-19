<x-layout titulo="Atualização de Produto">

    <form class="form-produto">

        <!-- Código -->
        <div class="campo">
            <label>Código do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-upc-scan"></i>
                </span>
                <input type="text" class="form-control" placeholder="Código...">
            </div>
        </div>

        <!-- Nome -->
        <div class="campo">
            <label>Nome do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-box-seam"></i>
                </span>
                <input type="text" class="form-control" placeholder="Nome...">
            </div>
        </div>

        <!-- Valor -->
        <div class="campo">
            <label>Valor do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <input type="text" class="form-control" placeholder="Valor...">
            </div>
        </div>

        <!-- Desconto -->
        <div class="campo">
            <label>Valor do produto com desconto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-tag"></i>
                </span>
                <input type="text" class="form-control" placeholder="Com desconto...">
            </div>
        </div>

        <div class="area-botoes">
            <button class="btn-confirmar">
                <i class="bi bi-arrow-repeat"></i> Atualizar
            </button>
        </div>
        <div class="area-botoes">
             <a class="btn-voltar" href="homeprodutos">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
        </div>
    </form>

   

</x-layout>


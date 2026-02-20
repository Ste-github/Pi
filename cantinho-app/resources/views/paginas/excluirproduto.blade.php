<x-layout titulo="Excluir Produtos">

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

        <div class="area-botoes">
            <a class="btn-voltar" href="homeprodutos">
            <i class="bi bi-arrow-left-circle"></i> Voltar
            </a>
        </div>

    </form>

 

</x-layout>
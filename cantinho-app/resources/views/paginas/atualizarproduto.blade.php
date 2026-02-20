<x-layout titulo="Atualização de Produto">
    <form class="form-produto" action="../atualizarP/{{$dado->id}}" method="GET">

        <!-- Código -->
        <div class="campo">
            <label>Código do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-upc-scan"></i>
                </span>
                <input class="form-control" type="number" id="id" name="id" value="{{$dado->id}}" disabled required>
            </div>
        </div>

        <!-- Nome -->
        <div class="campo">
            <label>Nome do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-box-seam"></i>
                </span>
                <input class="form-control" type="text" name="nomeProduto" id="nomeProduto" value="{{$dado->nomeProduto}}">
            </div>
        </div>

        <!-- Valor -->
        <div class="campo">
            <label>Valor do Produto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <input class="form-control" type="text" name="valor" id="valor" value="{{$dado->valor}}">
            </div>
        </div>

        <!-- Desconto -->
        <div class="campo">
            <label>Valor do produto com desconto</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-tag"></i>
                </span>
                <input class="form-control" type="text" name="valorDesconto" id="valorDesconto" value="{{$dado->valorDesconto}}">
            </div>
        </div>

        <div class="area-botoes">
            <button type="submit" class="btn-confirmar">
                <i class="bi bi-arrow-repeat"></i> Atualizar
            </button>
        </div>

        <div class="area-botoes">
            <a href="/excluirP/{{$dado->id}}" class="btn-excluir">
                <i class="bi bi-trash"></i> Excluir
            </a>
        </div>

        <div class="area-botoes">
             <a class="btn-voltar" href="/consultarPaginaInicialP">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </form>

   

</x-layout>


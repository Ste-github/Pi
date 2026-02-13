<x-layout titulo="Cadastro de Produto">

    <form class="form-produto">

        <div class="campo">
            <label>Nome do Produto</label>
            <input type="text" placeholder="Nome...">
        </div>

        <div class="campo">
            <label>Valor do Produto Com Desconto</label>
            <input type="text" placeholder="Valor com desconto...">
        </div>

        <div class="campo">
            <label>Valor do Produto</label>
            <input type="text" placeholder="Valor...">
        </div>

        <div class="campo">
            <label>Quantidade de Produto Em Estoque</label>
            <input type="text" placeholder="Em estoque...">
        </div>

        <div class="area-botoes">
            <button class="btn-custom">Finalizar Edição</button>
        </form>
            
         <a class="btn-custom" href="consultarproduto">Voltar</a> <br>
    

</x-layout>

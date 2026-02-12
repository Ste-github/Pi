<x-layout titulo="TELA DE VENDAS">

    <div class="barra-busca">
        <strong>Tipo de venda</strong>
        <input type="checkbox"> Público
        <input type="checkbox"> Funcionários
        <span style="float:right">Atendente: Lucia</span>

        <div class="mt-3">
            <input type="text" class="form-control" placeholder="Digite o nome ou código do produto...">
        </div>
    </div>

    <table class="table tabela-vendas text-center">
        <thead>
            <tr>
                <th>Item</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unit.</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Coxinha</td>
                <td>2</td>
                <td>R$9,90</td>
                <td>R$19,80</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Café c/ Leite Médio</td>
                <td>1</td>
                <td>R$8,50</td>
                <td>R$8,50</td>
            </tr>
        </tbody>
    </table>

    <div class="resumo">
        <div class="resumo-esquerda">
            <p>Subtotal: R$28,30</p>
            <p>Desconto: R$0,00</p>
        </div>

        <div class="resumo-direita">
            <p>Desconto: R$0,00</p>
            <h3><strong>TOTAL: R$28,30</strong></h3>
        </div>
    </div>

    <section class="botoes">
        <a class="btn-custom" href="">Cancelar Compra</a>
        <a class="btn-custom" href="itensVenda">Finalizar Compra</a>
    </section>

</x-layout>
 
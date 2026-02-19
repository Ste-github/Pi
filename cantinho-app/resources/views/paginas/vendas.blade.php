<x-layout titulo="TELA DE VENDAS">

<div class="pdv-container">

   

    <!-- Barra superior -->
    <div class="pdv-topo">
        <div class="pdv-tipo">
            <strong>Tipo de venda</strong>

            <label>
                <input type="checkbox" checked> Público
            </label>

            <label>
                <input type="checkbox"> Funcionários
            </label>
        </div>

        <div class="pdv-atendente">
            👤 Atendente : Lucia
        </div>
    </div>

    <!-- Campo busca -->
    <div class="pdv-busca">
        <input type="text" placeholder="Digite o nome ou código do produto...">
    </div>

    <!-- Tabela -->
    <table class="pdv-tabela">
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

    <!-- Resumo -->
    <div class="pdv-resumo">
        <div class="pdv-esquerda">
            <p>Subtotal: <strong>R$28,30</strong></p>
            <p>Desconto: <strong>R$0,00</strong></p>
        </div>

        <div class="pdv-direita">
            <p>Desconto: <strong>R$0,00</strong></p>
            <h3>TOTAL: R$28,30</h3>
        </div>
    </div>

    <!-- Botões -->
    <div class="pdv-botoes">
        <a href="gerenciar" class="pdv-btn cancelar">Cancelar Compra</a>
        <a href="itensVenda" class="pdv-btn finalizar">Finalizar Compra</a>
    </div>

</div>

</x-layout>

<x-layout titulo="Consulta de Produto">

    <input type="text" class="form-control mb-3" placeholder="Digite o nome do produto...">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Valor com Desconto</th>
                <th>Código</th>
                <th>Em Estoque</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Coxinha</td>
                <td>R$ 9,90</td>
                <td>R$ 7,90</td>
                <td>1</td>
                <td>15</td>
                
            </tr>
        </tbody>
    </table>

    <button class="btn btn-primary">+ Novo Produto</button>
    <button class="btn btn-danger">Excluir</button>

</x-layout>
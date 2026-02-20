<x-layout titulo="Consultar Produtos">
    <div class="consultar-container">

        <table class="tabela-clientes">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Valor</th>
                    <th>Valor com Desconto</th>
                    <th>Em Estoque</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($ids as $id)
                <tr>
                    <td>{{$id->id}}</td>
                    <td>{{$id->nomeProduto}}</td>
                    <td>{{$id->valor}}</td>
                    <td>{{$id->valorDesconto}}</td>
                    <td>{{$id->estoque}}</td>
                    <td>
                        <a class="btn btn-outline-secondary btn-sm me-1" href="editarP/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="area-botoes">
            <a class="btn-voltar" href="homeprodutos">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>    
    </div>
</x-layout>
<x-layout titulo="Consultar Clientes">
    <div class="consultar-container">

        <table class="tabela-clientes">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Cliente</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Dívida</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ids as $id)
                <tr>
                    <td>{{$id->id}}</td>
                    <td>{{$id->nomeCliente}}</td>
                    <td>{{$id->telefone}}</td>
                    <td>{{$id->cpf}}</td>
                    <td>{{$id->email}}</td>
                    <td>{{$id->divida}}</td>
                    <td>
                        <a class="btn btn-outline-secondary btn-sm me-1" href="editarC/{{$id->id}}"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        
        <div class="area-botoes">
            <a class="btn-voltar" href="homeclientes">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>        
    </div>
</x-layout>
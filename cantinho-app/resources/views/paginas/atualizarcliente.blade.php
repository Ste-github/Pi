<x-layout titulo="Atualização de Clientes">
    <form class="form-produto" action="../atualizarC/{{$dado->id}}">

        <!-- Código -->
        <div class="campo">
            <label>Código do Cliente</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input class="form-control" type="text" name="id" id="id" value="{{$dado->id}}" disabled required>
            </div>
        </div>

        <!-- Nome -->
        <div class="campo">
            <label>Nome do Cliente</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" value="{{$dado->nomeCliente}}">
            </div>
        </div>

        <!-- Email -->
        <div class="campo">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input class="form-control" type="email" name="email" id="email" value="{{$dado->email}}">
            </div>
        </div>

        <!-- Telefone -->
        <div class="campo">
            <label>Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input class="form-control" type="text" name="telefone" id="email" value="{{$dado->telefone}}">
            </div>
        </div>

        <!-- CPF -->
        <div class="campo">
            <label>CPF</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-vcard"></i>
                </span>
                <input class="form-control" type="text" name="cpf" id="cpf" value="{{$dado->cpf}}">
            </div>
        </div>

        <!-- Valor -->
        <div class="campo">
            <label>Valor a ser pago</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-cash-coin"></i>
                </span>
                <input class="form-control" type="text" name="divida" id="divida" value="{{$dado->divida}}">
            </div>
        </div>

        <div class="area-botoes">
            <button type="submit" class="btn-confirmar">
                <i class="bi bi-arrow-repeat"></i> Atualizar
            </button>
        </div>

        <div class="area-botoes">
            <a href="/excluirC/{{$dado->id}}" class="btn-excluir">
                <i class="bi bi-trash"></i> Excluir
            </a>
        </div>
        
        <div class="area-botoes">
            <a class="btn-voltar" href="/consultarPaginaInicialC">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </form>
</x-layout>
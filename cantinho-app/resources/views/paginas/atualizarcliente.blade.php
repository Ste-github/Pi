<x-layout titulo="Atualização de Clientes">

    <form class="form-produto">

        <!-- Nome -->
        <div class="campo">
            <label>Nome</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" class="form-control" placeholder="Nome...">
            </div>
        </div>

        <!-- Email -->
        <div class="campo">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" class="form-control" placeholder="email@gmail.com">
            </div>
        </div>

        <!-- Telefone -->
        <div class="campo">
            <label>Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="text" class="form-control" placeholder="(00) 00000-0000">
            </div>
        </div>

        <!-- CPF -->
        <div class="campo">
            <label>CPF</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-vcard"></i>
                </span>
                <input type="text" class="form-control" placeholder="Apenas números...">
            </div>
        </div>

        <!-- Valor -->
        <div class="campo">
            <label>Valor a ser pago</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-cash-coin"></i>
                </span>
                <input type="text" class="form-control" placeholder="R$...">
            </div>
        </div>

        <div class="area-botoes">
            <button class="btn-confirmar">
                <i class="bi bi-arrow-repeat"></i> Atualizar
            </button>
        </div>
            <div class="area-botoes">
             <a class="btn-voltar" href="homeclientes">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
        </div>
    </form>

    

</x-layout>

<x-layout titulo="Cadastro de Cliente">

    <form class="form-produto">

        <!-- NOME -->
        <div class="campo">
            <label>Nome</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" class="form-control" placeholder="Nome completo...">
            </div>
        </div>

        <!-- EMAIL -->
        <div class="campo">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" class="form-control" placeholder="email@exemplo.com">
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

        <!-- TELEFONE -->
        <div class="campo">
            <label>Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="text" class="form-control" placeholder="(00) 00000-0000">
            </div>
        </div>

        <div class="area-botoes">
            <button class="btn-confirmar">
                <i class="bi bi-check-circle"></i> Finalizar Cadastro
            </button>
        </div>
        <div class="area-botoes">
             <a class="btn-voltar" href="homeclientes">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
        </div>

    </form>
 

</x-layout>

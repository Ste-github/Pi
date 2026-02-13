<x-layout titulo="Cadastro">
    
<div class="container">
    <div class="card-cadastro">

        <h2>Não tem cadastro?</h2>
        <p>Sente, tome um café e agilize agora o seu cadastro</p>

        <form method="POST" action="/cadastrarLogin">
            @csrf

            <label>Email:</label>
            <input type="email" name="email"
            placeholder="Digite aqui seu e-mail..." required>

            <label>Nome de Usuário:</label>
            <input type="text" name="nomeUsuario"
            placeholder="Crie um nome de usuário..." required>

            <label>Senha:</label>
            <input type="password" name="senha"
            placeholder="Crie uma senha..." required>

            <label>Confirmar senha:</label>
            <input type="password" name="senhaConfirmada"
            placeholder="Confirme sua senha..." required>

            <button type="submit" class="btn-preto">
                Confirmar
            </button>

            <a href="/" class="btn-preto voltar">
                Voltar
            </a>

        </form>

    </div>
</div>

</x-layout>

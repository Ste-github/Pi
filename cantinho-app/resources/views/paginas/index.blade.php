<x-layout titulo="Bem Vindo!">
    <form action="/login" method="GET"></form>
        <link rel="stylesheet" href="css/login.css">

        <div class="top-bar"></div>

        <div class="container">
            <div class="login-box">

                <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Carrinho">
                        <h1> Vini Sucos & Café  </h1>
                <form method="POST" action="">
                    @csrf

                <div class="login-group">
                    <i class="bi bi-person"></i>
                    <input type="text" name="nomeUsuario" placeholder="Usuário" required>
                </div>

                <div class="login-group">
                    <i class="bi bi-lock"></i>
                    <input type="password" name="senha" placeholder="Insira sua senha" required>
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Entrar
                </button>

                </form>

                <div class="cadastre-se">
                    <a href="/cadLogin">Primeiro acesso? Cadastre-se aqui!</a>
                </div>

            </div>
        </div>
    </form>
</x-layout>
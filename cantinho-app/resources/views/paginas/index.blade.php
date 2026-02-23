<x-layout titulo="Bem Vindo!">
    <form action="/login" method="POST">
        <link rel="stylesheet" href="css/login.css">
        @csrf

        <div class="top-bar"></div>

        <div class="container">
            <div class="login-box">

                <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Carrinho">
                <h1> Vini Sucos & Café  </h1>

                @if(session('erro'))
                    <div style="color: red; text-align:center; margin-bottom:10px;">
                        {{ session('erro') }}
                    </div>
                @endif
                <div class="login-group">
                    <i class="bi bi-person"></i>
                    <input type="text" name="login" placeholder="Email ou nome de usuário..." required>
                </div>

                <div class="login-group">
                    <i class="bi bi-lock"></i>
                    <input type="password" name="senha" placeholder="Insira sua senha..." required>
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Entrar
                </button>

                <div class="cadastre-se">
                    <a href="/cadLogin">Primeiro acesso? Cadastre-se aqui!</a>
                </div>

            </div>
        </div>
    </form>
</x-layout>
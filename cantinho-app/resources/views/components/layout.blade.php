<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $titulo }}</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/vendas.css"> <!-- css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    </head>
    <body>
        <style>
            body {
    min-height: 100vh;
    background: linear-gradient(135deg, #e3f2fd, #ffffff, #e3f2fd);
    background-attachment: fixed;
}

        </style>
        <header class="topo">
                {{ $titulo }}
        </header>


            <main class="container mt-4">
                {{ $slot }}
            </main>

    </body>
</html>
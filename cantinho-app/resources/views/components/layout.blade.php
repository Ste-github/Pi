<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $titulo }}</title>
        <!-- css -->
        <link rel="stylesheet" href="/css/app.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
            <header class="topo">
                {{ $titulo }}
            </header>


            <main class="container mt-4">
                {{ $slot }}
            </main>

    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--CSS Booststrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Como referenciar algo da pasta public-->
        <!-- CSS da aplicação-->
        <link rel="stylesheet" href="/CSS/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <!--Essa diretiva yield está nos dizendo
        onde ficará o conteúdo de cada uma das páginas-->
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>
    </body>
</html>

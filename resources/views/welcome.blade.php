<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body class="antialiased">
        <h1>Olá Mundo</h1>

        <!--Fazendo if no html com o auxilio do blade, sem precisar abrir uma tag php-->
                @if(10 > 15)
                 <p>A condição é true</p>
                @endif

            <p>{{$nome}}</p>

            @if($nome == "Pedro")
            <p>O nome é Pedro</p>
            @elseif($nome == "Duda")
            <p>O nome é {{$nome}} e a idade é {{$idade}}</p>
            @else
            <p>O nome não é Pedro</p>
            @endif

            <!--Fazendo for para percorrer o array que passamos no web.php-->
            @for($i = 0; $i < count($arr); $i++)
                <p>{{$arr[$i]}}</p>
                @if($i == 2)
                    <p>O i é 2</p>
                @endif
            @endfor

            @php
                $nome = "João";
                echo $nome
            @endphp

            <!--Os comentários com blade não aparecem pr usuário no inspecionar-->
            {{--Este é um comentário com Blade--}}
    </body>
</html>

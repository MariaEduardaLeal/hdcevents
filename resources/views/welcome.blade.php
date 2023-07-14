<!--Estamos dizendo que esse arquivo está extendendo do arquivo main que está na pasta layouts-->
@extends('layouts.main')
<!-- Aqui abrimos a seção para dar o título da página-->
@section('title', 'HDC Events')
<!--Aqui estamos abrindo a seção para o content, no caso para todo o conteúdo que estará na nossa página
e em baixo é necessário fechar nossa seção content-->
@section('content')
        <h1>Olá Mundo</h1>
        <img src="/img/Auditorio.04.jpg" alt="">
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
<!--Fechando a seção content-->
@endsection

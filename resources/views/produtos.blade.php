<!--Estamos dizendo que esse arquivo está extendendo do arquivo main que está na pasta layouts-->
@extends('layouts.main')
<!-- Aqui abrimos a seção para dar o título da página-->
@section('title', 'Produtos')
<!--Aqui estamos abrindo a seção para o content, no caso para todo o conteúdo que estará na nossa página
e em baixo é necessário fechar nossa seção content-->
@section('content')
<h1>Está é a página onde ficaram os produtos</h1>
<!--Fechando a seção content-->
@endsection

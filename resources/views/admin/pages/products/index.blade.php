@extends('admin.layout.app')

@section('content')

<h1>Exibindo os produtos</h1>

    @include('admin.includes.alert', ["content" => 'Conteúdo para exibir no alert'])
    
    @component('admin.components.card')

        @slot('title')
            <h1>Título Exemplo</h1>
        @endslot

        <p>Card Example</p>
    @endcomponent

    @foreach ($names as $name)
        <p class="@if($loop->last) text-green-800 @endif">Nome: {{$name}}</p>
    @endforeach

    {{$name}}

@endsection

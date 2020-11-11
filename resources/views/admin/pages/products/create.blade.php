@extends('admin.layout.app')

@section('content')
    <div class="container">
        <form action="" method="post" class="">
            <input type="text" name="name" class="p-1 border rounded border-opacity-25 border-black border-solid" placeholder="Nome">
            <input type="text" name="description" class="p-1 border rounded border-opacity-25 border-black border-solid" placeholder="Descrição">
            <input type="submit" value="Enviar" class="p-1 border rounded border-opacity-75 border-black border-solid bg-white ">
        </form>
    </div>
@endsection

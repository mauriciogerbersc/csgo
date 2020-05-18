@extends('admin/layouts/layout', ["current" => "categorias_jogos"])

@section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categoria de Jogos</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categoria de Armas Jogos</li>
    </ol>
</nav>

@include('admin.mensagem', ['mensagem' => $mensagem ?? '', 'alert_tipo' => $alert_tipo ?? ''])

<a href="{{ route('criar_arma') }}" class="btn btn-dark mb-2">Cadastrar Arma</a> <br />



<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Thumb</th>
                <th>Arma</th>
                <th>Ações</th>
            </th>
        </thead>
        <tbody>
        @foreach($guns as $gun)
            <tr>
                <td>{{ $gun->id }}</td>
            
                <td>{{ $gun->categoria->categoria }}</td>
                <td><img  width="80" src="/files/{{ $gun->gun_image }}" /></td>
                <td>{{ $gun->name }}</td>
                <td class="d-flex">
                    <a href="/admin/gun/{{$gun->id}}" class="btn btn-info btn-sm mr-1">
                        Editar
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
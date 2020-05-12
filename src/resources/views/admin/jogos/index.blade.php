@extends('admin/layouts/layout', ["current" => "jogos"])

@section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jogos</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Jogos</li>
    </ol>
</nav>

@include('admin.mensagem', ['mensagem' => $mensagem ?? '', 'alert_tipo' => $alert_tipo ?? ''])

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jogo</th>
                <th>Ações</th>
            </th>
        </thead>
        <tbody>
        @foreach($jogos as $jogo)
            <tr>
                <td>{{ $jogo->id }}</td>
                <td>{{ $jogo->jogo }}</td>
                <td class="d-flex">
                    <a href="/admin/jogo/{{$jogo->id}}" class="btn btn-info btn-sm mr-1">
                        Editar
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
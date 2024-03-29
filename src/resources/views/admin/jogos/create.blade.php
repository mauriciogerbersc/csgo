@extends('admin/layouts/layout', ["current" => "jogos"]))

@section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Criar Jogos</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/jogos">Jogos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Criar Jogo</li>
    </ol>
</nav>

<form method="post">
    @csrf

    <div class="form-row">

        <div class="form-group col-md-12">
            <label for="jogo">Jogo</label>
            <input type="text" class="form-control" id="jogo" name="jogo" value="">
        </div>

    </div>

    <button type="submit" class="btn btn-primary mt-2">Salvar</button>
</form>
<br />

@endsection


@section('scripts')


@endsection
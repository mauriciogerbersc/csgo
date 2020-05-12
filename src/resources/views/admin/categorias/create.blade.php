@extends('admin/layouts/layout', ["current" => "jogos"]))

@section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categoria de Armas</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/categorias_armas">Jogos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Criar Categoria de Arma</li>
    </ol>
</nav>

<form method="post">
    @csrf

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="curso">Jogo</label>
            <select class="form-control" name="jogo_id">
                @foreach($jogos as $jogo)
                <option value="{{ $jogo->id }}">{{ $jogo->jogo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="categoria">Categoria de Arma</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="">
        </div>

    </div>

    <button type="submit" class="btn btn-primary mt-2">Salvar</button>
</form>
<br />

@endsection


@section('scripts')


@endsection
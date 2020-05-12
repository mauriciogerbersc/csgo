@extends('admin/layouts/layout', ["current" => "jogos"]))

@section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Criar Jogos</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/jogos">Jogos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Criar Arma</li>
    </ol>
</nav>

<form method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="jogo">Jogo</label>
            <select class="form-control" name="jogo_id">
                @foreach($jogos as $jogo)
                <option value="{{ $jogo->id }}">{{ $jogo->jogo }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="form-group col-md-6">
            <label for="categoria_id">Categoria</label>
            <select class="form-control" name="categoria_id">
                @foreach($categorias as $cat)
                <option value="{{ $cat->id }}">{{ $cat->categoria }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="name">Gun</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>


        <div class="form-group col-md-6">
            <label for="image">Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="gun_image">
                <label class="custom-file-label" for="customFile">Escolha o Arquivo</label>
            </div>
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="ammo">Ammo</label>
            <input type="text" class="form-control" id="ammo" name="ammo" value="">
        </div>
        
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="award">Kill Awards</label>
            <input type="text" class="form-control" id="award" name="award" value="">
        </div>


        <div class="form-group col-md-6">
            <label for="damage">Damage</label>
            <input type="text" class="form-control" id="damage" name="damage" value="">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="firerate">Firerate</label>
            <input type="text" class="form-control" id="firerate" name="firerate" value="">
        </div>

        <div class="form-group col-md-6">
            <label for="recoil_control">Recoil Control</label>
            <input type="text" class="form-control" id="recoil_control" name="recoil_control" value="">
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="accurate_range">Accurate Range</label>
            <input type="text" class="form-control" id="accurate_range" name="accurate_range" value="">
        </div>

        <div class="form-group col-md-6">
            <label for="armor_penetration">Armor Penetration</label>
            <input type="text" class="form-control" id="armor_penetration" name="armor_penetration" value="">
        </div>

    </div>

    <button type="submit" class="btn btn-primary mt-2">Salvar</button>
</form>
<br />

@endsection


@section('scripts')


@endsection
@extends('layouts/layout', ["current" => $type])

@section('content')

<section class="compare">

    <div class="header-section">
        <div class="container">
            <nav aria-label="breadcrumb" class="py-3">
                <ol class="site-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$type}}</li>
                </ol>
            </nav>
            <h1 class="section"><span class="text-content">{{$type}}</span>  detailed statistics</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-3 order-md-1 py-3">
                <div class="filter_sidebar jb_cover">
                <div class="filter_header">
                        <h1>Sort By</h1>
                </div>
                <div class="filter_category jb_cover">
                        <p>
                            Price 
                            <span style="float:right;">
                                <a href="?price=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i></i>
                                </a>  
                                <a href="?price=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        </p>
                        <p>
                            Award
                            <span style="float:right;">
                                <a href="?award=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i>
                                </a>  
                                <a href="?award=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        
                        </p>
                        <p>
                            Damage
                            <span style="float:right;">
                                <a href="?damage=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i>
                                </a>  
                                <a href="?damage=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        </p>
                        <p>
                            Firerate
                            <span style="float:right;">
                                <a href="?firerate=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i>
                                </a>  
                                <a href="?firerate=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        </p>
                        <p>
                            Accurate Range
                            <span style="float:right;">
                                <a href="?accurate=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i>
                                </a>  
                                <a href="?accurate=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        </p>
                        <p>
                            Armor Penetration
                            <span style="float:right;">
                                <a href="?armor=asc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-up"></i>
                                </a>  
                                <a href="?armor=desc">
                                    <span class="d-flex"><i class="fas fa-sort-amount-down"></i>
                                </a>
                            </span>
                        </p>
                </div>
                </div>
            </div>

            <div class="col-md-9 order-md-2">
                <div class="row">
                @foreach($weapons as $weapon)
                
                    <div class="col-md-6 mb-3">
                        <div class="compare-content py-3 pb-2">
                            <div class="compare-box">
                                <div class="compare-table inside">
                                    <table>
                                        <thead>
                                            <tr style="background-color: #ffb400 !important;color: #fff;">
                                                <th><img src="/files/{{ $weapon->gun_image }}" alt="{{ $weapon->categoria }} - CSGO - {{ $weapon->name }}" title="{{ $weapon->categoria }} - CSGO - {{ $weapon->name }}" class="img-inside">Attribute</th>
                                                <th>Details </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td><strong>{{ $weapon->name }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Price:</td>
                                            <td><strong>$ {{ $weapon->gun_price }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Ammo:</td>
                                            <td><strong>{{ $weapon->ammo }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Award:</td>
                                            <td><strong>$ {{ $weapon->award }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Damage:</td>
                                            <td><strong>{{ $weapon->damage }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Firerate:</td>
                                            <td><strong>{{ $weapon->firerate }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Recoil Control:</td>
                                            <td><strong>{{ $weapon->recoil_control }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Accurate Range:</td>
                                            <td><strong>{{ $weapon->accurate_range }} m</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Armor Penetration:</td>
                                            <td><strong>{{ $weapon->armor_penetration }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="view_button text-center">
                                                    <a class="btn" href="/skins/{{$weapon->name}}/{{$type}}">View Skins</a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                
                @endforeach
            </div>
            </div>
        </div>

    </div>

</section>
@endsection


@section('scripts')
<script src="{{ asset('js/select.min.js') }}"></script>
@endsection
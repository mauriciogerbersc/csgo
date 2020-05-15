@extends('layouts/layout', ["current" => "pistols"])


@section('content')

<section class="compare">
    <div class="container">
        <div class="row">
            @foreach($pistols as $pistol)
            <div class="col-md-4 col-sm-4 col-xs-4">  
            <div class="compare-content py-3 pb-2">
                <div class="compare-box">
                  <div class="compare-table inside">
                    <table>
                        <thead>
                            <tr style="background-color: #d5057f !important;color: #fff;">
                                <th class=><img src="files/{{ $pistol->gun_image }}" alt="{{ $pistol->categoria->categoria }} - CSGO - {{ $pistol->name }}" title="{{ $pistol->categoria->categoria }} - CSGO - {{ $pistol->name }}" class="img-inside">Attribute</th>
                                <th>Attribute Info</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><a href="/skins/{{$pistol->name}}"><strong>{{ $pistol->name }}</strong></a></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><strong>$ {{ $pistol->gun_price }}</strong></td>
                        </tr>
                        <tr>
                            <td>Ammo:</td>
                            <td>{{ $pistol->ammo }}</td>
                        </tr>
                        <tr>
                            <td>Award:</td>
                            <td>$ {{ $pistol->award }}</td>
                        </tr>
                        <tr>
                            <td>Damage:</td>
                            <td>{{ $pistol->damage }}</td>
                        </tr>
                        <tr>
                            <td>Firerate:</td>
                            <td>{{ $pistol->firerate }}</td>
                        </tr>
                        <tr>
                            <td>Recoil Control:</td>
                            <td>{{ $pistol->recoil_control }}</td>
                        </tr>
                        <tr>
                            <td>Accurate Range:</td>
                            <td>{{ $pistol->accurate_range }} m</td>
                        </tr>
                        <tr>
                            <td>Armor Penetration:</td>
                            <td>{{ $pistol->armor_penetration }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="view_button text-center">
                                    <a class="btn" href="/skins/{{$pistol->name}}">View Skins</a>
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

</section>
@endsection

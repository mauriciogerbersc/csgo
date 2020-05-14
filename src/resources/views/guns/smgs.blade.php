@extends('layouts/layout', ["current" => "smgs"])


@section('content')

<section class="compare">
    <div class="container">
        <div class="row">
            @foreach($smgs as $smg)
            <div class="col-md-4 col-sm-4 col-xs-4">  
            <div class="compare-content py-3 pb-2">
                <div class="compare-box">
                  <div class="compare-table inside">
                    <table>
                        <thead>
                            <tr style="background-color: #d5057f !important;color: #fff;">
                                <th class=><img src="files/{{ $smg->gun_image }}" alt="{{ $smg->categoria->categoria }} - CSGO - {{ $smg->name }}" title="{{ $smg->categoria->categoria }} - CSGO - {{ $smg->name }}"  class="img-inside">Attribute</th>
                                <th>Attribute Info</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><a href="/skins/{{$smg->name}}"><strong>{{ $smg->name }}</strong></a></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><strong>$ {{ $smg->gun_price }}</strong></td>
                        </tr>
                        <tr>
                            <td>Ammo:</td>
                            <td>{{ $smg->ammo }}</td>
                        </tr>
                        <tr>
                            <td>Award:</td>
                            <td>$ {{ $smg->award }}</td>
                        </tr>
                        <tr>
                            <td>Damage:</td>
                            <td>{{ $smg->damage }}</td>
                        </tr>
                        <tr>
                            <td>Firerate:</td>
                            <td>{{ $smg->firerate }}</td>
                        </tr>
                        <tr>
                            <td>Recoil Control:</td>
                            <td>{{ $smg->recoil_control }}</td>
                        </tr>
                        <tr>
                            <td>Accurate Range:</td>
                            <td>{{ $smg->accurate_range }} m</td>
                        </tr>
                        <tr>
                            <td>Armor Penetration:</td>
                            <td>{{ $smg->armor_penetration }}</td>
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

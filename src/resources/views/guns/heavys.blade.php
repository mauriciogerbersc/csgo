@extends('layouts/layout', ["current" => "heavy"])


@section('content')

<section class="compare">
    <div class="container">
        <div class="row">
            @foreach($heavys as $heavy)
            <div class="col-md-4 col-sm-4 col-xs-4">  
            <div class="compare-content py-3 pb-2">
                <div class="compare-box">
                  <div class="compare-table inside">
                    <table>
                        <thead>
                            <tr style="background-color: #d5057f !important;color: #fff;">
                                <th class=><img src="files/{{ $heavy->gun_image }}" class="img-inside" alt="{{ $heavy->categoria->categoria }} - CSGO - {{ $heavy->name }}" title="{{ $heavy->categoria->categoria }} - CSGO - {{ $heavy->name }}">Attribute</th>
                                <th>Attribute Info</th>
                            </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Name:</td>
                            <td><strong>{{ $heavy->name }}</strong></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><strong>$ {{ $heavy->gun_price }}</strong></td>
                        </tr>
                        <tr>
                            <td>Ammo:</td>
                            <td>{{ $heavy->ammo }}</td>
                        </tr>
                        <tr>
                            <td>Award:</td>
                            <td>$ {{ $heavy->award }}</td>
                        </tr>
                        <tr>
                            <td>Damage:</td>
                            <td>{{ $heavy->damage }}</td>
                        </tr>
                        <tr>
                            <td>Firerate:</td>
                            <td>{{ $heavy->firerate }}</td>
                        </tr>
                        <tr>
                            <td>Recoil Control:</td>
                            <td>{{ $heavy->recoil_control }}</td>
                        </tr>
                        <tr>
                            <td>Accurate Range:</td>
                            <td>{{ $heavy->accurate_range }} m</td>
                        </tr>
                        <tr>
                            <td>Armor Penetration:</td>
                            <td>{{ $heavy->armor_penetration }}</td>
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

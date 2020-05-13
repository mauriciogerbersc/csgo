@extends('layouts/layout', ["current" => "rifles"])


@section('content')

<section class="compare">
    <div class="container">
        <div class="row">
            @foreach($rifles as $rifle)
            <div class="col-md-4 col-sm-4 col-xs-4">  
            <div class="compare-content py-3 pb-2">
                <div class="compare-box">
                  <div class="compare-table inside">
                    <table>
                        <thead>
                            <tr style="background-color: #d5057f !important;color: #fff;">
                                <th class=><img src="files/{{ $rifle->gun_image }}" class="img-inside" alt="{{ $rifle->categoria->categoria }} - CSGO - {{ $rifle->name }}"title="{{ $rifle->categoria->categoria }} - CSGO - {{ $rifle->name }}">Attribute</th>
                                <th>Attribute Info</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><strong>{{ $rifle->name }}</strong></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><strong>$ {{ $rifle->gun_price }}</strong></td>
                        </tr>
                        <tr>
                            <td>Ammo:</td>
                            <td>{{ $rifle->ammo }}</td>
                        </tr>
                        <tr>
                            <td>Award:</td>
                            <td>$ {{ $rifle->award }}</td>
                        </tr>
                        <tr>
                            <td>Damage:</td>
                            <td>{{ $rifle->damage }}</td>
                        </tr>
                        <tr>
                            <td>Firerate:</td>
                            <td>{{ $rifle->firerate }}</td>
                        </tr>
                        <tr>
                            <td>Recoil Control:</td>
                            <td>{{ $rifle->recoil_control }}</td>
                        </tr>
                        <tr>
                            <td>Accurate Range:</td>
                            <td>{{ $rifle->accurate_range }} m</td>
                        </tr>
                        <tr>
                            <td>Armor Penetration:</td>
                            <td>{{ $rifle->armor_penetration }}</td>
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

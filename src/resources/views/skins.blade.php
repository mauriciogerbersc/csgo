@extends('layouts/layout', ["current" => $type])


@section('content')
<section class="compare ">

    <div class="header-section">
        <div class="container">
            <nav aria-label="breadcrumb" class="py-3">
                <ol class="site-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/weapons/{{$type}}">{{$type}}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$gun}} - Skin market</li>
                </ol>
            </nav>
            <h1 class="section"><span class="text-content">{{$gun}}</span> skins market</h1>
        </div>
    </div>

    <div class="container">
      
            @foreach($arrayDeArmas as $key => $guns)
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center py-5 pb-5">
                    <h3>{{$key}}</h3>
                  </div>
                </div>
              </div>

              <div class="row ">
                  @foreach($guns as $gun => $datalhes)
                
                  <div class="col-md-4 col-sm-4 col-xs-12 mb-4">  
                      <div class="single-gun">
                          <div class="gun-img">
                              <img src="{{$datalhes['imagem'] }}" />
                          </div>
                          <div class="gun-content">
                              <h4>{{$gun}}</h4>
                              <p>
                                 Prices<br/>
                                 Min: $ {{$datalhes['price_min']}} ~ Max: $ {{$datalhes['price_max']}}
                              </p>
                          </div>
                      </div>
                  </div>
                  @endforeach
            
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
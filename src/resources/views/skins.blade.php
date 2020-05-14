@extends('layouts/layout', ["current" => "index"])


@section('content')
<section class="compare py-5 pb-5">
    <div class="container">
      
            @foreach($arrayDeArmas as $key => $guns)
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h3>{{$key}}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
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
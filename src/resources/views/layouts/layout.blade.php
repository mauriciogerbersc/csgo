
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="compare firerate, ammo, awards, recoil from your favorite csgo guns">
    <meta name="author" content="csgogunscompare">
    <title>csgocompare - Compare CSGO Guns</title>


     <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,200;1,300;1,700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#563d7c">
    <style>
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /*.themed-grid-col {
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: rgba(86, 61, 124, .15);
        border: 1px solid rgba(86, 61, 124, .2);
      }

      .themed-container {
        padding: 15px;
        margin-bottom: 30px;
        background-color: rgba(0, 123, 255, .15);
        border: 1px solid rgba(0, 123, 255, .2);
      }*/
    </style>
  </head>
  <body>

    <header class="h-one">
      <div class="topbar">
        <div class="container">
          <div class="row">

            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="topbar-left">
              <ul>
                <li><a href="">contact@csgocompare.com</a></li>
              </ul>
              </div>
            </div>

           
          </div>
        </div>
      </div>
      <div class="header-x">
        <div class="container">
          <div class="row">
            
            <div class="col-md-3 col-sm-3">
              <div class="logo">
                <a class="navbar-brand" href="/">
                  <img src="{{ asset('img/logo.png') }}" width="180" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <!-- mainmenu start -->
                <nav class="navbar align-items-right navbar-expand-lg" >
                
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse text-center justify-content-center align-self-right" id="navbarNavDropdown" >
                    <ul class="navbar-nav " style="padding: 25px 0; float:right;">
                      
                      <li>
                        <a  @if($current=="pistols" ) class="active" @else class="" @endif href="{{ route('pistols') }}">Pistols</a>
                      </li>
                      <li >
                        <a @if($current=="smgs" ) class="active" @else class="" @endif href="{{ route('smgs') }}">SMGs</a>
                      </li>
                      <li >
                        <a @if($current=="heavy" ) class="active" @else class="" @endif href="{{ route('heavy') }}">Heavys</a>
                      </li>
                      <li >
                        <a @if($current=="rifles" ) class="active" @else class="" @endif href="{{ route('rifles') }}">Rifles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              <!-- mainmenu end -->
            </div>
        </div>
      </div>
    </header>

    

    @yield('content')

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  @yield("scripts")


</body>
</html>

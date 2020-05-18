
<!doctype html>
<html lang="en">
  <head>
    @include('analytics')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="compare firerate, ammo, awards, recoil from your favorite csgo guns - counter-strike, cs global offensive">
    <meta name="author" content="csgocompare">
    <title>csgocompare - Compare CSGO Guns</title>


     <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/fonts.css') }}" rel="stylesheet">
    <link  href="{{ secure_asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ secure_asset('css/default.css') }}" rel="stylesheet">

  </head>
  <body>

    <div class="hs_lang_wrapper">
			<div class="container-fluid">
				<div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="contact_header">
            <a href="mailto:contact@csgocompare.com">contact@csgocompare.com</a>
            </div>
          </div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<ul class="icon_list_news social_icon_topheader2">
     
                <li> <a href="https://twitter.com/csgocomparecom" target="_blank"><i class="fab fa-twitter"></i></a></li>
						</ul>
						</div>
							
				</div>
			</div>
		</div>

    <div class="cp_navi_main_wrapper jb_cover">
      <div class="container-fluid">
          <div class="cp_logo_wrapper">
              <a href="/">
                <img src="{{ asset('img/logo.png') }}" width="180" alt="">
              </a>
          </div>
          <!-- mobile menu area start -->
          <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="cd-dropdown-wrapper">
                              <a class="house_toggle" href="#0">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                      <g>
                                          <g>
                                              <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165"></path>
                                          </g>
                                          <g>
                                              <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165"></path>
                                          </g>
                                          <g>
                                              <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165"></path>
                                          </g>
                                          <g>
                                              <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165"></path>
                                          </g>
                                          <g>
                                              <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165"></path>
                                          </g>
                                      </g>
                                  </svg>
                              </a>
                              <!-- .cd-dropdown -->

                          </div>
                      </div>
                  </div>
              </div>
              <!-- .cd-dropdown-wrapper -->
          </header>
          

          <div class="jb_navigation_wrapper">
              <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                  <ul class="main_nav_ul">
                      <li class="has-mega gc_main_navigation">
                        <a  @if($current=="pistols" ) class="gc_main_navigation active_class" @else class="gc_main_navigation" @endif href="/weapons/pistols">Pistols</a>
                      </li>
                      <li class="has-mega gc_main_navigation">
                        <a @if($current=="smgs" ) class="gc_main_navigation active_class" @else class="gc_main_navigation" @endif href="/weapons/smgs">SMGs</a>
                      </li>
                      <li class="has-mega gc_main_navigation">
                        <a @if($current=="heavy" ) class="gc_main_navigation active_class" @else class="gc_main_navigation" @endif href="/weapons/heavy">Heavys</a>
                      </li>
                      <li class="has-mega gc_main_navigation">
                        <a @if($current=="rifles" ) class="gc_main_navigation active_class" @else class="gc_main_navigation" @endif href="/weapons/rifles">Rifles</a>
                      </li>
                  </ul>
              </div>
              
          </div>
      </div>
  </div>

    

    @yield('content')

  <script src="{{ secure_asset('js/jquery.js') }}"></script>
  <script src="{{ secure_asset('js/jquery-ui.js') }}"></script>
  @yield("scripts")


</body>
</html>

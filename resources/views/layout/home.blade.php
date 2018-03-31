<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestión Articulos</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/grid.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/camera.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl-carousel.css')}}">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('jjs/jquery-migrate-1.2.1.js')}}"></script> 
        
    </head> 
    <body>
    <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Gestion</a></h1>
            <p class="brand_slogan">Articulos</p>

                          
            <div align="right">            
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>                    
                           

          <div><a href="callto:#" class=""></a>
          </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                 <li><a href="Registroelementos">Categorias</a>
                  <ul>
                    <!--<li><a href="Registroelementos">Registrar Categorias</a></li>-->
                     <ul>
                          </ul></a></li>
                         </ul>
                </li>
                <li><a href="{!! url("/gestion_articulos") !!}">Articulos</a>
                	<ul>
                    <!--<li><a href="{!! url("/registroelementos") !!}">Registrar Categorias</a></li>-->
                     </ul>
                  <ul>
                  </ul>
                
              </ul>
            </nav>
          </div>
        </div>
        @if(Session::has('flash_message'))
<article class="alert alert-success">
{{ Session::get('flash_message') }}
</article>
@endif
      </header>
      
    	@yield('content')  
        <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>4578 Manizales,Caldas,Colombia<br/> </address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">3004567333</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">3004567333</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">Business Company © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=418&type=1" target="_blank">Business Templates at TemplateMonster.com</a>
            </div>
          </div>
        </section>
      </footer> }
      <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>

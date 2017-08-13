<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Ok" />
    <link rel="manifest" href="{{ asset('landio/img/favicon/manifest.json') }}">
    <link rel="shortcut icon" href="{{ asset('landio/img/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="{{ asset('landio/img/favicon/mstile-144x144.png') }}">
    <meta name="msapplication-config" content="{{ asset('landio/img/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="{{ asset('landio/css/landio.css') }}">
    <link rel="stylesheet" href="{{ asset('landio/css/style.css') }}">

    <meta property="og:url" content="{{ config('app.name') }}">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image:type" content="image/png">

     <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body>

    <!-- Navigation
    ================================================== -->
    <nav class="navbar        
        <?php
        echo (Request::segment(1) == '') ? 'navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top' : 'bg-white menu-new' ; 
        ?>"
        style="
        <?php
        echo (Request::segment(1) == '') ? '' : 'background: #fafafb;box-shadow: 0 1px 0 rgba(12,13,14,0.15)'; 
        ?>">
      <div class="container">
        <a class="navbar-brand" href="{{ URL::to('') }}">
          <span class="icon-logo"></span>
          <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right"> 
            <li class="nav-item nav-item-toggable {{{ (Request::is('/') ? 'active' : '') }}}">
              <a class="nav-link" href="{{ URL::to('') }}">Beranda</a> 
            </li>
            <li class="nav-item nav-item-toggable {{{ (Request::is('belanja') ? 'active' : '') }}}">
              <a class="nav-link" href="{{ URL::to('belanja') }}">Belanja</a> 
            </li>
            <li class="nav-item nav-item-toggable {{{ (Request::is('kategori') ? 'active' : '') }}}">
              <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
            </li>
            <li class="nav-item nav-item-toggable {{{ (Request::is('tentang-kami') ? 'active' : '') }}}">
              <a class="nav-link" href="{{ URL::to('tentang-kami') }}">Apa itu {{ config('app.name') }} ? </a>
            </li> 
            <li class="nav-item nav-item-toggable hidden-md-up">
                {!! Form::open(['url' => route('search'), 'method' => 'GET', 'class' => 'navbar-form']) !!}
                    {!! Form::text('q', null, ['class'=>'form-control navbar-search-input', 'placeholder'=>'Cari produk ...']) !!}
                {!! Form::close() !!}
            </li>
            <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                {!! Form::open(['url' => route('search'), 'method' => 'GET', 'class' => 'navbar-form']) !!}
                    {!! Form::text('q', null, ['class'=>'form-control navbar-search-input', 'placeholder'=>'Cari produk ...']) !!}
                {!! Form::close() !!}
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('images/user.png') }}" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                @if (Auth::guest())  
                @else
                  <div class="media">
                    <div class="media-left">
                      <img src="{{ asset('images/user.png') }}" height="60" width="60" alt="Avatar" class="img-circle">
                    </div>
                    <div class="media-body media-middle">
                      <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                      <h6>{{ Auth::user()->email }}</h6>
                    </div>
                  </div>
                @endif
                @if (Auth::guest()) 
                    <a href="{{ URL::to('login') }}" class="dropdown-item text-uppercase">Masuk</a>
                    <a href="{{ URL::to('register') }}" class="dropdown-item text-uppercase">Daftar</a> 
                @else
                
                <a href="{{ URL::to('home') }}" class="dropdown-item text-uppercase text-muted">Home</a>
                <a href="{{ URL::to('logout') }}" class="dropdown-item text-uppercase text-muted"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log out</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
               {{--  <a href="{{ URL::to('profile/edit') }}" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a> --}}
                @endif
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          @if (Auth::guest())  
          @else
          <div class="media m-t-1">
            <div class="media-left">
              <img src="{{ asset('landio/img/face5.jpg') }}" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">{{ Auth::user()->name }}</h5>
              <h6>{{ Auth::user()->email }}</h6>
            </div>
          </div>
          @endif
          @if (Auth::guest()) 
                <a href="{{ URL::to('login') }}" class="dropdown-item text-uppercase">Masuk</a>
                <a href="{{ URL::to('register') }}" class="dropdown-item text-uppercase">Daftar</a> 
            @else
            
            <a href="{{ URL::to('logout') }}" class="dropdown-item text-uppercase text-muted"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Log out</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
           {{--  <a href="{{ URL::to('profile/edit') }}" class="btn-circle has-gradient pull-xs-right">
              <span class="sr-only">Edit</span>
              <span class="icon-edit"></span>
            </a> --}}
            @endif
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- Footer
    ================================================== -->
    
    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                By {{ config('app.name') }} <br>
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">  
              <li class="nav-item {{{ (Request::is('belanja') ? 'active' : '') }}}"><a class="nav-link" href="{{ URL::to('belanja') }}">Belanja</a></li>
              <li class="nav-item {{{ (Request::is('kategori') ? 'active' : '') }}}"><a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a></li> 
              <li class="nav-item {{{ (Request::is('tentang-kami') ? 'active' : '') }}}"><a class="nav-link" href="{{ URL::to('tentang-kami') }}">Apa itu {{ config('app.name') }} ?</a></li> 
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('landio/js/landio.min.js') }}"></script>
    <script src="{{ asset('js/jquery.jscroll.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.lazyload.js') }}"></script> 

    <script type="text/javascript">
        $('ul.pagination').hide();
          $(function() {
              $('.infinite-scroll').jscroll({
                  autoTrigger: true,
                  loadingHtml: '<img class="center-block" src="{{ asset('img/loading.gif') }}" alt="Loading..." />',
                  padding: 1,
                  nextSelector: '.pagination li.active + li a',
                  contentSelector: 'div.infinite-scroll',
                  callback: function() {
                      $('ul.pagination').remove();
                  }
              });
        });
 
        $("img.lazy").lazyload();

        $(function(){
          $(window).scroll(function(){
            $("img.lazy").lazyload();
          });
        });
    </script>


    @yield('scripts')
  </body>
</html>
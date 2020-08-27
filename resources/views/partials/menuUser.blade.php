<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="mailto:marsadtanger@gmail.com" target="_blank" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">marsadtanger@gmail.com</span></a>
        <span class="mx-md-2 d-inline-block"></span>
        <a href="tel:(+212) 05 39 94 37 87" target="_blank" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">(+212) 05 39 94 37 87</span></a>


        <div class="float-right">

        <a href="https://www.facebook.com/MarsadTanger/" target="_blank" class="text-white"><span class="mr-2 text-white icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
        <span class="mx-md-2 d-inline-block"></span>
        <a href="https://www.instagram.com/marsadtanger/" target="_blank" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>

        </div>

      </div>

    </div>

  </div>
</div>
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="container">
    <div class="row align-items-center position-relative">

        <div class="site-logo">
          <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img width="170px" height="70px"  src="{{ asset('images/AlloEcoVert.png') }}" alt="Brand"></span></a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
            @guest
                <li><a href="{{ route('login') }}" class="nav-link">S'identifier</a></li>
                @if (Route::has('register'))
                  <li><a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
                @endif
            @else
            <li><a href="{{ url('reclamations') }}" class="nav-link">Mes réclamations</a></li>
            <li class="has-children">
              <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
              <ul class="dropdown arrow-top">
                <li><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </ul>
            </li>
            @endguest
          </ul>
          </nav>

        </div>

      <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>
  </div>

</header>


<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="container">
    <div class="row align-items-center position-relative">

        <div class="site-logo">
          <a href="{{ url('admin') }}" class="text-black"><span class="text-primary">AlloEco</a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
            @guest
                <li><a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                  <li><a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a></li>
                @endif
            @else
            <li><a href="{{ url('admin') }}" class="nav-link">Mes reclamatons</a></li>
            <li><a href="{{ url('admin/statistics') }}" class="nav-link">Statistics</a></li>
            <li class="has-children">
              <a href="#" class="nav-link">{{ Auth::user()->username }}</a>
              <ul class="dropdown arrow-top">
                <li><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
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

<!doctype html>
<html lang="fr">
  <head>
    <title>AlloEco</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


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
                <li><a href="{{url('/')}}#services-section" class="nav-link">Domaine d'action</a></li>


                <li class="has-children">
                  <a href="{{url('/')}}#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="{{url('/')}}#team-section" class="nav-link">OPEMH</a></li>
                    <li><a href="{{url('/')}}#faq-section" class="nav-link">Objectifs</a></li>
                  </ul>
                </li>

                <li><a href="{{url('/')}}#press-section" class="nav-link">Communiqués</a></li>

                <li><a href="{{url('/')}}#testimonials-section" class="nav-link">Avis</a></li>
                <li><a href="{{url('/')}}#blog-section" class="nav-link">Activités</a></li>
                <li><a href="{{url('/')}}#contact-section" class="nav-link">Contact</a></li>

                @guest
                  <li class="has-children">
                    <a href="#" class="nav-link">Centre d'écoute</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ route('login') }}" class="nav-link">S'identifier</a></li>
                      @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
                      @endif
                    </ul>
                  </li>
                @else
                  <li class="has-children">
                    <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ url('reclamations') }}" class="nav-link">Mes réclamations</a></li>
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

    <div class="site-section-cover overlay inner-page bg-light" style="background-image: url({{ asset('files/'.$communique->file) }})" data-aos="fade">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <span class="d-block mb-3 text-white"  data-aos="fade-up">{{ $communique->created_at }} <span class="mx-2 text-primary">&bullet;</span>OPEMH</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{ $communique->titre }}</h1>
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>


    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto blog-content">
            {!! $communique->body !!}
          </div>

        </div>
      </div>
    </section>

    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1">
              <h2>Plus de Communiqués</h2>
            </div>
          </div>
          <div class="col-lg-8">
            <ul class="list-unstyled">
              @foreach($communiques as $comm)
              <li class="mb-4">
                <h2 class="h4"><form class="" action="{{ url('communique/'.$comm->id) }}" method="post">
                  <a href="{{ url('communique/'.$comm->id) }}" class="h2" >{{ $comm->titre }}</a>
                </form></h2>
                <p>{{ substr(strip_tags($comm->body),0,250) }} {{ strlen(strip_tags($comm->body)) > 250 ? '...' : "" }}</p>
                <small class="d-block text-secondary">{{ $comm->created_at }}</small>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4 text-black">AlloEco</h2>
                <p>L'OPEMH cherche, à travers le projet AlloEco, à participer à la dynamique de lutte contre la dégradation de l'environnement par l'orientation et la sensibilisation.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4 text-black">Liens</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ url('/') }}" class="text-white">Acceuil</a></li>
                  <li><a href="{{ url('/') }}#services-section" class="text-white">Domaines d'actions</a></li>
                  <li><a href="{{ url('/') }}#press-section" class="text-white">Communiqués</a></li>
                  <li><a href="{{ url('/') }}#testimonials-section" class="text-white">Avis</a></li>
                  <li><a href="{{ url('/') }}#blog-section" class="text-white">Activités</a></li>
                  <li><a href="{{ url('/') }}#contact-section" class="text-white">Contact</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="mb-5">
              <h2 class="footer-heading mb-4 text-black">Infos</h2>
              <ul class="list-unstyled">
                  <li><span class="icon icon-map-marker text-white"></span><span class="text-white"> N° 8, Résidence Zilile 1er étage Appt 16, AV Youssef Ibn Tachefine Tanger</span></li>
                  <li><span class="icon icon-phone text-white"></span><span class="text-white"> Tél/Fax : (+212) 05 39 94 37 87</span></li>
                  <li><span class="icon icon-envelope text-white"></span><span class="text-white"> marsadtanger@gmail.com</span></li>
                </ul>

              </div>


              <h2 class="footer-heading mb-4 text-black">Contactez-nous</h2>
                <a href="https://www.facebook.com/MarsadTanger/" target="_blank" class="smoothscroll pl-0 pr-3 text-white"><span class="icon-facebook"></span></a>
                <a href="tel:(+212) 05 39 94 37 87" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-phone2"></span></a>
                <a href="mailto:marsadtanger@gmail.com" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-envelope"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright text-black"><small>
            Copyright &copy; Marsad Tanger | Design by MedNour Consulting.
            </small></p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>

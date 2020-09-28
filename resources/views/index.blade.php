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
              <nav class="site-navigation text-right position-relative ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none pl-0 d-lg-block">
                <li><a href="#services-section" class="nav-link">Domaine d'actions</a></li>


                <li class="has-children">
                  <a href="#about-section" class="nav-link">À propos</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#team-section" class="nav-link">OPEMH</a></li>
                    <li><a href="#objectif-section" class="nav-link">Objectifs</a></li>
                  </ul>
                </li>

                <li><a href="#press-section" class="nav-link">Communiqués</a></li>

                <li><a href="#testimonials-section" class="nav-link">Avis</a></li>
                <li><a href="#blog-section" class="nav-link">Activités</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>

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

    @if(session()->has("success"))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="owl-carousel slide-one-item">


      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/t14.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">L'ESPOIR</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Pour la protéction de l'environnement et des monuments historiques</p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/t3.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">L'ESPOIR</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Pour la protéction de l'environnement et des monuments historiques</p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/img3.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">L'ESPOIR</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Pour la protéction de l'environnement et des monuments historiques</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="site-section">
      <div class="text-center mb-5">
        <div class="block-heading-1">
          <h2>Domaine d'actions</h2>
        </div>
      </div>
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422" style="background-image: url('images/t7.jpg');" data-aos="fade-right" data-aos-delay="">
            </div>

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">Monuments historiques</h2>
              <p>L’Observatoire intervient auprès des responsables pour les inviter à réhabiliter, classer ou enregistrer les sites ou monuments en tant que patrimoine national et aussi patrimoine humain de l’UNESCO.
De plus, des efforts sont déployés par la société civile, y compris l’OPEMH afin de conserver le patrimoine culturel de Tanger et le rendre un outil de promotion de la ville et de son développement économique et Touristique, à travers :</p>


              <ul class="ul-check primary list-unstyled mt-5">
                <li>le diagnostic de l’état des lieux des sites et des monuments historiques,</li>
                <li>l’élaboration de rapports,</li>
                <li>la mise à jour des informations et données documentaires,</li>
                <li>ainsi que l’inventaire des différents sites et monuments selon un séquençage chronologique.</li>
              </ul>

            </div>

          </div>
        </div>
      </div>


      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/t1.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>



            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">Environnement</h2>
              <p>Dans le cadre de  la dynamique de développement accélérée et multidimensionnelle que connait la ville de Tanger, l'Observatoire, œuvrant pour la protection de l’environnement et des monuments historiques de Tanger, se trouve concerné de poursuivre ce processus et son influence sur l’environnement et les monuments.
En effet, l’Observatoire accompagne cette dynamique structurante, en tant que force de proposition, à travers le suivi, l’analyse et l’évaluation, en fixant l’objectif de persuader les décideurs locaux de l’importance de protéger l’environnement et l’espace et d’assurer un développement durable.</p>

              <p>L’Observatoire vise à :</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>contribuer à concrétiser aux objectifs de développement durable au niveau régional,</li>
                <li>renforcer les capacités de la société civile dans le domaine du plaidoyer environnemental, pour contribuer à améliorer les conditions de vie des citoyens.</li>
              </ul>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-success" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://www.youtube.com/watch?time_continue=3&v=gxSeaDU4zcA&feature=emb_logo" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img  src="images/img3.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                  <span class="number"><span data-number="35">0</span>+</span>
                  <span class="caption">Ha de forêts brûlées</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                  <span class="number"><span data-number="339">0</span>+</span>
                  <span class="caption">Ha d'espaces verts à Tanger</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                  <span class="number"><span data-number="145">0</span>+</span>
                  <span class="caption">Millions m3 des réserves en eau dans les barrages</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="67">0</span>+</span>
                  <span class="caption">Millions de m3 d'eau</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>OPEMH</h2>
              <p>le bureau administartif</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p3.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Allal Kandoussi</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Vice-président</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/allal.kandoussi" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/allalkandoussi/" target="_blank" class="btn text-white btn-success"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com/in/allal-kandoussi-119a09a2/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">AbdelAziz Janati</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Président de l'Observatoire</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/aziz.janati" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/azizjanati" target="_blank" class="btn text-white btn-success"><span class="icon-twitter"></span></a>
                <a href="https://www.linkedin.com/in/abdelaziz-janati-0b53a386/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p8.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Said Chakri</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Vice-président</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/said.chakri.9" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/SaidCHAKRI2" target="_blank" class="btn text-white btn-success"><span class="icon-twitter"></span></a>
                <a href="https://www.linkedin.com/in/said-chakri-35286b41/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Mohammed Oulhaj</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Trésorier</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/moulhaj" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/moulhaj" target="_blank" class="btn text-white btn-success"><span class="icon-twitter"></span></a>
                <a href="https://www.linkedin.com/in/mohammed-oulhaj-37281a5/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p4.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Abdelmajid Debboun</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Secrétaire général</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/sami.boulhaiche" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/abdeldebboun/" target="_blank" class="btn text-white btn-success"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com/in/debboun-abdelmajid-70292772/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/p6.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ikram El Maghnougi</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Conseiller</span>
              <div class="block-social-1">
                <a href="https://www.facebook.com/ikram.elmaghnougi" target="_blank" class="btn text-white btn-success"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/ikram.elmaghnougi/" target="_blank" class="btn text-white btn-success"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com/in/ikram-el-maghnougi-b2519b99/" target="_blank" class="btn text-white btn-success"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="site-section bg-light" id="objectif-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Nos Objectifs stratégiques</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Déclinaisons des Objectifs du Développement Durable ODD au niveau Régional</h3>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Classement de la ville de Tanger et de ses monuments</h3>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Renforcer les capacités des associations et accompagner leur développement dans le domaine environnemental et des monuments historiques</h3>
            </div>

          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">L'observatoire est un espace de rayonnement et de renforcement de la culture environnementale et la maîtrise de ses enjeux sur le plan régional</h3>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Développement de l'organisation institutionnelle de l'Observatoire</h3>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Définir et les qualifier pour être un affluent principal des affluents du développement local</h3>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Communiqués</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              @foreach($communiques as $communique)
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <span class="d-block text-muted mb-3">{{ $communique->created_at }}</span>
                <form class="" action="{{ url('communique/'.$communique->id) }}" method="post">
                  <h2 class="h4"><a href="{{ url('/communique/'.$communique->id) }}" class="text-black">{{ $communique->titre }}</a></h2>
                </form>
                <p>{{ substr(strip_tags($communique->body),0,250) }} {{ strlen(strip_tags($communique->body)) > 250 ? '...' : "" }}</p>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">

        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Avis</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="{{ asset('images/user.png') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Didier Garci</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Est-il en ce monde une beauté plus idéale que cette immensité de sable qui défie la fatuité de l'homme et qui incline à la quête spirituelle.&rdquo;</p>
              </blockquote>


            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="{{ asset('images/user.png') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Pierre Loti</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Vraiment Tanger nous paraît le comble de la civilisation, du raffinement moderne.&rdquo;</p>
              </blockquote>


            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="{{ asset('images/user.png') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Muriel barbery</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Tanger nous happait vigoureusement à la première minute.&rdquo;</p>
              </blockquote>


            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="{{ asset('images/user.png') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Eugène Delacroix</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Je suis en ce moment comme un homme qui rêve et qui voit des choses qu'il craint de voir lui échapper. Rome n'est plus dans Rome.&rdquo;</p>
              </blockquote>


            </div>
          </div>
          @foreach($avis as $avi)
          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="{{ asset('images/user.png') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">{{ $avi->user['name'] }}</h3>

              <blockquote class="mb-4">
                <p>&ldquo; {{ $avi->presentation }} &rdquo;</p>
              </blockquote>


            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <span>Dernier Activités</span>
              <h2>Nos Activités</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($activites as $activite)
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div>

                  <img width="500px" height="300px" src="{{ asset('files/'.$activite->file) }}" alt="Image">
              
              </a>
              <h3><form class="" action="{{ url('activite/'.$activite->id) }}" method="post">
                <a href="{{ url('activite/'.$activite->id) }}" class="h3">{{ $activite->titre }}</a>
              </form></h3>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">{{ $activite->created_at }}</span> - <a href="#testimonials-section" class="by">OPEMH</a></p>
              <p>{{ substr(strip_tags($activite->body),0,250) }}{{ strlen(strip_tags($activite->body)) > 250 ? '...' : "" }}</p>
              <p>
                <form class="" action="{{ url('activite/'.$activite->id) }}" method="post">
                  <a href="{{ url('activite/'.$activite->id) }}" class="h5" > >> </a>
                </form>
              </p>
            </div>
          </div>
          @endforeach
          <!--
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="images/c1.jpg" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Pour une nouvelle approche de la gestion des exploits historiques</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">19 Jan 2019</span> - <a href="single.html" class="by">OPEMH</a></p>
              <p>L'Observatoire pour la protection de l'environnement et des antiquités historiques de Tanger et la Fondation Maison de la presse ont organisé le samedi 27 juin 2020 à huit heures du soir une réunion sous le titre: "Pour une nouvelle approche de la gestion des monuments historiques et le renforcement de leur rôle culturel et de développement".</p>
              <p><a href="single.html">Lire la suite</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="images/c1.jpg" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Le lancement du projet «Allo Eco»</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">19 déc 2019</span> - <a href="single.html" class="by">OPEMH</a></p>
              <p>L'observatoire a lancé son nouveau projet, Allo Eco, à travers un atelier auquel ont participé des représentants de la société civile locale, des acteurs concernés par l'environnement et des représentants des médias locaux.</p>
              <p><a href="single.html">Lire la suite</a></p>
            </div>
          </div>
        -->

        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Disponible 24h/24h</span>
              <h2>Contactez Nous</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <form action="{{ url('/') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" name="nom" class="form-control" placeholder="Nom">
                  @if($errors->get('nom'))
                    @foreach($errors->get('nom') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                  @endif
                </div>
                <div class="col-md-6">
                  <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                  @if($errors->get('prenom'))
                    @foreach($errors->get('prenom') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  @if($errors->get('email'))
                    @foreach($errors->get('email') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" class="form-control" placeholder="Votre message." cols="30" rows="10"></textarea>
                  @if($errors->get('message'))
                    @foreach($errors->get('message') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                  @endif
                </div>
              </div>
              <div class="form-group row text-center">
                <div class="col-md-3 text-center">
                  <input type="submit" class="btn btn-block btn-success text-white py-3 px-5" value="Envoyez">
                </div>
              </div>
            </form>
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
                  <li><a href="#services-section" class="text-white">Domaines d'actions</a></li>
                  <li><a href="#press-section" class="text-white">Communiqués</a></li>
                  <li><a href="#testimonials-section" class="text-white">Avis</a></li>
                  <li><a href="#blog-section" class="text-white">Activités</a></li>
                  <li><a href="#contact-section" class="text-white">Contact</a></li>
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

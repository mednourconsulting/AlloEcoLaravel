<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">AlloEco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">OPEMH</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Activités</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Réclamez-vous <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
              <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
          </div>
      </li>
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  -->
  </div>
</nav>

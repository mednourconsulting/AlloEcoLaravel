<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('admin') }}">
            <span>
              <img width="170px" height="70px" src="{{ asset('images/AlloEcoVert.png') }}" alt="homepage" class="dark-logo" />
            </span>
          </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/user.png') }}" alt="user" class="" /> <span class="hidden-md-down">{{ Auth::user()->username }} &nbsp;</span> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ url('admin') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Acceuil</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/admin/utilisateurs') }}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Utilisateurs</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/admin/reclamations') }}" aria-expanded="false"><i class="fa fa fa-address-card"></i><span class="hide-menu">Réclamations</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/admin/communiques') }}" aria-expanded="false"><i class="fa fa-calendar-o"></i><span class="hide-menu">Communiqués</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/admin/activites') }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Activités</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/admin/messages') }}" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Messages</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

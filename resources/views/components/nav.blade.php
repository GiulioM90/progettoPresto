<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-3 fixed-top navbar-presto navbar-dark"

>
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          > <i class="bi bi-list"></i>
        </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0 navbar-logo" href="{{route('welcome')}}">
          <img
            src="../../../img/logo-presto.png"
            height="75"
            alt="Devosauri Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->

            <div class="d-flex align-items-center navbar-presto">
              <a class="nav-link main-text-color fs-5 fw-3" href="{{route('welcome')}}">
                {{__('ui.home')}}
              </a>
              <a class="nav-link main-text-color fs-5 fw-3" href="{{route('index')}}">{{__('ui.annunci')}}</a>
              
              <x-flag/>
              
            </div>



        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Avatar -->
        @guest

        <a class="nav-link main-text-color fs-5 fw-5" href="{{route('login')}}">{{__('ui.login')}}</a>

        <a class="nav-link main-text-color fs-5 fw-5" href="{{route('register')}}">{{__('ui.register')}}</a>


        @else

        
        <a class="nav-link main-text-color fs-5 fw-5 classe1" href="{{route('create')}}">{{__('ui.inserisciAnnuncio')}}</a>


        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow nav-link main-text-color fs-5 fw-4"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
          {{Auth::user()->name}}
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
              class="rounded-circle mx-3"
              height="50"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            
            @if(Auth::user()->is_revisor)
            <li>
              <a class="dropdown-item" href="{{route('revisorIndex')}}">{{__('ui.paginaRevisore')}}
                <span class="badge badge-pill badge-warning">{{$counter}}</span>
              </a>
            </li>
            @else 
            <li>
              <a class="dropdown-item" href="{{route('revisorForm')}}">{{__('ui.diventaRevisore')}}</a>
            </li>
            @endif
            <li>
            <a class="dropdown-item classe2" href="{{route('create')}}">{{__('ui.inserisciAnnuncio')}}</a>
            </li>
            <li>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="">
                @csrf
                <a class="nav-link text-dark" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('ui.logout')}}</a>
              </form>
            </li>
          </ul>
        </div>
      </div>
      @endguest
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
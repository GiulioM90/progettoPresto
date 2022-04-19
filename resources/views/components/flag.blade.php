

<div class="dropdown">
    <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow nav-link main-text-color fs-5 fw-4"
                href="#"
                id="navbarDropdownMenuAvatar"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >  {{__('ui.lingue')}} 
    </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar" >
            <form action="{{route('locale','it')}}" method="post">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="nav-link dropdown-item" style="background-color:transparent; border:none" href="">
                        <span class="flag-icon flag-icon-it" ></span> 
                        Italiano
                    </button>
                </li>
            </form>
            <form action="{{route('locale','en')}}" method="post">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="nav-link dropdown-item" style="background-color:transparent; border:none" href="">
                        <span class="flag-icon flag-icon-gb" ></span> 
                        English
                    </button>
                </li>
            </form>
            <form action="{{route('locale','sa')}}" method="post">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="nav-link dropdown-item" style="background-color:transparent; border:none" href="">
                        <span class="flag-icon flag-icon-sa" ></span> 
                        عربي                    
                    </button>
                </li>
            </form>
          </ul>
        </div>
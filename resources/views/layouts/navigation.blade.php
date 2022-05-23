<nav x-data="{ open: false }">
    <div class="contNavbar">
        <div class="pos-f-t navbarPaciente">
            <div id="nav1">
                <div class="dropdown">
                    <i class="fa-solid fa-bars fa-2x boton-nav " id="username dropdownMenu2" href="#"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu menuoption" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item menuoption" type="button">Ver Perfíl</button>
                        <button class="dropdown-item menuoption" type="button">Saber más</button>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item menuoption" href="/logout"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ ('Cerrar Sesión') }}
                            </a>
                        </form>
                    </div>
                </div>
                <a href="">
                    <h6>Diagnósticos</h6>
                </a>
    
            </div>
            <a href="{{ route('dashboard') }}"><img src="{{url('/images/uaslp-vector-logo.png')}}" style="height:50px;" alt="Image"/></a>
            
        </div>
        <div class="lineaNav"></div>
    </div>
    


            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
</nav>

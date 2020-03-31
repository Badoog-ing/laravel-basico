<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav">
                <li class="nav-item {{ setActive('home') }} ">
                    <a class="nav-link" href= {{ route('home' )}} >Home</a>
                </li>
                <li class="nav-item {{ setActive('about') }} ">
                    <a class="nav-link" href= {{ route('about' )}} >Quienes somos</a>
                </li>
                <li class="nav-item {{ setActive('projects.*') }} ">
                    <a class="nav-link" href= {{ route('projects.index' )}} >Portafolio</a>
                </li>
                <li class="nav-item {{ setActive('contact') }} ">
                    <a class="nav-link" href= {{ route('contact' )}} >Contacto</a>
                </li>
                @guest
                	<li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                	@else
                		<li class="nav-item">
                            <a class="nav-link" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
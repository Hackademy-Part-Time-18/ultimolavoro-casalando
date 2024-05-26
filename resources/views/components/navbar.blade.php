
    <div class="col-4 d-flex justify-content-end align-items-center">

        <a class=" mx-2" href="{{('/')}}">Home</a>
        <a class=" mx-2" href="{{('contattaci')}}">Contatti</a>

@guest
        <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('register') }}">Registrati</a>
        <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('login') }}">Entra</a>
@endguest
@auth
        <a href="{{ route('home') }}"">Benvenuto</a>
        <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item btn btn-sm btn-outline-secondary mx-2">
                    Esci
                </button>
            </form>
        @endauth
    </div>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="btn btn-outline-primary" href="{{ route('all-teams')}}"><h3>Nba</h3></a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <a class="btn btn-outline-primary" href="{{ route('login')}}">Login</a>

      @if(auth()->check())
        <a class="btn btn-outline-primary" href="{{ route('logout')}}">Logout</a>
            @else
        <a class="btn btn-outline-primary" href="{{ route('show-register') }}">Sign up</a>
          @endif
</nav>

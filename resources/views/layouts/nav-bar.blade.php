<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <p class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nba</p>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

      @if(auth()->check())
        <a class="btn btn-outline-primary" href="{{ route('logout')}}">Logout</a>
            @else
        <a class="btn btn-outline-primary" href="{{ route('show-register') }}">Sign up</a>
          @endif
</nav>
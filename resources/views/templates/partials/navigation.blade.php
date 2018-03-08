<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">Chatty</a>

  <div class="collapse navbar-collapse">
    @if (Auth::check())
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Friends</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0" action="{{ route('search.results') }}">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Find people" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    @endif

    <ul class="navbar-nav mr-auto">
      @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile.edit') }}">Update profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.signout') }}">Sign out</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.signup') }}">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.signin') }}">Sign in</a>
        </li>
      @endif
    </ul>
  </div>
</nav>

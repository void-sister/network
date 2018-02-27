<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Chatty</a>

  <div class="collapse navbar-collapse">
    <!-- @if (Auth::check()) -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Friends</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Find people" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <!-- @endif -->

    <ul class="navbar-nav mr-auto">
      <!-- @if (Auth::check()) -->
        <li class="nav-item">
          <a class="nav-link" href="#">Dayle<!-- {{ Auth::user()->getNameOrUsername() }} --></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Update profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      <!-- @else -->
        <li class="nav-item">
          <a class="nav-link" href="#">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sign in</a>
        </li>
      <!-- @endif -->
    </ul>
  </div>
</nav>

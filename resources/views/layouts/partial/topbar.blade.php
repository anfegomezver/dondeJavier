<nav 
class="navbar navbar-expand navbar-white navbar-light {{ Request::is('dashboard') ? 'main-header' : '' }}">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        @if (Auth::check())
          {{ Auth::user()->name }}
        @else
          
        @endif

      </a>
    </li>

    <li class="nav-item">
      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class='fas fa-sign-out-alt'></i>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
</nav>

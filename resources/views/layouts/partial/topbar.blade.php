<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light bg-dark {{ Request::is('dashboard') ? 'main-header' : '' }}" 
  style="box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-bottom: 1px solid rgba(0,0,0,0.05); position: relative; z-index: 100;">
  
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button" 
        style="color: #222529; transition: all 0.3s ease;">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    
    <!-- Título de la página actual -->
    <li class="nav-item d-none d-sm-inline-block">
      <span class="nav-link font-weight-bold" style="color: #DC3545;">
        @yield('title', 'Dashboard')
      </span>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre 
        style="color: #ffffff; transition: all 0.3s ease;">
        @if (Auth::check())
          <span style="margin-right: 5px;">{{ Auth::user()->name }}</span>
          <i class="fas fa-user-circle" style="color: #DC3545;"></i>
        @else
          <i class="fas fa-user-circle" style="color: #DC3545;"></i>
        @endif
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
        style="color: #DC3545; transition: all 0.3s ease;">
        <i class="fas fa-sign-out-alt"></i>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
</nav>

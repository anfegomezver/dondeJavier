<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: linear-gradient(135deg, #FFDD33, #FFA94D); overflow: hidden; border-right: 1px solid rgba(0,0,0,0.1);">
  <!-- Brand Logo - Solo el logo en fondo negro -->
  <div style="position: relative; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <img src="{{ asset('logo.png') }}" alt="logo" class="p-2" style="width: 100%; height: auto; display: block; margin: 0 auto; transition: transform 0.3s ease;">
    
    <!-- Overlay con efecto de brillo sutil -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(255,255,255,0) 30%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 70%); pointer-events: none;"></div>
  </div>

  <!-- Línea decorativa con degradado -->
  <div style="height: 3px; background: linear-gradient(to right, transparent, #DC3545, transparent); margin: 0 auto;"></div>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-3">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar..." aria-label="Search" style="background-color: white; color: #333; border: 1px solid rgba(0,0,0,0.1); border-radius: 4px 0 0 4px; box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);">
        <div class="input-group-append">
          <button class="btn btn-sidebar" style="background-color: #DC3545; color: white; border-radius: 0 4px 4px 0; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link" style="color: #222529; transition: all 0.3s ease; border-radius: 6px; margin-bottom: 3px;">
            <i class="nav-icon fas fa-th" style="color: #222529;"></i>
            <p>
              Widgets
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="color: #222529; transition: all 0.3s ease; border-radius: 6px; margin-bottom: 3px;">
            <i class="nav-icon fas fa-copy" style="color: #222529;"></i>
            <p>
              Layout Options
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="background-color: rgba(255,255,255,0.3); border-radius: 6px; padding: 5px 0; margin-left: 5px; border-left: 2px solid rgba(220,53,69,0.3);">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Top Navigation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Top Navigation + Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/boxed.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Boxed</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-sidebar.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Fixed Sidebar <small>+ Custom Area</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-topnav.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Fixed Navbar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-footer.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Fixed Footer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/collapsed-sidebar.html" class="nav-link" style="color: #DC3545; transition: all 0.3s ease; border-radius: 4px; padding: 8px 12px; margin: 2px 0;">
                <i class="far fa-circle nav-icon" style="color: #DC3545;"></i>
                <p>Collapsed Sidebar</p>
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<style>
/* Efecto hover para los enlaces del menú */
.nav-link:hover {
  background-color: rgba(255,255,255,0.2) !important;
  transform: translateX(3px);
}

/* Efecto hover para el logo */
aside:hover img {
  transform: scale(1.02);
}
</style>
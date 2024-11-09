<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="admin/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Blog</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      @if (Auth::user()->user_type == "admin")
      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Users</span>
        </a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Posts</span>
        </a>
      </li>      

      <li class="nav-item">
        <a class="nav-link " href="{{ route('/logout') }}">
          <i class="bi bi-grid"></i>
          <span>Logout</span>
        </a>
      </li>      
    </ul>
  </aside>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('user.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu Pengguna
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true" aria-controls="collapseProfile">
        <i class="fas fa-fw fa-user"></i>
        <span>Akaun Profile</span>
      </a>
      <div id="collapseProfile" class="collapse" aria-labelledby="headingProfile" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tindakan:</h6>
          <a class="collapse-item" href="{{ route('user.profile.edit') }}">Kemaskini</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Kursus Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKursus" aria-expanded="true" aria-controls="collapseKursus">
        <i class="fas fa-fw fa-folder-open"></i>
        <span>Kursus</span>
      </a>
      <div id="collapseKursus" class="collapse" aria-labelledby="headingKursus" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tindakan:</h6>
          <a class="collapse-item" href="{{ route('user.kursus.index') }}">Senarai Kursus</a>
          <a class="collapse-item" href="{{ route('user.kursus.create') }}">Daftar Kursus</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu Pengurusan
    </div>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
        <i class="fas fa-users"></i>
        <span>Pengguna</span>
      </a>
      <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tindakan:</h6>
          <a class="collapse-item" href="{{ route('users.index') }}">Senarai Pengguna</a>
          <a class="collapse-item" href="{{ route('users.create') }}">Daftar Pengguna</a>
        </div>
      </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
      Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Log Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>

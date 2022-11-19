  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <h3><span class="fas fa-shield-virus"></span> Vaccin.<span>id</span></h3><h6>Sehat Untuk Indonesia</h6>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex font-weight-bold">
      <div class="info">
        <a href="#" class="d-block"> Sistem Informasi <br> Pendaftaran Vaksinasi</a>
      </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

        <li class="nav-heading text-white my-2">DATA USER</li>
          <li class="nav-item">
            <a href="{{ url('/user') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Pengajuan
              </p>
            </a>
          </li>

        <li class="nav-heading text-white my-2">DATA ADMIN</li>
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Pengecekan
              </p>
            </a>
          </li>

        <li class="nav-heading text-white my-2">REPORT</li>
        <li class="nav-item">
            <a href="{{ url('/pengumuman') }}" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                 Pengumuman
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.Main Sidebar Container -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
          aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Master Data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.users.index') }}">Data User</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Data Produk</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.index') }}">Data Kategori</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Data Pesanan</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Pengaturan Website</span>
        </a>
      </li>
    </ul>
</nav>

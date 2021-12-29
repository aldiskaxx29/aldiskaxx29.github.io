<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"><img src="../img/alse.jpg" alt="" width="50px"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html"><img src="../img/alse.jpg" alt="" width="40px"></a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li @if (Request::segment(1) == 'dashboard-admin')class="active"@endif><a class="nav-link" href="{{ url('dashboard-admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Pages</li>
        <li @if (Request::segment(1) == 'users')class="active"@endif><a class="nav-link" href="{{ url('/users') }}"><i class="fas fa-users"></i> <span>User</span></a></li>
        <li @if (Request::segment(1) == 'data_pesan')class="active"@endif><a class="nav-link" href="{{ url('/data_pesan') }}"><i class="fas fa-shopping-basket"></i> <span>Data Pesan</span></a></li>
        <li @if (Request::segment(1) == 'data_project')class="active"@endif><a class="nav-link" href="{{ url('/data_project') }}"><i class="fas fa-store"></i> <span>Data Project</span></a></li>
        <li @if (Request::segment(1) == 'data_kategori')class="active"@endif><a class="nav-link" href="{{ url('/data_kategori') }}"><i class="fas fa-shopping-basket"></i> <span>Data Kategori</span></a></li>
        {{-- <li @if (Request::segment(1) == 'merek')class="active"@endif><a class="nav-link" href="{{ url('/merek') }}"><i class="fas fa-book-open"></i> <span>Merek</span></a></li> --}}
        {{-- <li @if (Request::segment(1) == 'promotion')class="active"@endif><a class="nav-link" href="{{ url('/promotion') }}"><i class="fas fa-gifts"></i> <span>Promo</span></a></li> --}}
        {{-- <li @if (Request::segment(1) == 'transaksi')class="active"@endif><a class="nav-link" href="{{ url('/transaksi') }}"><i class="fas fa-shopping-cart"></i> <span>Transaksi</span></a></li> --}}
        <li @if (Request::segment(1) == 'laporan')class="active"@endif><a class="nav-link" href="{{ url('/laporan') }}"><i class="fas fa-file"></i> <span>Laporan</span></a></li>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ url('logout') }}" class="btn btn-warning btn-lg btn-block btn-icon-split">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
  </aside>
</div>
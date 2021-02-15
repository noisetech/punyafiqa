<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu " data-widget="tree" style="margin-top: 50px;">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
            <a href="{{ route('ruangan.index') }}">
              <i class="fa fa-home"></i> <span>Ruangan</span>
            </a>
        </li>

        <li>
            <a href="{{ route('peminjamanruangan.index') }}">
              <i class="fa fa-list-alt"></i> <span>Peminjaman</span>
            </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
